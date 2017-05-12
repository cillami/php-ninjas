

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