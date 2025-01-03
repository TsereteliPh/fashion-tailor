"use strict";

function get_siblings(elem) {
	// for collecting siblings
	let siblings = [];
	// if no parent, return no sibling
	if (!elem.parentNode) {
		return siblings;
	}
	// first child of the parent node
	let sibling = elem.parentNode.firstChild;
	// collecting siblings
	while (sibling) {
		if (sibling.nodeType === 1 && sibling !== elem) {
			siblings.push(sibling);
		}
		sibling = sibling.nextSibling;
	}
	return siblings;
}

function slideDown(elem) {
	elem.style.maxHeight = `${elem.scrollHeight}px`;
}

function slideToggle(elem) {
	if (elem.offsetHeight === 0) {
		elem.style.maxHeight = `${elem.scrollHeight}px`;
	} else {
		elem.style.maxHeight = 0;
	}
}

function accordion() {
	const accordionHolders = document.querySelectorAll('.js-accordion');

	accordionHolders.forEach(accordion => {
		const accordionBtns = accordion.querySelectorAll('button');

		const accordionBtnsClose = () => {
			for (let btn of accordionBtns) {
				btn.classList.remove('active');
				btn.nextElementSibling.style.maxHeight = 0;
			}
		}

		accordionBtns.forEach(btn => {
			btn.addEventListener('click', function() {
				if (this.classList.contains('active')) {
					accordionBtnsClose();
				} else {
					accordionBtnsClose();
					this.classList.add('active');
					slideToggle(this.nextElementSibling);
				}
			})
		});
	});
}

function setHeaderScrollClass() {
	const header = document.querySelector('.header');

	window.addEventListener('scroll', function () {
		if (window.scrollY >= header.offsetHeight) {
			header.classList.add('scroll');
		} else {
			header.classList.remove('scroll');
		}
	});
}

function setTelMask() {
	[].forEach.call(document.querySelectorAll('[type="tel"]'), function (input) {
		let keyCode;

		function mask(event) {
			event.keyCode && (keyCode = event.keyCode);
			let pos = this.selectionStart;
			if (pos < 3) event.preventDefault();
			let matrix = '+7 (___) ___-__-__',
				i = 0,
				def = matrix.replace(/\D/g, ''),
				val = this.value.replace(/\D/g, ''),
				new_value = matrix.replace(/[_\d]/g, function (a) {
					return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
				});
			i = new_value.indexOf('_');
			if (i != -1) {
				i < 5 && (i = 3);
				new_value = new_value.slice(0, i);
			}
			let reg = matrix
				.substr(0, this.value.length)
				.replace(/_+/g, function (a) {
					return '\\d{1,' + a.length + '}';
				})
				.replace(/[+()]/g, '\\$&');
			reg = new RegExp('^' + reg + '$');
			if (
				!reg.test(this.value) ||
				this.value.length < 5 ||
				(keyCode > 47 && keyCode < 58)
			)
				this.value = new_value;
			if (event.type == 'blur' && this.value.length < 5) this.value = '';
		}

		input.addEventListener('input', mask, false);
		input.addEventListener('focus', mask, false);
		input.addEventListener('blur', mask, false);
		input.addEventListener('keydown', mask, false);
	});
}

function sendForm() {
	document.querySelectorAll('form[name]').forEach(function (form) {
		form.addEventListener('submit', function (e) {
			e.preventDefault();
			const form = this;
			form.classList.add('loader');
			let formData = new FormData(form);
			const formName = form.name;
			const fileInput = form.querySelector('input[type=file]');

			formData.append('action', 'send_mail');

			if (formName) {
				formData.append('form_name', formName);
			} else {
				return;
			}

			if (fileInput) {
				Array.from(fileInput.files).forEach((file, key) => {
					formData.append(key.toString(), file);
				});
			}

			const response = fetch(adem_ajax.url, {
				method: 'POST',
				body: formData,
			})
				.then(response => response.text())
				.then(data => {
					form.classList.remove('loader');
					Fancybox.close(true);
					form.reset();
					setTimeout(function () {
						Fancybox.show([
							{
								src: '#success',
								type: 'inline',
							},
						]);
					}, 100);
				})
				.catch(error => console.error('Error:', error));
		});
	});
}

