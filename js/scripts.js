 $(document).ready(function(){


    //colorize body
    if ($('#wrap .content-bottom:first').length > 0) {
        $('body').css('background-color', '#f2f2f2');
    }

    //to top
    $('.top').UItoTop();


    //form
	/*$(function() {
         $("[name=toggler]").click(function(){
             $('.toHide').hide();
             $("#blk-"+$(this).val()).show('slow');

         });
     });

     $(".toHide").css("display","none");
     $(".radioToggle").click(function(){
         if ($('input[name=toggler]:checked').val() == "1" ) {
             $("#blk-1").slideDown("fast"); //Slide Down Effect
         } else {
            $("#blk-1").slideUp("fast");  //Slide Up Effect
         }
         if ($('input[name=toggler]:checked').val() == "2" ) {
             $("#blk-2").slideDown("fast"); //Slide Down Effect
         } else {
             $("#blk-2").slideUp("fast");  //Slide Up Effect
         }
         if ($('input[name=toggler]:checked').val() == "3" ) {
             $("#blk-3").slideDown("fast"); //Slide Down Effect
         } else {
             $("#blk-3").slideUp("fast");  //Slide Up Effect
         }
     });
     */
     $(".radioToggle").click(function(){
         if ($('input[name=toggler]:checked').val() == "1" ) {
             window.location.href = 'request.php';
         }
         else if ($('input[name=toggler]:checked').val() == "2" ) {
             window.location.href = 'request2.php';
         }
         else if ($('input[name=toggler]:checked').val() == "3" ) {
             window.location.href = 'request3.php';
         }
     });
});