disableToolbarResize = true;

function FloatingContainerAlign(){
    jQuery('.mondrianFloatingContainer').css('top', jQuery('.wrappToolbar').height() + 40 + 'px');
    if (jQuery(window).width() <= 979){
    	jQuery('.mondrianFloatingContainer').css('top', jQuery('.wrappToolbar').height() + 10 + 'px');
    }
}


jQuery(document).ready(function() {

	jQuery('.wrappToolbar .wrapper-toolbar').css('min-height',jQuery('.wrappToolbar .mondrian-toolbar-container').height() + 'px');
	FloatingContainerAlign();

	jQuery(window).resize(function() {
		jQuery('.wrappToolbar .wrapper-toolbar').css('min-height',jQuery('.wrappToolbar .mondrian-toolbar-container').height() + 'px');
		FloatingContainerAlign();
	});

	jQuery('.mondrianToolbarSwitch').click(function (b) {
		if (jQuery('.wrappToolbar').hasClass('collapsedToolbar')) {
			jQuery('.wrappToolbar').removeClass('collapsedToolbar');
			jQuery('.wrappToolbar .mondrian-toolbar-container').removeClass('collapsedToolbarInner');
			jQuery(this).css({top: jQuery('.wrappToolbar .mondrian-toolbar-container').height() + 'px'});
			jQuery('.mondrianFloatingContainer').css({top: jQuery('.wrappToolbar .mondrian-toolbar-container').height()+40 + 'px'});
		}
		else {
			jQuery('.wrappToolbar').addClass('collapsedToolbar');
			jQuery('.wrappToolbar .mondrian-toolbar-container').addClass('collapsedToolbarInner');
			jQuery(this).css({top: '0'});
			jQuery('.mondrianFloatingContainer').css({top: '60px'});
		}
		jQuery('.wrappToolbar .wrapper-toolbar').css({minHeight: jQuery('.wrappToolbar .mondrian-toolbar-container').height() + 'px'});
	});

	jQuery('div.mondrianFloatingModule ul.nav a').each(function (i) {
		if (jQuery(this).children('span.image-title')) {
			jQuery(this).attr('title',jQuery(this).children('span.image-title').html());
		}
	});

	jQuery('img.mondrian-speaker').each(function (i) {
		var a = jQuery(this).parent();
		var link = a.attr('href');
		var target = a.attr('target');
		var title = jQuery(this).attr('title');
		if (title.length) {
			a.addClass('mondrian-speaker-link');
			a.css({position: 'relative'});
			a.append('<span class="mondrian-speaker-info"><span>');
			var info = a.children('.mondrian-speaker-info');
			info.html(title);
			info.append('<i class="icon-twitter"></i>');
			info.css({height: jQuery(this).height() + 'px', width: jQuery(this).width() + 'px' });

			a.hover(function () {
				jQuery(this).children('.mondrian-speaker-info').css({display: 'block'});
				jQuery(this).children('.mondrian-speaker').css({opacity: '0.2'});
			}, function() {
				jQuery(this).children('.mondrian-speaker-info').css({display: 'none'});
				jQuery(this).children('.mondrian-speaker').css({opacity: '1'});
			});
		}
	})


	jQuery(window).load(function() {
		jQuery('img.mondrian-speaker').each(function (i) {
			var a = jQuery(this).parent();
			var title = jQuery(this).attr('title');
			if (title.length) {
				var info = a.children('.mondrian-speaker-info');
				info.css({height: jQuery(this).height() + 'px', width: jQuery(this).width() + 'px' });
			}
		});
	});

});
