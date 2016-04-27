$(function() {
	good = $('article .good');
	closeBtn = $('[src$="close.png"]');
	modal = $('[class^="modal"]');
	zoom = modal.filter('modal-zoom');
	goods = $('aside .good');
	imageTag = 'img';
	source = 'src';
	discounts = '[class^="discount"]';
	overlay = $('.overlay');

	/*
		Клик на кнопке "закрыть""
	*/
	closeBtn.click(function() {
		hideAnyModal();
	});

	/*
		Клик по первому товару слева
	*/
	good.eq(0).click(function() {
		showModal(modal.first());
	});

	/*
		Клик по второму товару слева
	*/
	good.eq(1).click(function() {
		showModal(modal.eq(1));
	});

	/*
		Клик по товарам справа
	*/
	goods.click(function() {
		prepareZoom($(this));
	});

	/*
		Клик по оверлею
	*/
	overlay.click(function() {
		hideAnyModal();
	});

	function prepareZoom(el) {
		image = el.find(imageTag).attr(source);
		discount = el.find(discounts).text();
		makeZoom(image, discount);
	}

	function hideAnyModal() {
		modal.fadeOut();
		hideOverlay();
	}

	function showModal(el) {
		scrollToTop();
		showOverlay();
		el.fadeIn();
	}

	function hideModal(el) {
		el.fadeOut();
		hideOverlay();
	}

	function makeZoom(image, discount) {
		scrollToTop();
		zoomBox = $('.modal-zoom'); 

		imageEl = zoomBox.find('.zoomed img');
		imageEl.attr('src', image);

		discountEl = zoomBox.find('.discount__huge');
		discountEl.text(discount);

		zoomBox.fadeIn();

		showOverlay();
	}

	function showOverlay() {
		overlay.fadeIn();
	}

	function hideOverlay() {
		overlay.fadeOut();
	}

	function scrollToTop() {
		parent = $('html, body');
		parent.animate({
				scrollTop: $('header').offset().top
		});		
	}

});