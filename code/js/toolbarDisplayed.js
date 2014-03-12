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
});