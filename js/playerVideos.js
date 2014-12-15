$(document).ready(function(){

        $( "span.player" ).click(function( event ) {
            
            name = event.target.innerHTML;

            $.post('youtubeVideos.php',{query : name},function(data){
                $('div.videos').html(data);
                return data;
            });

          });
});

