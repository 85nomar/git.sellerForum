 $(document).ready(function(){




    //colorize body
    if ($('#wrap .content-bottom:first').length > 0) {
        $('body').css('background-color', '#f2f2f2');
    }

    //to top
    $('.top').UItoTop();



    //form
	$(function() {
	    $("[name=toggler]").click(function(){
	            $('.toHide').hide();
	            $("#blk-"+$(this).val()).show('slow');
	    });
 	});

});