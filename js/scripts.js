 $(document).ready(function(){

     //change forum link back to .php
     $('.nav>li a[href="forum/index.html"]').attr('href', 'forum/index.php');

     //change html to htm --> french biatches!!
     $('.nav>li a[href="https://ws.ricardo.ch/ricardoApiSecurity/documentation/index.html"]').attr('href', 'https://ws.ricardo.ch/ricardoApiSecurity/documentation/index.htm');

    //colorize body
    if ($('#wrap .content-bottom:first').length > 0) {
        $('body').css('background-color', '#f2f2f2');
    }

    //to top
    $('.top').UItoTop();


    /*form*/

     //get the choosed form
     $(".radioToggle").on('click', function(){
         var toggleVal = $('input[name=toggler]:checked').val();

         if (toggleVal == 1) {
             window.location.href = 'request.php';
         }else {
            window.location.href = 'request'+toggleVal+'.php';
         }
     });

     //Request form: Keep request link as active
     if ($(location).attr('href').indexOf('request') != -1) {
         $('.nav>li a[href="request.php"]').addClass('active');
     }

     //radio choice form1: (hide as default)
     $("[name=radio-drop]").on('click', function(){
        if($(this).val() == 2) {
            $('.form-drop:first').slideUp(250);
            $('.form-drop:first input').removeAttr('required');
        }else {
            $('.form-drop:first').slideDown(250);
            $('.form-drop:first input').attr('required', 'required');
        }
     });

     /* Q2A FORUM */

     //bottom info
     $('.span12 .alert-success').append('<span class="pull-right">We provide you an answer within 72 hours</span>');
});