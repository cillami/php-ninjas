
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
    success: function(d) {
      $('#display_p').html(d);
    }
  })
}

$('#commentButton').click(function(event){
  var comment = $('#commentArea').val();
  event.preventDefault();
  $.ajax({
    url: "createComment.php",
    method: "POST",
    data: { "done": 1
    "comment": comment
  },
    dataType: "text",
    cache: false,
    success: function(data) {
      displayFromDatabase();
      $('#comment').val('');
      alert("Comment Complete");
    }
  })
});