function setFileName() {
	const fileInputs = document.querySelectorAll('input[type=file]');
	if (fileInputs) {
		fileInputs.forEach(function (input) {
			input.addEventListener('change', function (e) {
				e.target.nextElementSibling.textContent = e.target.files[0].name;
			});
		});
	}
}

function tabs() {
	const tabsLists = document.querySelectorAll('.js-tabs');
	if (tabsLists) {
		tabsLists.forEach(function (tabsList) {
			bindUIFunctions(tabsList);
		});
	}

	function bindUIFunctions(tabsList) {
		tabsList.addEventListener('click', function (e) {
			const tabItem = e.target.closest('li');
			if (tabItem.classList.contains('active')) {
				toggleMobileMenu(tabItem);
			}
			if (!tabItem.classList.contains('active') && e.target !== tabsList) {
				changeTab(tabItem);
			}
		});
	}

	function changeTab(tabItem) {
		const tabContainer = document.querySelector(
			'#' + tabItem.getAttribute('data-tab')
		);

		tabItem.classList.add('active');
		get_siblings(tabItem).forEach(function (tab) {
			tab.classList.remove('active');
		});

		tabContainer.classList.add('active');
		get_siblings(tabContainer).forEach(function (tab_container) {
			tab_container.classList.remove('active');
		});

		tabItem.parentNode.classList.remove('open');
	}

	function toggleMobileMenu(tabItem) {
		tabItem.parentNode.classList.toggle('open');
	}
}

//Ajax

function showMorePosts() {
	const show_more_btn = document.querySelector('.js-show-more');

	if (!show_more_btn) return;

	show_more_btn.addEventListener('click', function (e) {
		e.stopImmediatePropagation();
		const container = document.querySelector('.js-show-more-container');
		this.classList.add('loader');

		const response = fetch(adem_ajax.url, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
			},
			body: new URLSearchParams({
				action: 'load_more',
				query: posts,
				page: current_page,
			}),
		})
			.then(response => response.text())
			.then(data => {
				this.classList.remove('loader');
				container.insertAdjacentHTML('beforeend', data);
				current_page++;
				if (current_page === max_pages) this.remove();
			})
			.catch(error => console.error('Error:', error));
	});
}

document.addEventListener('DOMContentLoaded', function () {
	accordion();

	setHeaderScrollClass();

	setFileName();

	sendForm();

	setTelMask();

	showMorePosts();

	tabs();
});

//Fancybox

try {
	Fancybox.bind('[data-fancybox]', {
		animated: false,
	});
} catch (error) {
	console.error('Error: ' + error);
}

//Swiper

//Слайдер welcome

const welcomeSlider = document.querySelector('.welcome__advantages');

if (welcomeSlider && window.innerWidth < 1440) {
	let welcomeSwiper = new Swiper(welcomeSlider, {
		slidesPerView: 'auto',
		spaceBetween: 40,
		freeMode: true
	});
}

//Слайдер blocks/logistics

const logisticsSlider = document.querySelector('.logistics__slider');

if (logisticsSlider && window.innerWidth < 769) {
	let logisticsSwiper = new Swiper(logisticsSlider, {
		slidesPerView: 'auto',
		spaceBetween: 60,
		pagination: {
			el: '.logistics__pagination',
			bulletClass: 'pagination__bullet',
			bulletActiveClass: 'active',
			clickable: true
		},
		on: {
			afterInit: function() {
				if (this.slides.length <= this.params.slidesPerView) {
					this.pagination.el.style.display = 'none';
				}
			}
		}
	});
}

//Слайдер blocks/order-reasons

