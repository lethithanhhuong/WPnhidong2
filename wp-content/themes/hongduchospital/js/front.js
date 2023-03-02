/** SWIPER */
// RUN SLIDER IN MOBILE
let sliderMobileList = [];
function sliderMobile() {
	var screenWidth = $(window).width();
	if (screenWidth > 768 && sliderMobileList.length !== 0) {
		sliderMobileList.map((s) => s.destroy());
		sliderMobileList = [];
		$('.swiper-wrapper').removeAttr('style');
		$('.swiper-slide').removeAttr('style');
	} else if (screenWidth <= 768 && sliderMobileList.length === 0) {
		$('.is-slider-mobile').each(function () {
			const $this = $(this);
			const $swiper = $this.find('.swiper-container');
			const nextBtn = $this.find('.swiper-button-next');
			const prevBtn = $this.find('.swiper-button-prev');
			const pagination = $this.find('.swiper-pagination');
			const isLoop = $this.hasClass('--loop') || false;
			const isParallax = $this.hasClass('--parallax') || false;
			const isCenter = $this.hasClass('--center') || false;
			const isAuto =
				($this.hasClass('--auto') && {
					speed: 6000,
					delay: 5000,
					disableOnInteraction: false,
				}) ||
				false;
			const tempSwiper = new Swiper($swiper, {
				speed: 1200,
				// autoHeight: false,
				autoplay: isAuto,
				slidesPerView: 'auto',
				watchSlidesProgress: true,
				// TRIGGER SWIPER RUN ASYNCHRONOUS
				observer: true,
				observeParents: true,
				observeSlideChildren: true,
				pagination: {
					el: pagination,
					clickable: true,
				},
				navigation: {
					nextEl: nextBtn,
					prevEl: prevBtn,
				},
				centeredSlides: isCenter,
				parallax: isParallax,
				loop: isLoop,
			});
			sliderMobileList.push(tempSwiper);
		});
	}
}
$('.is-slider-mobile').length && sliderMobile();
$(window).on('resize', function () {
	$('.is-slider-mobile').length && sliderMobile();
});

// RUN SLIDER IN MOBILE - END

// FUNCTION SLIDER COMMON
function swiper(el, callback = null) {
	const $this = $(el);
	const $swiper = $this.find('.swiper-container');
	const nextBtn = $this.find('.swiper-button-next');
	const prevBtn = $this.find('.swiper-button-prev');
	const pagination = $this.find('.swiper-pagination');
	const isLoop = $this.hasClass('--loop') || false;
	const isParallax = $this.hasClass('--parallax') || false;
	const isAuto =
		($this.hasClass('--auto') && {
			speed: 6000,
			delay: 5000,
			disableOnInteraction: false,
		}) ||
		false;
	const isCenter = $this.hasClass('--center') || false;
	const swiper_common = new Swiper($swiper, {
		speed: 1200,
		// autoHeight: false,
		autoplay: isAuto,
		slidesPerView: 'auto',
		watchSlidesProgress: true,
		observer: true,
		observeParents: true,
		observeSlideChildren: true,
		pagination: {
			el: pagination,
			clickable: true,
		},
		navigation: {
			nextEl: nextBtn,
			prevEl: prevBtn,
		},
		centeredSlides: isCenter,
		parallax: isParallax,
		loop: isLoop,
		on: {
			slideChange: function () {
				callback && callback.call(this);
			},
			// slideChangeTransitionStart: function () {},
		},
	});
}


// BLOG
$('.blog-best .is-slider').length && swiper('.blog-best .is-slider');
$('.blog-exp .is-slider').length && swiper('.blog-exp .is-slider');
$('.cu-exp .is-slider').length && swiper('.cu-exp .is-slider');
// BLOG DETAIL
$('.blog-dt__slider .is-slider').length &&
	swiper('.blog-dt__slider .is-slider');


/** SWIPER - END*/

var Swipes = new Swiper(".slider-about-banner .swiper-container", {
	loop: true,
	navigation: {
		nextEl: ".slider-about-banner .swiper-button-next",
		prevEl: ".slider-about-banner .swiper-button-prev"
	},
	pagination: {
		el: ".slider-about-banner .swiper-pagination"
	}
});


$("a[href='#top']").click(function () {
	$("html, body").animate({ scrollTop: 0 }, "slow");
	return false;
});

jQuery(document).delegate("#CRhome_page .CRbtn_term_load a", "click", function () {
	if (jQuery(this).attr('disabled') != 'disabled') {
		var page = jQuery(this).attr('data-page'),
			parent = jQuery(this).attr('data-parent'),
			total = jQuery(this).attr('data-total');
		jQuery(this).attr('disabled', 'disabled');
		jQuery(this).attr('data-loading', jQuery(this).html());
		jQuery(this).html('<i class="spinner-submit"></i>');
		postbyurl('hide_me', hr.a_url + '?action=CRload_more_term_sv', 'page=' + page + '&total=' + total + '&parent=' + parent);
	}
});


