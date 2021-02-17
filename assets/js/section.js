(function($, document, window){

$("#listSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();

    $(".myList .h-1").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

     $(".myList-2 .h-2").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

       $(".myList-3 .h-3").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

  });


    $("#listSearch").ready(function() {
       var value = $('#listSearch').val().toLowerCase();
     
      $(".myList .h-1").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });

       $(".myList-2 .h-2").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });

         $(".myList-3 .h-3").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });


  $('.note-video-clip').each(function(){
    var n = $(this).closest(".videos_content");
    var player = new Vimeo.Player(this);
    var src = $(this).attr('src');
    var content = $(n).data('content-pane');

    watched();

    function get_progress(handle_data) {
       $.ajax({
        type : "POST",
        url  : base_url +"users/get_progress",
        dataType : "JSON",
        async : true,
        data : {content:content, src:src},
        success: function(data){
          if(data.status){
            handle_data(data.progress);
          } else {
            handle_data(0);
          }
          
        }
      });
    }

    player.on('ready', function(){
      player.unmute();
    });

    get_progress(function(output){
      player.setCurrentTime(Math.round(output));

      player.on('ended', function(output){
         player.setCurrentTime(0);
      });
    });
   
    player.on('play', function(){
      player.off('play');
      player.on('timeupdate', onPlayProgress);
      player.on('ended', finished);
      player.play();
    });
    
    function onPlayProgress(data) {
      //var content = $('.videos_content').data('id');
      var progress = data.seconds;
      $.ajax({
        type : "POST",
        url  : base_url +"users/track_progress",
        dataType : "JSON",
        async : true,
        data : {progress:progress, src:src, content:content},
        success: function(data){
        }
      });
    }

    function finished() {
      $.ajax({
        type : "POST",
        url  : base_url +"users/finished_watched",
        dataType : "JSON",
        data : {src:src, content:content},
        success: function(data){
          if(data.error){
            toastr.success(' 50 Exp Gained!');
              
            var html = '';
            html += '<i class="fas fa-check-circle"></i> Watched!';
          
            $('.watched_'+content).html(html);
          } 
        }
      });
    }

    function watched() {
      $.ajax({
        type : "POST",
        url  : base_url +"users/watched_video",
        dataType : "JSON",
        data : {content:content},
        success: function(data){
          if(data.success){
            var html = '';
            html += '<i class="fas fa-check-circle"></i> Watched!';
            $('.watched_'+content).html(html);
          }
        }
      });
    }

  });


})(jQuery, document, window);