 $(document).ready(function(){

     //change forum link back to .php
     $('.nav>li a[href="forum/index.html"]').attr('href', 'forum/index.php');

    //colorize body
    if ($('#wrap .content-bottom:first').length > 0) {
        $('body').css('background-color', '#f2f2f2');
    }

    //to top
    $('.top').UItoTop();


    /*form*/

     //add or remove www. on focus
     $('input[name="inputUrl"], input[name="inputUrl2"]').on('focus', function(){
         var $this = $(this);
         if($this.val() == ''){
             $this.val('www.');
         }
     }).on('blur', function(){
             var $this = $(this);
             if($this.val() == 'www.'){
                 $this.val('');
             }
         });

     //get the chosen form
     $(".radioToggle").on('click', function(){
         var toggleVal = $('input[name=toggler]:checked').val();

         if (toggleVal == 1) {
             window.location.href = 'request.php';
         }else {
            window.location.href = 'request'+toggleVal+'.php';
         }
     });

     /* NAVIGATION*/

    //Documentation Advice
    var DocLink = $('.nav>li>a:contains("Documentation")');


     //set Cookie
    if ($.cookie('notShowAdvice') == undefined) {
        DocLink.addClass('overlayInfo');
    };
    DocLink.on('click', function() {
        var adviceText = "<h1>Advice</h1><p>You won't be able to see the <strong>technical documentations</strong> if you don't have access to our API.</p><p>Please be sure you got our access. Otherwise make a request.</p>"
        var adviceButtons = "<div class='advice-btn pull-right'><a href='#' id='ok' class='btn'>OK</a><a href='request.html' class='btn btn-primary'>request</a></div>"

        if($(this).hasClass('overlayInfo') === true) {
            $('#wrap').prepend('<div id="advice"><div id="BGdark"><div></div></div><div class="advice-message"><div class="container"><div class="row-fluid">'+adviceText + adviceButtons+'</div></div></div></div>');
            $(this).removeClass('overlayInfo');

            $(".advice-message").stop(true).animate({
                top: '25%'
            }, 300);

            $('#ok').on('click', function(){
                $('#advice').fadeOut('fast', function() {
                    $(this).remove();
                });
                $.cookie('notShowAdvice', true, { expires: 1 });
            });
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