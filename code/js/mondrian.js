jQuery(document).ready(function(){

    var wrapperToolbarHeight = jQuery('.wrapper-toolbar').css('min-height');

    jQuery('.wrappToolbar').css('height','11px');
    jQuery('#toolbar ul.nav').css('padding-bottom','20px');

    jQuery("#btnToolbar").click(function(){

        jQuery('.wrapper-toolbar').toggleClass('wtheight')


        if (jQuery('.wrapper-toolbar').hasClass('wtheight')) {
            jQuery('.wrappToolbar').css('height',wrapperToolbarHeight);
            jQuery('#toolbar ul.nav').css('padding-bottom','0');
            jQuery('#btnToolbar').css('margin-top','0');
        }else{
            jQuery('.wrappToolbar').css('height','11px');
            jQuery('#toolbar ul.nav').css('padding-bottom','20px');
            jQuery('#btnToolbar').css('margin-top','-11px');
        };
    });
    
});
