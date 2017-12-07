$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  $('#post-comment-1').click(function(){
    var typeComment = $('.comment-type').data('type-comment');
    var content = $('#comment1').val();
    var targetId = $('.target_id').data('target-id');
    var userId = $('.user_id').data('user-id');
    var data  = {
      'target_id': targetId,
      'content' : content,
      'user_id': userId,
      'type' : typeComment
    }
    $.ajax({
           type: 'POST',
           url: '/user/comment',
           dataType: 'html',
           data: data,
           success: function (result) {
               $('#comment2').append(result);
           }
       });
  });

  $(document).on('click', '.delete-comment1', function (e) {
    e.preventDefault();
    var conf = confirm("Do you want to delete this comment?");
    if (conf) {
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: '/user/deleteComment',
            dataType: 'html',
            data: {
                'id': id,
            },
            success: function (result) {
                $('#comment2').html(result);
            }
        });
    }
  });
});
