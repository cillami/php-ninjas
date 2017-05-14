
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
    url: "partials/showComment.php",
    type: "POST",
    async: false,
    data: {
      "display": 1
    },
    success: function(d) {
      $('#display_p').html(d);
    }
  })
}

$('#commentButton').submit(function(event){
  
  //var comment = $('#commentArea').val();
  event.preventDefault();
  $.ajax({
    url: "partials/createComment.php",
    method: "POST",
    body: new FormData(this),
    /*data: $('#commentArea').serialize(),
    dataType: "text",*/
    cache: false,
    success: function() {
      console.log(data);
      //displayFromDatabase();
     // $('#comment').val('');
      alert("Comment Complete");
    }
  })
});

