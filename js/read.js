// 非同期処理
$(document).ready(function() {
  $('.likeBtn').click(function(e) {
      e.preventDefault();
      var index = $(this).data('index');
      var btn = $(this);
      
      $.post('like.php', {index: index}, function(data) {
          btn.text('❤︎ ' + data + '');
      });
  });

  // ボタンアクション
  $(function() {
    $(".likeBtn").click(function() {
      var $touch = $(this);
      $touch.addClass('active');
      setTimeout(function() {
        $touch.removeClass('active');
      }, 300);
    });
  });
});

