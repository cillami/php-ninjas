
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
    async: false,
    data: {
      "display": 1
    },
    success: function() {
      $('.display_p').html();
    }
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
    success: function() {
      console.log("data");
      displayFromDatabase();
    }
  })
});