const reasonsCarousel = document.querySelector('.order-reasons__slider');

if (reasonsCarousel) {
	let reasonsSwiper = new Swiper(reasonsCarousel, {
		slidesPerView: 'auto',
		spaceBetween: 20,
		centerInsufficientSlides: true,
		navigation: {
			prevEl: '.order-reasons__prev',
			nextEl: '.order-reasons__next'
		},
		pagination: {
			el: '.order-reasons__pagination',
			bulletClass: 'pagination__bullet',
			bulletActiveClass: 'active',
			clickable: true
		},
		breakpoints: {
			1440: {
				slidesPerView: 4,
				spaceBetween: 40
			},
			992: {
				slidesPerView: 3,
			},
			769: {
				slidesPerView: 2
			}
		},
		on: {
			afterInit: function() {
				if (this.slides.length <= this.params.slidesPerView) {
					this.pagination.el.style.display = 'none';
					this.navigation.prevEl[0].parentNode.style.display = 'none';
				}
			}
		}
	});
}

//Слайдер blocks/order-reasons

const fabricsSlider = document.querySelector('.fabrics__slider');

if (fabricsSlider && window.innerWidth < 769) {
	let fabricsSwiper = new Swiper(fabricsSlider, {
		slidesPerView: 'auto',
		spaceBetween: 20
	});
}

//Слайдер blocks/reviews

const reviewsSliders = document.querySelectorAll('.reviews__slider');

if (reviewsSliders) {
	reviewsSliders.forEach(slider => {
		let reviewsSwiper = new Swiper(slider, {
			slidesPerView: 1,
			spaceBetween: 20,
			autoHeight: true,
			navigation: {
				prevEl: '.reviews__prev',
				nextEl: '.reviews__next'
			},
			breakpoints: {
				1440: {
					slidesPerView: 2,
					spaceBetween: 90,
				},
				992: {
					slidesPerView: 2,
					spaceBetween: 75
				},
				769: {
					slidesPerView: 2
				}
			},
			on: {
				afterInit: function() {
					if (this.slides.length <= this.params.slidesPerView) {
						slider.querySelector('.reviews__controls').style.display = 'none';
					}
				}
			}
		});
	});
}

//Слайдер blocks/partners

const partnersSlider = document.querySelector('.partners__slider');

if (partnersSlider) {
	let partnersSwiper = new Swiper(partnersSlider, {
		slidesPerView: 1,
		spaceBetween: 30,
		autoHeight: true,
		navigation: {
			prevEl: '.partners__prev',
			nextEl: '.partners__next'
		},
		breakpoints: {
			992: {
				spaceBetween: 75
			},
		},
		on: {
			afterInit: function() {
				if (this.slides.length <= this.params.slidesPerView) {
					this.navigation.prevEl[0].parentNode.style.display = 'none';
				}
			}
		}
	});
}

//Слайдер blocks/gallery-slider

const gallerySlider = document.querySelector('.gallery-slider__slider');

if (gallerySlider) {
	let gallerySwiper = new Swiper(gallerySlider, {
		slidesPerView: 'auto',
		spaceBetween: 20,
		centerInsufficientSlides: true,
		navigation: {
			prevEl: '.gallery-slider__prev',
			nextEl: '.gallery-slider__next'
		},
		pagination: {
			el: '.gallery-slider__pagination',
			bulletClass: 'pagination__bullet',
			bulletActiveClass: 'active',
			clickable: true
		},
		breakpoints: {
			1440: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 3,
			},
			769: {
				slidesPerView: 2
			}
		},
		on: {
			afterInit: function() {
				if (this.slides.length <= this.params.slidesPerView) {
					this.pagination.el.style.display = 'none';
					this.navigation.prevEl[0].parentNode.style.display = 'none';
				}
			}
		}
	});
}

//Слайдер blocks/advantages

const advantagesSlider = document.querySelector('.advantages__slider');

