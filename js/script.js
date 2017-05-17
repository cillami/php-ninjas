
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


$('.commentButton').on('click',function(event){
  event.preventDefault();
  event.stopImmediatePropagation();
  if ($(this).closest('.createComment').find('textarea').val() === '') {
    alert("Please type something");
    return 
  }
  $.ajax({
    url: "createComment.php",
    method: "POST",
    data: $(this).closest('.createComment').serialize(),
    dataType: "text",
    success: function(response) {
      console.log(response);
      displayFromDatabase(response, $(event.target));
      $(event.target).closest('.createComment').find('textarea').val('');
    },
    error: function (response){
      console.log(response.status);
      alert(" it doesnt work... : ");
    }
  })
});


function displayFromDatabase(jsonresponse, button) {
    var comment = JSON.parse(jsonresponse);
    console.log(comment);
    var lastComment = button.closest('.card-block').find('.comment-wrap').last();
    var template = `
    <div class="commentstyle">
    <p class="card-text display_p">
    ${comment.comment}
    </p>
    <p class="card-text display_p">
    Comment by: ${comment.username} ${comment.commentDate}
    </p>
    </div>
    `;
    $(template).insertAfter(lastComment);
}




$("#delPost").click(function(event){
 event.preventDefault();
   $.ajax({
  url: "../partials/deletePost.php",
  method: "POST",
  data:   $(".delform").serialize(),
  dataType: "text",
  success: function(data){

  var x = $('input[name=delbtn]').val();

  var p = document.getElementById("post"+x);
     
      p.remove();

  },
  error: function(){
      alert(" it doesnt work... : ");
    }
})
});



