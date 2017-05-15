
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
    method: 'GET',
    url: 'showComment.php',
  //när det funkar :
  success: (response) => {
    alert("Comment Posted");
  },
  //errors
  error: (error) => {console.log(error)}, //alt .fail((error)=> error)
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
      displayFromDatabase();
    },
    error: function (response){
      console.log(response.status);
      alert(" it doesnt work... : ");
    }
  })
});