if (advantagesSlider) {
	let advantagesSwiper = new Swiper(advantagesSlider, {
		slidesPerView: 'auto',
		spaceBetween: 10,
		centerInsufficientSlides: true,
		pagination: {
			el: '.advantages__pagination',
			bulletClass: 'pagination__bullet',
			bulletActiveClass: 'active',
			clickable: true
		},
		breakpoints: {
			1540: {
				slidesPerView: 5,
				spaceBetween: 25,
			},
			1280: {
				slidesPerView: 4,
				spaceBetween: 25,
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 25,
			},
			769: {
				slidesPerView: 2
			}
		},
		on: {
			afterInit: function() {
				if (this.slides.length <= this.params.slidesPerView) {
					this.pagination.el.style.display = 'none';
				}
			}
		}
	});
}

//Слайдер blocks/certificates

const certificatesSlider = document.querySelector('.certificates__slider');

if (certificatesSlider) {
	let certificatesSwiper = new Swiper(certificatesSlider, {
		effect: 'cards',
		cardsEffect: {
			perSlideOffset: 15,
			perSlideRotate: 4,
			rotate: false
		},
		navigation: {
			prevEl: '.certificates__prev',
			nextEl: '.certificates__next'
		},
		on: {
			afterInit: function() {
				if (this.slides.length <= this.params.slidesPerView) {
					this.navigation.prevEl[0].parentNode.style.display = 'none';
				}
			}
		}
	});
}

// Функционал шапки сайта

document.addEventListener('DOMContentLoaded', function(e) {
	const header = document.querySelector('.header');

	if (header) {
		const headerBurger = header.querySelector('.header__burger');
		const headerDrop = header.querySelector('.header__drop');
		const headerCatalog = header.querySelector('.header__catalog');
		const headerCatalogBurger = headerCatalog.querySelector('.header__catalog-burger');

		const dropOpener = () => {
			header.classList.add('active');
			headerBurger.classList.add('active');
			headerDrop.style.maxHeight = headerDrop.scrollHeight + 'px';
			document.body.style.overflow = 'hidden';
		}

		const dropCloser = () => {
			header.classList.remove('active');
			headerBurger.classList.remove('active');
			headerDrop.style.maxHeight = 0;
			document.body.style.overflow = 'visible';
		}

		headerBurger.addEventListener('click', function() {
			if (this.classList.contains('active')) {
				dropCloser();
			} else {
				dropOpener();
			}
		})

		if (headerCatalog && window.innerWidth >= 991) {
			headerCatalog.onclick = () => {
				headerCatalog.classList.toggle('active');
				headerCatalogBurger.classList.toggle('active');
			}
		}
	}
})

//Header dropdown button

const headerCatalog = document.querySelector('.header__catalog');

// Banner logic for blocks/calculation-banner and

const banners = document.querySelectorAll('.js-banner');

if (banners && window.innerWidth >= 1440) {
	banners.forEach(banner => {
		const previousSibling = banner.previousElementSibling;
		const nextSibling = banner.nextElementSibling;
		const bannerHeight = banner.offsetHeight;

		banner.style.marginTop = '-' + bannerHeight / 2 + 'px';
		banner.style.marginBottom = '-' + bannerHeight / 2 + 'px';
		previousSibling.style.paddingBottom = parseFloat(getComputedStyle(previousSibling).paddingBottom) + bannerHeight / 2 + 'px';
		nextSibling.style.paddingTop = parseFloat(getComputedStyle(nextSibling).paddingTop) + bannerHeight / 2 + 'px';
	});
}

// Change title on price modals
const calcPriceBtns = document.querySelectorAll('[data-modal-title]');

if (calcPriceBtns) {
	calcPriceBtns.forEach(btn => {
		btn.addEventListener('click', function() {
			const modal = document.querySelector('.modal#callback');
			const modalTitle = modal.querySelector('.modal__title');

			modalTitle.textContent = this.dataset.modalTitle;
		})
	});
}
