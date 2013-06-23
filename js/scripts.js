 $(document).ready(function(){

     //change forum link back to .php
     $('.nav>li a[href="forum/index.html"]').attr('href', 'forum/index.php');

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
     */
     //set menue active

     $(".radioToggle").click(function(){
         var toggleVal = $('input[name=toggler]:checked').val();

         if (toggleVal == 1) {
             window.location.href = 'request.php';
         }else {
            window.location.href = 'request'+toggleVal+'.php';
         }
     });
     //set menu as active
     if ($(location).attr('href').indexOf('request') != -1) {
         $('.nav>li a[href="request.php"]').addClass('active');
     }



     /* Q2A FORUM */

     //bottom info
     $('.span12 .alert-success').append('<span class="pull-right">We provide you an answer within 72 hours</span>');
});