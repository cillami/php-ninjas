
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
    url: "showComment.php",
    type: "POST",
    data: {
      "display": 1
    },
    async: false,
    dataType: "html",
    success: function() {
      $('.display_p').html();
      console.log(response);
    },
    error: function (response, error) {
      console.log(arguments);
      alert(" shit dont work fix it: " + error);
    },
  })
}

$('.commentButton').on('click',function(event){
  //event.preventDefault();
  $(this).off(event);
  $.ajax({
    url: "createComment.php",
    method: "POST",
    data: $(this).closest('.createComment').serialize(),
    dataType: "text",
      error: function (response, error) {
      console.log(arguments);
      alert(" it doesnt work... : " + error);
    },
    success: function() {
      console.log("data");
      alert("comment Complete");
      //displayFromDatabase();
    }
  })
});

