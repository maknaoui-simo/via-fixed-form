/* Via Fixed Form
 * @autor : Maknaoui Mohamed
 * @date : 2015-12-20
 * @version : 1.0
 */

(function( $ ) {
	'use strict';

	$(function() {
		var vffLeft = $("#vff-left"),
			vffTriggerLeft = $("#vff-trigger-left"),
			vffRight = $("#vff-right"),
			vffTriggerRight = $("#vff-trigger-right"),
			vffOverlayWrapper = $("#vff-overlay-wrapper"),
			vffOverlay = $("#vff-overlay");

		//$("body").addClass('vff-slide');

		// Trigger Click LEFT
		vffTriggerLeft.delegate(vffLeft, 'click', function (event) {
			if(checkSidebar() == true){
				hideSidebar(vffLeft, vffTriggerLeft);
			}else{
				showSidebar(vffLeft, vffTriggerLeft);
			}
		});
		// Trigger Click RIGHT
		vffTriggerRight.delegate(vffRight, 'click', function (event) {
			if(checkSidebar() == true){
				hideSidebar(vffRight, vffTriggerRight);
			}else{
				showSidebar(vffRight, vffTriggerRight);
			}
		});

		// Overlay click LEFT
		vffOverlay.delegate(vffLeft, 'click', function (event) {
			event.preventDefault();
			hideSidebar(vffLeft, vffTriggerLeft);
		});

		// Overlay click Right
		vffOverlay.delegate(vffRight, 'click', function (event) {
			event.preventDefault();
			hideSidebar(vffRight, vffTriggerRight);
		});

	});


	function hideSidebar (el, tr) {
		// TODO : hide Sidebar
		el.css({bottom: '-'+el.innerHeight()+'px'});
		tr.css('bottom', 0);
		$("#vff-overlay-wrapper").css('visibility', 'hidden');
		$("body").removeClass('vff-open');
		$("span.toggle-icon").addClass('icon-up-open-big');
		$("span.toggle-icon").removeClass('icon-down-open-big');
	}

	function showSidebar (el, tr) {
		// TODO : show Sidebar
		el.css({bottom: 0});
		tr.css('bottom', el.innerHeight()+'px');
		$("#vff-overlay-wrapper").css('visibility', 'visible');
		$("body").addClass('vff-open');
		$("span.toggle-icon").removeClass('icon-up-open-big');
		$("span.toggle-icon").addClass('icon-down-open-big');
	}

	/**
	 * [checkSidebar Chech sidebar state if Open or Close by checking class in <body> TAG]
	 * @return {[boolean]} TRUE          [if sidebar state is Open]
	 *                     FALSE         [if sidebar state is Close]
	 */
	function checkSidebar () {
		var body = $("body");
		if (body.hasClass('vff-open')) {
			return true;
		}else{
			return false;
		}
	}

	/*$(function() {
		var leftForm = $('.content-left-form'),
			rightForm = $('.content-right-form'),
			leftFormHeight = leftForm.innerHeight(),
			rightFormHeight = rightForm.innerHeight(),
			toggleLeft = $('#toggle-left-form'),
			toggleRight = $('#toggle-right-form');


		leftForm.css('bottom', '-' + leftFormHeight + 'px');
		rightForm.css('bottom', '-' + rightFormHeight + 'px');

		toggleLeft.delegate(leftForm, 'click', function(event) {
			
			if (leftForm.hasClass('closed')) {
				leftForm.removeClass('closed');
				leftForm.animate({bottom: 0}, 500);
			}else{
				// TODO : When click to close Form
			}

		});


	});*/

})( jQuery );