if (document.querySelector('.pd-links-slider-wrap')) {
	const sliderWrap = document.querySelector('.pd-links-slider-wrap');
	const slider = sliderWrap.querySelector('.swiper-container');
	const pagination = sliderWrap.querySelector('.swiper-pagination');
	const prevBtn = sliderWrap.querySelector('.swiper-button-prev');
	const nextBtn = sliderWrap.querySelector('.swiper-button-next');
	new Swiper(slider, {
		speed: 1200,
		autoHeight: false,
		slidesPerView: 'auto',
		pagination: {
			el: pagination,
			clickable: true,
		},
		navigation: {
			nextEl: nextBtn,
			prevEl: prevBtn,
		},
		loop: false,
		slidesPerView: 1,
		spaceBetween: 10,
		breakpoints: {
			'320': {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			'480': {
				slidesPerView: 3,
				spaceBetween: 40,
			},
			'768': {
				slidesPerView: 3,
				spaceBetween: 50,
			},
		}

	});
}



$(document).ready(function () {
	$('button').click(function () {
		var value = $('input').val();
		console.log($('#list-professor [value="' + value + '"]').data('value'));
	});
});

$(document).ready(function () {
	$("[list='my-list']").on("input propertychange", function () {
		window.location = $("#my-list option[value='" + $("[list='my-list']").val() + "']").find("a").attr("href")
	});
});

//   $(function() {
// 	$('.icon').map((index,item) => {
// 	  $(item).click(function() {
// 		// select which info panel to show/hide.
// 		$('.info'+index).toggle();
// 		// hide any info panels that are not info1.
// 		$('.info').not('.info'+index).hide();
// 		 }); 
// 	}); 

// });
// $(function() {
// 	$('.icon-cucu').map((index,item) => {
// 	  $(item).click(function() {
// 		// select which info panel to show/hide.
// 		$('.info-cucu'+index).toggle();
// 		// hide any info panels that are not info1.
// 		$('.info').not('.info-cucu'+index).hide();
// 		 }); 
// 	}); 

// });
// $(function() {
// 	$('.icon-cl').map((index,item) => {
// 	  $(item).click(function() {
// 		// select which info panel to show/hide.
// 		$('.info-cl'+index).toggle();
// 		// hide any info panels that are not info1.
// 		$('.info').not('.info-cl'+index).hide();
// 		 }); 
// 	}); 

// });

$('.cac-chuyen-khoa li').click(function () {
	var pos = $(this).position();
	const findDiv = $(this).find('div');
	const findSiblingsDiv = $(this).siblings().find('div');
	const findSiblingsDiv1 = $(this).parents(".cac-chuyen-khoa-noi").siblings().find('.info');
	findSiblingsDiv.fadeOut();
	findSiblingsDiv1.fadeOut();
	$(this).parents(".cac-chuyen-khoa-noi").siblings().find('.cac-chuyen-khoa li').removeClass('active');
	$(this).siblings().removeClass('active');
	findDiv.css('top', (pos.top) - 50 + 'px').fadeToggle();
	$(this).addClass('active')
	$(this).find('.fa-window-close').click(function (e) {
		e.stopPropagation();
		findDiv.fadeOut();
	})
})



//light-gallery
$(".library-box").on("click", function (e) {
	e.preventDefault();
	let $thumb = $(this).find(".mona-gallery-dys").attr("data-thumb");
	$thumb = $.parseJSON($thumb);
	if ($thumb) {
		// console.log($thumb);
		$(this).lightGallery({
			share: false,
			actualSize: false,
			download: false,
			autoplayControls: false,
			dynamic: true,
			dynamicEl: $thumb,
			thumbnail: true,
			animateThumb: true,
			showThumbByDefault: true,
		});
	}
});


$(".gallery-box-multi").lightGallery({
	share: false,
	actualSize: false,
	download: false,
	autoplayControls: false,
	thumbnail: true,
	animateThumb: true,
	showThumbByDefault: true,
});

$(".gallery-box-multi").lightGallery({
	share: false,
	actualSize: false,
	download: false,
	autoplayControls: false,
	thumbnail: true,
	animateThumb: true,
	showThumbByDefault: true,
});

$(".gallery-box-single li").on("click", function (e) {
	e.preventDefault();
	let $thumb = $(this).find(".mona-gallery-dys").attr("data-thumb");
	$thumb = $.parseJSON($thumb);
	if ($thumb) {
		$(this).lightGallery({
			share: false,
			actualSize: false,
			download: false,
			autoplayControls: false,
			dynamic: true,
			dynamicEl: $thumb,
			thumbnail: true,
			animateThumb: true,
			showThumbByDefault: true,
		});
	}
});
