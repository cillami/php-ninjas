
$('#submitRegUser').click(function(event){
 event.preventDefault();
 $.ajax({
  url: "partials/createUser.php",
  method: "POST",
  data: $('#RegUserForm').serialize(),
  dataType: "text",
  success: function(){
    $('#message').text('Welcome! You are now registered, please sign in!')
  }

})
});

function displayFromDatabase() {
    $.ajax({ 
    type: 'POST',                                     
      url: 'showComment.php',                  //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
        console.log("Comment Complete");
        var id = data[0];              //get id
        var vname = data[1];           //get name
        //--------------------------------------------------------------------
        // 3) Update html content
        //--------------------------------------------------------------------
        $('.display_p').html("<b>id: </b>"+id+"<b> name: </b>"+vname); //Set output element html
        //recommend reading up on jquery selectors they are awesome 
        // http://api.jquery.com/category/selectors/
      },
       error: function (response) {
        console.log(response.status);
        alert(" shit dont work fix it: ");
      }
  }); 
}

$('.commentButton').on('click',function(event){
  event.preventDefault();
  event.stopImmediatePropagation();
  //$(this).off(event);
  $.ajax({
    url: "createComment.php",
    method: "POST",
    data: $(this).closest('.createComment').serialize(),
    dataType: "text",
    success: function() {
      console.log("data");
      //alert("comment Complete");
      displayFromDatabase();
    },
    error: function (response){
      console.log(response.status);
      alert(" it doesnt work... : ");
    }
  })

});

