	$(document).ready(function(){
		$('.calculate__select select').selectric();
		$('.terras-calculate__select select').selectric();
		$('.terras-calc select').selectric();

		$('.calculate__select select').selectric().on('change', function() {
			changeCalculate();
		});
	});

	function changeCalculate() {
		if(document.querySelector('.calculate__select .label').innerHTML == 'Заборов') {
			if(document.querySelector('.fence-calculate').classList.contains('hide')) {
				document.querySelector('.fence-calculate').classList.remove('hide')
				document.querySelector('.terras-calculate').classList.add('hide');
			}

		} else {
			if(document.querySelector('.terras-calculate').classList.contains('hide')) {
				document.querySelector('.terras-calculate').classList.remove('hide');
				document.querySelector('.fence-calculate').classList.add('hide');
			}
		}
	}

	/*Кнопки для 06.выберите модель*/
	let btnStepPlus = document.querySelectorAll('.terras-steps .plus');
	let btnStepMinus = document.querySelectorAll('.terras-steps .minus');
	let btnWidthPlus = document.querySelectorAll('.terras-width .plus');
	let btnWidthMinus = document.querySelectorAll('.terras-width .minus');


	btnStepPlus.forEach((item) => {
		item.onclick = function() {
			let btnStepNum = document.querySelector('.swiper-slide-active .terras-steps .num').innerHTML;
			document.querySelector('.swiper-slide-active .terras-steps .num').innerHTML = Number(btnStepNum)+1;
		}
	});

	btnStepMinus.forEach((item) => {
		item.onclick = function() {
			let btnStepNum = document.querySelector('.swiper-slide-active .terras-steps .num').innerHTML;
			if(btnStepNum > 0) {
				document.querySelector('.swiper-slide-active .terras-steps .num').innerHTML = Number(btnStepNum)-1;
			}
		}
	});

	btnWidthPlus.forEach((item) => {
		item.onclick = function() {
			let btnStepNum = document.querySelector('.swiper-slide-active .terras-width .num').innerHTML.split(',').join('.');
			let answer = (Number(btnStepNum)+0.1).toFixed(1);
			document.querySelector('.swiper-slide-active .terras-width .num').innerHTML = String(answer).split('.').join(',');
		}
	});

	btnWidthMinus.forEach((item) => {
		item.onclick = function() {
			let btnStepNum = document.querySelector('.swiper-slide-active .terras-width .num').innerHTML.split(',').join('.');
			if(btnStepNum > 0) {
				let answer = (Number(btnStepNum)-0.1).toFixed(1);

				document.querySelector('.swiper-slide-active .terras-width .num').innerHTML = String(answer).split('.').join(',');
			}
		}
	});

	var galleryThumbs1 = new Swiper('.terras-gallery-thumbs-one', {
		spaceBetween: 50,
		loop: true,
		centeredSlides: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		observer: true,
		observeParents: true,
		hashNavigation: {
			watchState: true,
		},
		scrollbar: {
			el: '.swiper-scrollbar',
		},
		breakpoints: {
			599: {
				slidesPerView: 2.5,
			},
			767: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 3.5,
				slidesOffsetBefore: -110
			},
			1199: {
				slidesPerView: 4.5,
			},
			1919: {
				spaceBetween: 10,
				slidesPerView: 5
			},
			2000: {
				slidesPerView: 7.5,
				slidesOffsetBefore: -60,
				centeredSlides: false
			}
		}
	});

	var galleryTop1 = new Swiper('.terras-slider-up-one', {
		spaceBetween: 10,
		loop:true,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		thumbs: {
			swiper: galleryThumbs1,
		},
	});

	galleryThumbs1.on('slideChangeTransitionEnd', function () {

		let titleNav = document.querySelector('.terras-calculate .main-back-title');
		let title = document.querySelector('.terras-calculate .terras-slider-up-one .swiper-slide-active h3').innerHTML;

		titleNav.innerHTML = title;

	});

	galleryTop1.on('slideChangeTransitionEnd', function () {

		let titleNav = document.querySelector('.terras-calculate .main-back-title');
		let title = document.querySelector('.terras-calculate .terras-slider-up-one .swiper-slide-active h3').innerHTML;

		titleNav.innerHTML = title;

	});

	var terrasGalleryThumbs2 = new Swiper('.terras-gallery-thumbs-two', {
		spaceBetween: 30,
		slidesPerView: 4,
		loop: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		slidesOffsetBefore: 0,
		observer: true,
		observeParents: true,
		breakpoints: {
			499: {
				spaceBetween: 20,
				slidesPerView: 2.5,
				slidesOffsetBefore: -40,
			},
			767: {
				slidesPerView:3,
				slidesOffsetBefore: 0,
			},
			991: {
				spaceBetween: 30,
				slidesPerView: 3.5,
				slidesOffsetBefore: -60,
			},
			1199: {
				slidesPerView: 4
			}
		}
	});

	var terraseGalleryTop2 = new Swiper('.terras-slider-up-two', {
		spaceBetween: 10,
		loop:true,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		thumbs: {
			swiper: terrasGalleryThumbs2,
		},
	});


	var terrasGalleryThumbs3 = new Swiper('.terras-gallery-thumbs-three', {
		spaceBetween: 0,
		slidesPerView: 1,
		loop: false,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		slidesOffsetBefore: 0,
		observer: true,
		observeParents: true,
		breakpoints: {
			499: {
				slidesPerView: 2.5,
				slidesOffsetBefore: -40
			},
			767: {
				slidesPerView:3
			},
			1199: {
				slidesPerView: 3
			}
		}
	});

	var terraseGalleryTop3 = new Swiper('.terras-slider-up-three', {
		spaceBetween: 10,
		loop:false,
		observer: true,
		observeParents: true,
		// navigation: {
		// 	nextEl: '.calculate-gallery-top .swiper-button-next',
		// 	prevEl: '.calculate-gallery-top .swiper-button-prev',
		// },
		thumbs: {
			swiper: terrasGalleryThumbs3,
		},
	});

	var terrasGalleryThumbs4 = new Swiper('.terras-gallery-thumbs-four', {
		spaceBetween: 30,
		slidesPerView: 2,
		observer: true,
		observeParents: true,
		loop: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		slidesOffsetBefore: 0
	});

	var terraseGalleryTop4 = new Swiper('.terras-slider-up-four', {
		spaceBetween: 10,
		loop:true,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
		},
		thumbs: {
			swiper: terrasGalleryThumbs4,
		},
	});

	var terrasGalleryThumbs41 = new Swiper('.terras-gallery-thumbs-four2', {
		spaceBetween: 30,
		slidesPerView: 2,
		loop: true,
		observer: true,
		observeParents: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		slidesOffsetBefore: 0
	});

	var terraseGalleryTop41 = new Swiper('.terras-slider-up-four2', {
		spaceBetween: 10,
		loop:true,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
		},
		thumbs: {
			swiper: terrasGalleryThumbs41,
		},
	});

	var terrasGalleryThumbs6 = new Swiper('.terras-gallery-thumbs-six', {
		spaceBetween: 30,
		slidesPerView: 2,
		loop: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		slidesOffsetBefore: 0,
		observer: true,
		observeParents: true,
	});

	var terraseGalleryTop6 = new Swiper('.terras-slider-up-six', {
		spaceBetween: 10,
		observer: true,
		observeParents: true,
		loop:true,
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		thumbs: {
			swiper: terrasGalleryThumbs6,
		},
	});


	var terrasGalleryThumbs5 = new Swiper('.terras-gallery-thumbs-five', {
		spaceBetween: 30,
		slidesPerView: 4,
		slidesOffsetBefore: 0,
		observer: true,
		observeParents: true,
		loop: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,


		breakpoints: {
			400: {
				slidesPerView:2.5,
				slidesOffsetBefore: -40
			},
			767: {
				slidesPerView:3,
				slidesOffsetBefore: 0
			},
			1199: {
				slidesPerView: 3.5,
				slidesOffsetBefore: -80,
				spaceBetween: 100,
			}
		}
	});

	var terraseGalleryTop5 = new Swiper('.terras-slider-up-five', {
		spaceBetween: 10,
		loop:true,
		onlyExternal: true,
		allowTouchMove: false,
		noSwiping: true,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		thumbs: {
			swiper: terrasGalleryThumbs5,
		},
	});






	let tabsLinkTerras = document.querySelectorAll('.terras-calculate .calculate-tabs li');
	let buttonTerras = document.querySelector('.terras-calculate .calculate-up-button');
	let buttonTerrasFive = document.querySelectorAll('.terras-calculate .terras-top-five-width-button');
	let galleryTopTerras = document.querySelectorAll('.terras-calculate .calculate-gallery-top');
	let galleryBottomTerras= document.querySelectorAll('.terras-calculate .calculate-gallery-thumbs');
	let num1 = 1;

	/*Кнопки для последнего слайда*/
	let btnNo = document.querySelectorAll('.terras-btn-no');
	let btnYes = document.querySelectorAll('.terras-btn-yes');

	btnNo.forEach((item) => {
		item.onclick = function() {

			if((document.querySelector('.terras-slider-up-five .swiper-slide-active .btn-sum-five').value) == '') {
				let numFive = 0;
				let btnFive = document.querySelectorAll('.terras-slider-up-five .swiper-slide-active .terras-top-five-width .btn-five');

				btnFive.forEach((item) => {
					if(item.value == '') {
						numFive += 1;
						item.parentElement.style.border = '1px solid red';
					} else {
						item.parentElement.removeAttribute('style');
					}
				});

				galleryTopTerras.forEach((item) => {
					if(item.getAttribute('data-item') == 5) {
						item.classList.remove('hide');
						item.classList.add('show');
						document.querySelector('.terras-calculate h2').innerHTML = item.getAttribute('data-title');
					} else {
						item.classList.remove('show');
						item.classList.add('hide');
					}
				});

				galleryBottomTerras.forEach((item) => {
					if(item.getAttribute('data-item') == 5) {
						item.classList.remove('hide');
						item.classList.add('show');
					} else {
						item.classList.remove('show');
						item.classList.add('hide');
					}
				});

				tabsLinkTerras.forEach((item) => {
					if(item.getAttribute('data-item') == 5) {
						item.classList.add('calculate-tabs_active');
					} else {
						item.classList.remove('calculate-tabs_active');
					}
				});

				buttonTerras.setAttribute('data-num', 5);
				buttonTerras.removeAttribute('disabled');
				buttonTerras.removeAttribute('style');
				buttonTerras.classList.add('btn-hide');

				if(numFive) {
					num1 = 5;
					return;
				}


			} else {
				document.querySelector('.calculate').classList.add('hide');
				document.querySelector('.fence-form').classList.add('show');
				buttonTerras.setAttribute('data-num', 7);
				collectInfo2()
				formCalculate2();
			}



		};
	});

	let modelTerrasTitle, modelTerrasSize, modelTerrasColor, textureTerras,  howWood, formTerras, aTerras, bTerras, cTerras, dTerras, eTerras, sTerras, titleColTerras, stepColTerras,
	widthColTerras, colorColTerras, imgPath2;

	function collectInfo2() {
		modelTerrasTitle = document.querySelector('.terras-slider-up-one .swiper-slide-active h3').innerHTML;
		modelTerrasSize = document.querySelector('.terras-slider-up-one .swiper-slide-active .label').innerHTML;
		modelTerrasColor = document.querySelector('.terras-slider-up-two .swiper-slide-active h3').innerHTML;
		textureTerras = document.querySelector('.terras-slider-up-three .swiper-slide-active h3').innerHTML;
		howWood = document.querySelector('.terras-slider-up-four2 .swiper-slide-active h3').innerHTML;
		formTerras = document.querySelector('.terras-slider-up-five .swiper-slide-active h3').innerHTML;
		aTerras = document.querySelector('.terras-slider-up-five .swiper-slide-active .terras-a').value;
		bTerras = document.querySelector('.terras-slider-up-five .swiper-slide-active .terras-b').value;
		sTerras = document.querySelector('.terras-slider-up-five .swiper-slide-active .terras-s').value;
		imgPath2 = document.querySelector('.terras-slider-up-one .swiper-slide-active img').getAttribute('src');

		if(document.querySelector('.terras-slider-up-five .swiper-slide-active .terras-c')) {
			cTerras = document.querySelector('.terras-slider-up-five .swiper-slide-active .terras-b').value;
		}

		if(document.querySelector('.terras-slider-up-five .swiper-slide-active .terras-d')) {
			dTerras = document.querySelector('.terras-slider-up-five .swiper-slide-active .terras-d').value;
		}

		if(document.querySelector('.terras-slider-up-five .swiper-slide-active .terras-e')) {
			eTerras = document.querySelector('.terras-slider-up-five .swiper-slide-active .terras-e').value;
		}

		setFormTitles2();
	}

	function collectInfo3() {
		titleColTerras = document.querySelector('.terras-slider-up-six .swiper-slide-active .terras-top1-question_two h3').innerHTML;
		stepColTerras = document.querySelector('.terras-slider-up-six .swiper-slide-active .terras-top1-question_two .terras-steps .num').innerHTML;
		widthColTerras = document.querySelector('.terras-slider-up-six .swiper-slide-active .terras-top1-question_two .terras-width .num').innerHTML;
		colorColTerras = document.querySelector('.terras-slider-up-six .swiper-slide-active .terras-top1-question_two .terras-calc .label').innerHTML;
	}

	function setFormTitles2() {
		document.querySelector('.fence-form .fence-form__name h2').innerHTML = modelTerrasTitle;
		document.querySelector('.fence-form .fence-form__subname h3').innerHTML = modelTerrasTitle;
		document.querySelector('.fence-form .fence-form__subname p').innerHTML = modelTerrasColor+' / '+textureTerras;
		document.querySelector('.fence-form .fence-form__name p').innerHTML = modelTerrasColor+' / '+textureTerras;

		if(sTerras) {
			document.querySelector('.fence-form__square span').innerHTML = Number(sTerras);
		} else {
			if(cTerras) {
				fenceSquare = 4*(Number(aTerras)+Number(bTerras)+ Number(cTerras));
			} else if(dTerras) {
				fenceSquare = 4*(Number(aTerras)+Number(bTerras)+ Number(cTerras) + Number(dTerras));
			} else if(eTerras) {
				fenceSquare = 4*(Number(aTerras)+Number(bTerras)+ Number(cTerras) + Number(dTerras) + Number(eTerras));
			} else {
				fenceSquare = 4*(Number(aTerras)+Number(bTerras));
			}
			document.querySelector('.fence-form__square span').innerHTML = Number(fenceSquare);
		}

		sumFence = document.querySelector('.fence-form__sum-origin span').innerHTML;
		document.querySelector('.fence-form .fence-form__img img').setAttribute('src', imgPath2);
	}


	btnYes.forEach((item) => {
		item.onclick = function() {
			document.querySelectorAll('.terras-top1-question_one').forEach((item) => {
				item.style.display = 'none';
			});

			document.querySelectorAll('.terras-top1-question_two').forEach((item) => {
				item.style.display = 'block';
			});

			buttonTerras.removeAttribute('disabled');
			buttonTerras.removeAttribute('style');
			buttonTerras.setAttribute('data-num', 8);
			num1 = 7;
		}

	})

	/*Табы для террасы*/
	tabsLinkTerras.forEach((item) => {
		item.addEventListener('click', function(e) {
			e.preventDefault();

			backToTabTerras.call(this);
		});
	});


	buttonTerrasFive.forEach((item) => {
		item.onclick = function(e) {
			e.preventDefault();

			if((document.querySelector('.swiper-slide-active .terras-top-five-width .btn-sum-five').value) == '') {
				let numFive = 0;
				let btnFive = document.querySelectorAll('.swiper-slide-active .terras-top-five-width .btn-five');

				btnFive.forEach((item) => {
					if(item.value == '') {
						numFive += 1;
						item.parentElement.style.border = '1px solid red';
					} else {
						item.parentElement.removeAttribute('style');
					}
				});

				if(numFive) {
					return;
				}

			}


			buttonTerras.setAttribute('data-num', '6');
			buttonTerras.style.display = 'block';
			buttonTerras.setAttribute('disabled', 'disabled');
			buttonTerras.style.opacity = "0.2";

			galleryTopTerras.forEach((item) => {
				if(item.getAttribute('data-item') == 6) {
					item.classList.remove('hide');
					item.classList.add('show');
					document.querySelector('.terras-calculate h2').innerHTML = item.getAttribute('data-title');
				} else {
					item.classList.remove('show');
					item.classList.add('hide');
				}
			});

			galleryBottomTerras.forEach((item) => {
				if(item.getAttribute('data-item') == 6) {
					item.classList.remove('hide');
					item.classList.add('show');
				} else {
					item.classList.remove('show');
					item.classList.add('hide');
				}
			});

			tabsLinkTerras.forEach((item) => {
				if(item.getAttribute('data-item') == 6) {
					item.classList.add('calculate-tabs_active');
				} else {
					item.classList.remove('calculate-tabs_active');
				}
			});

		};

	});




	/*Табы для террасы*/
	function backToTabTerras() {
		let num = Number(this.getAttribute('data-item'));
		if(num != 1) {
			document.querySelector('.terras-calculate .calculate-up').classList.remove('up-title');
		} else {
			document.querySelector('.terras-calculate .calculate-up').classList.add('up-title');
		}


		tabsLinkTerras.forEach((item) => {
			if(item.getAttribute('data-item') == num) {
				item.classList.add('calculate-tabs_active');
			} else {
				item.classList.remove('calculate-tabs_active');
			}
		});

		galleryTopTerras.forEach((item) => {

			if(item.getAttribute('data-item') == num) {
				item.classList.remove('hide');
				item.classList.add('show');
				document.querySelector('.terras-calculate h2').innerHTML = item.getAttribute('data-title');
			}else {
				item.classList.remove('show');
				item.classList.add('hide');
			}

		});

		galleryBottomTerras.forEach((item) => {

			if(item.getAttribute('data-item') == num) {
				item.classList.remove('hide');
				item.classList.add('show');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		document.querySelector('.swiper-slide-active .terras-top1-question_one').removeAttribute('style');
		document.querySelector('.swiper-slide-active .terras-top1-question_two').removeAttribute('style');

		if(num == 5) {
			buttonTerras.classList.add('btn-hide');
		} else {
			buttonTerras.classList.remove('btn-hide');
		}

		if(num == 6) {
			buttonTerras.setAttribute('disabled', 'disabled');
			buttonTerras.style.opacity = "0.2";
		} else {
			buttonTerras.removeAttribute('disabled');
			buttonTerras.removeAttribute('style');
		}

		if(num == 1) {
			document.querySelector('.calculate__block').style.display = 'block';
		} else {
			document.querySelector('.calculate__block').style.display = 'none';
		}

		num1 = num;
		document.querySelector('.terras-calculate .calculate-up-button').setAttribute('data-num', num);
	}


	/*Кнопки 05. формы и замера террасы*/
	let fiveTerrasBtn = document.querySelectorAll('.terras-top-five-width .js-btn-five');
	let fiveTerrasBtn2 = document.querySelectorAll('.terras-top-five-width .js-btn-five2');
	let fiveTerrasBtn3 = document.querySelectorAll('.terras-top-five-width .js-btn-five3');
	let fiveTerrasBtn4 = document.querySelectorAll('.terras-top-five-width .js-btn-five4');

	fiveTerrasBtn.forEach((item) => {
		item.onfocus = function() {
			if(this.getAttribute('data-input')) {
				let fiveTerrasImg = this.parentElement.parentElement.parentElement.parentElement.querySelector('img');
				fiveTerrasImg.setAttribute('src', 'img/terras-five'+this.getAttribute('data-input')+'.png');
			}

			fiveTerrasBtn.forEach((item) => {
				if(item.parentElement.getAttribute('style')) {
					item.parentElement.removeAttribute('style');
				}
			});

			item.parentElement.style.backgroundColor = '#5b5b44';

		};
	});

	fiveTerrasBtn2.forEach((item) => {
		item.onfocus = function() {
			if(this.getAttribute('data-input')) {
				let fiveTerrasImg = this.parentElement.parentElement.parentElement.parentElement.querySelector('img');
				fiveTerrasImg.setAttribute('src', 'img/terras-five'+this.getAttribute('data-input')+'.png');
			}

			fiveTerrasBtn.forEach((item) => {
				if(item.parentElement.getAttribute('style')) {
					item.parentElement.removeAttribute('style');
				}
			});

			item.parentElement.style.backgroundColor = '#5b5b44';

		};
	});

	fiveTerrasBtn3.forEach((item) => {
		item.onfocus = function() {
			if(this.getAttribute('data-input')) {
				let fiveTerrasImg = this.parentElement.parentElement.parentElement.parentElement.querySelector('img');
				fiveTerrasImg.setAttribute('src', 'img/terras-five'+this.getAttribute('data-input')+'.png');
			}

			fiveTerrasBtn.forEach((item) => {
				if(item.parentElement.getAttribute('style')) {
					item.parentElement.removeAttribute('style');
				}
			});

			item.parentElement.style.backgroundColor = '#5b5b44';

		};
	});

	fiveTerrasBtn4.forEach((item) => {
		item.onfocus = function() {
			if(this.getAttribute('data-input')) {
				let fiveTerrasImg = this.parentElement.parentElement.parentElement.parentElement.querySelector('img');
				fiveTerrasImg.setAttribute('src', 'img/terras-five'+this.getAttribute('data-input')+'.png');
			}

			fiveTerrasBtn.forEach((item) => {
				if(item.parentElement.getAttribute('style')) {
					item.parentElement.removeAttribute('style');
				}
			});

			item.parentElement.style.backgroundColor = '#5b5b44';

		};
	});

	/*Отслеживаем input*/

	fiveTerrasBtn.forEach((item) => {

		item.onchange = function() {
			let fiveTerrasBtn = document.querySelectorAll('.swiper-slide-active .terras-top-five-width .js-btn-five');
			let sum = 0;
			let num = 0;

			fiveTerrasBtn.forEach((item) => {
				if(item.value == '') {
					num +=1;
				} else {
					sum += Number(item.value);
				}
			});

			if(num == 0) {
				document.querySelector('.swiper-slide-active .terras-top-five-width .js-btn-sum-five').value = sum*4;
			}

		}


	});

	fiveTerrasBtn2.forEach((item) => {

		item.onchange = function() {
			let fiveTerrasBtn2 = document.querySelectorAll('.swiper-slide-active .terras-top-five-width .js-btn-five2');
			let sum = 0;
			let num = 0;

			fiveTerrasBtn2.forEach((item) => {
				if(item.value == '') {
					num +=1;
				} else {
					sum += Number(item.value);
				}
			});

			if(num == 0) {
				document.querySelector('.swiper-slide-active .terras-top-five-width .js-btn-sum-five2').value = sum*4;
			}

		}


	});

	fiveTerrasBtn3.forEach((item) => {

		item.onchange = function() {
			let fiveTerrasBtn3 = document.querySelectorAll('.swiper-slide-active .terras-top-five-width .js-btn-five3');
			let sum = 0;
			let num = 0;

			fiveTerrasBtn3.forEach((item) => {
				if(item.value == '') {
					num +=1;
				} else {
					sum += Number(item.value);
				}
			});

			if(num == 0) {
				document.querySelector('.swiper-slide-active .terras-top-five-width .js-btn-sum-five3').value = sum*4;
			}

		}


	});

	fiveTerrasBtn4.forEach((item) => {

		item.onchange = function() {
			let fiveTerrasBtn4 = document.querySelectorAll('.swiper-slide-active .terras-top-five-width .js-btn-five4');
			let sum = 0;
			let num = 0;

			fiveTerrasBtn4.forEach((item) => {
				if(item.value == '') {
					num +=1;
				} else {
					sum += Number(item.value);
				}
			});

			if(num == 0) {
				document.querySelector('.swiper-slide-active .terras-top-five-width .js-btn-sum-five4').value = sum*4;
			}

		}


	});


	buttonTerras.onclick = function() {

		if(document.querySelector('.terras-calculate .calculate-up').classList.contains('up-title')) {
			document.querySelector('.terras-calculate .calculate-up').classList.remove('up-title');
		}

		if(this.getAttribute('data-num') == 7) {
			document.querySelector('.calculate').classList.add('hide');
			document.querySelector('.fence-form').classList.add('show');
		}

		if(this.getAttribute('data-num') == 8) {

			if((document.querySelector('.terras-slider-up-five .swiper-slide-active .btn-sum-five').value) == '') {
				let numFive = 0;
				let btnFive = document.querySelectorAll('.terras-slider-up-five .swiper-slide-active .terras-top-five-width .btn-five');

				btnFive.forEach((item) => {
					if(item.value == '') {
						numFive += 1;
						item.parentElement.style.border = '1px solid red';
					} else {
						item.parentElement.removeAttribute('style');
					}
				});

				galleryTopTerras.forEach((item) => {
					if(item.getAttribute('data-item') == 5) {
						item.classList.remove('hide');
						item.classList.add('show');
						document.querySelector('.terras-calculate h2').innerHTML = item.getAttribute('data-title');
					} else {
						item.classList.remove('show');
						item.classList.add('hide');
					}
				});

				galleryBottomTerras.forEach((item) => {
					if(item.getAttribute('data-item') == 5) {
						item.classList.remove('hide');
						item.classList.add('show');
					} else {
						item.classList.remove('show');
						item.classList.add('hide');
					}
				});

				tabsLinkTerras.forEach((item) => {
					if(item.getAttribute('data-item') == 5) {
						item.classList.add('calculate-tabs_active');
					} else {
						item.classList.remove('calculate-tabs_active');
					}
				});

				buttonTerras.setAttribute('data-num', 5);
				buttonTerras.removeAttribute('disabled');
				buttonTerras.removeAttribute('style');

				if(numFive) {
					num1 = 5;
					return;
				}


			} else {
				document.querySelector('.calculate').classList.add('hide');
				document.querySelector('.fence-form').classList.add('show');
				collectInfo2();
				collectInfo3();
				formCalculate2();
			}

		}



		if(num1 < 7) {
			num1 += 1;
			document.querySelector('.calculate__block').style.display = 'none';

			buttonTerras.setAttribute('data-num', num1);
		}

		if(this.getAttribute('data-num') == 5) {
			buttonTerras.classList.add('btn-hide');
		} else {
			buttonTerras.classList.remove('btn-hide');
		}

		if(this.getAttribute('data-num') == 6) {
			if((document.querySelector('.swiper-slide-active .terras-top-five-width .btn-sum-five').value) == '') {
				let numFive = 0;
				let btnFive = document.querySelectorAll('.swiper-slide-active .terras-top-five-width .btn-five');

				btnFive.forEach((item) => {
					if(item.value == '') {
						numFive += 1;
						item.parentElement.style.border = '1px solid red';
					} else {
						item.parentElement.removeAttribute('style');
					}
				});

				if(numFive) {
					num1 = 5;
					return;
				}

			}
		}

		galleryTopTerras.forEach((item) => {
			if(item.getAttribute('data-item') == num1) {
				item.classList.remove('hide');
				item.classList.add('show');
				document.querySelector('.terras-calculate h2').innerHTML = item.getAttribute('data-title');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		galleryBottomTerras.forEach((item) => {
			if(item.getAttribute('data-item') == num1) {
				item.classList.remove('hide');
				item.classList.add('show');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		tabsLinkTerras.forEach((item) => {
			if(item.getAttribute('data-item') == num1) {
				item.classList.add('calculate-tabs_active');
			} else {
				item.classList.remove('calculate-tabs_active');
			}
		});

		if(num1 == 6) {
			buttonTerras.setAttribute('disabled', 'disabled');
			buttonTerras.style.opacity = "0.2";
		}



	}


	var fenceGalleryThumbs1 = new Swiper('.fence-gallery_thumbs-one', {
		spaceBetween: 10,
		slidesPerView: 2,
		loop: true,
		observer: true,
		observeParents: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		hashNavigation: {
			watchState: true,
		},
		scrollbar: {
			el: '.swiper-scrollbar',
		}
	});

	var fenceGalleryTop = new Swiper('.fence-slider_up-one', {
		spaceBetween: 10,
		loop:true,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		thumbs: {
			swiper: fenceGalleryThumbs1,
		},
	});

	fenceGalleryThumbs1.on('slideChangeTransitionEnd', function () {

		let titleNav = document.querySelector('.fence-calculate .main-back-title2');
		let title = document.querySelector('.fence-calculate .fence-slider_up-one .swiper-slide-active h3').innerHTML;

		titleNav.innerHTML = title;

	});

	fenceGalleryTop.on('slideChangeTransitionEnd', function () {

		let titleNav = document.querySelector('.fence-calculate .main-back-title2');
		let title = document.querySelector('.fence-calculate .fence-slider_up-one .swiper-slide-active h3').innerHTML;

		titleNav.innerHTML = title;

	});


	var fenceGalleryThumbs2 = new Swiper('.fence-gallery_thumbs-two', {
		spaceBetween: 30,
		slidesPerView: 4,
		loop: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		slidesOffsetBefore: 0,
		observer: true,
		observeParents: true,

		scrollbar: {
			el: '.swiper-scrollbar',
		},
		breakpoints: {
			499: {
				spaceBetween: 20,
				slidesPerView: 2.5,
				slidesOffsetBefore: -40,
			},
			767: {
				slidesPerView:3,
				slidesOffsetBefore: 0,
			},
			991: {
				spaceBetween: 0,
				slidesPerView: 3.5,
				slidesOffsetBefore: -70,
			},
			1199: {
				slidesPerView: 4,
				slidesOffsetBefore: -70,
			}
		}
	});

	var fenceGalleryTop2 = new Swiper('.fence-slider_up-two', {
		spaceBetween: 10,
		loop:true,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		thumbs: {
			swiper: fenceGalleryThumbs2,
		},
	});

	var fenceGalleryThumbs3 = new Swiper('.fence-gallery_thumbs-three', {
		spaceBetween: 10,
		slidesPerView: 2,
		loop: true,
		centeredSlides: false,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		observer: true,
		observeParents: true,
		hashNavigation: {
			watchState: true,
		},
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		scrollbar: {
			el: '.swiper-scrollbar',
		}
	});

	var fenceGalleryTop3 = new Swiper('.fence-slider_up-three', {
		spaceBetween: 10,
		loop:true,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		thumbs: {
			swiper: fenceGalleryThumbs3,
		},
	});





	// new Swiper('.fence-slider_up-four', {
	// 	spaceBetween: 10,
	// 	loop:true,
	// 	observer: true,
	// 	observeParents: true,
	// 	navigation: {
	// 		nextEl: '.calculate-gallery-top .swiper-button-next',
	// 		prevEl: '.calculate-gallery-top .swiper-button-prev',
	// 	}
	// });


	var fenceGalleryThumbs5 = new Swiper('.fence-gallery_thumbs-five', {
		spaceBetween: 10,
		slidesPerView: 2,
		loop: true,
		centeredSlides: false,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		observer: true,
		observeParents: true,
		hashNavigation: {
			watchState: true,
		},
		scrollbar: {
			el: '.swiper-scrollbar',
		}
	});

	var fenceGalleryTop5 = new Swiper('.fence-slider_up-five', {
		spaceBetween: 10,
		loop:true,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.calculate-gallery-top .swiper-button-next',
			prevEl: '.calculate-gallery-top .swiper-button-prev',
		},
		thumbs: {
			swiper: fenceGalleryThumbs5,
		},
	});


	/*FENCE CALCULATE*/
	let tabsLink = document.querySelectorAll('.fence-calculate .calculate-tabs li');
	let buttonFence2 = document.querySelector('.fence-calculate .fence-top-four-button');
	let buttonFence = document.querySelector('.fence-calculate .calculate-up-button');
	let galleryTop = document.querySelectorAll('.fence-calculate .calculate-gallery-top');
	let galleryBottom = document.querySelectorAll('.fence-calculate .calculate-gallery-thumbs');
	let num = 1;
	let minus = document.querySelectorAll('.fence-five-door_calc .minus');
	let plus = document.querySelectorAll('.fence-five-door_calc .plus');


	minus.forEach((item) => {
		item.addEventListener('click', minusNum);
	});

	plus.forEach((item) => {
		item.addEventListener('click', plusNum);
	});


	function minusNum() {
		let answer = this.parentElement.querySelector('.answer');
		let newAnswer = answer.innerHTML.split(',').join('.');

		if (Number(newAnswer) >= 0.1) {
			answer.innerHTML = (Number(newAnswer)-0.1).toFixed(1).split('.').join(',');
		}
	}

	function plusNum() {
		let answer = this.parentElement.querySelector('.answer');
		let newAnswer = answer.innerHTML.split(',').join('.');
		answer.innerHTML = (Number(newAnswer)+0.1).toFixed(1).split('.').join(',');

	}

	tabsLink.forEach((item) => {
		item.addEventListener('click', function(e) {
			e.preventDefault();
			backToTabFence.call(this);
		});
	});

	/*Табы для fence*/
	function backToTabFence() {
		let num2 = Number(this.getAttribute('data-item'));
		if(num2 != 1) {
			document.querySelector('.fence-calculate .calculate-up').classList.remove('up-title');
		} else {
			document.querySelector('.fence-calculate .calculate-up').classList.add('up-title');
		}

		if(num2 == 5) {
			if(document.querySelector('.fence-calculate .fence-top-four-gate_active').innerHTML == 'Нет') {
				document.querySelector('.calculate').classList.add('hide');
				document.querySelector('.fence-form').classList.add('show');


				buttonFence.setAttribute('data-num', 4);
				collectInfo();
				formCalculate();
				return;
			}
		}


		tabsLink.forEach((item) => {
			if(item.getAttribute('data-item') == num2) {
				item.classList.add('calculate-tabs_active');
			} else {
				item.classList.remove('calculate-tabs_active');
			}
		});

		galleryTop.forEach((item) => {
			if(item.getAttribute('data-item') == num2) {
				item.classList.remove('hide');
				item.classList.add('show');
				document.querySelector('.fence-calculate h2').innerHTML = item.getAttribute('data-title');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		galleryBottom.forEach((item) => {
			if(item.getAttribute('data-item') == num2) {
				item.classList.remove('hide');
				item.classList.add('show');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		if(num2 == 4) {
			buttonFence.classList.add('btn-hide');
		} else {
			buttonFence.classList.remove('btn-hide');
		}

		if(num2 == 1) {
			document.querySelector('.calculate__block').style.display = 'block';
		} else {
			document.querySelector('.calculate__block').style.display = 'none';
		}

		num = num2;
		document.querySelector('.fence-calculate .calculate-up-button').setAttribute('data-num', num2);

	}


	/*Кнопка далее Fence*/
	buttonFence.onclick = function() {
		if(document.querySelector('.fence-calculate .calculate-up').classList.contains('up-title')) {
			document.querySelector('.fence-calculate .calculate-up').classList.remove('up-title');
		}

		if(num == 4) {
			let numFive = 0;
			let btnFive = document.querySelectorAll('.fence-top-four-width .fence-input');

			btnFive.forEach((item) => {
				if(item.value == '') {
					numFive += 1;
					item.parentElement.style.border = '1px solid red';
				} else {
					item.parentElement.removeAttribute('style');
				}
			});

			if(numFive) {
				return;
			}


			if(document.querySelector('.fence-calculate .fence-top-four-gate_active').innerHTML == 'Нет') {
				document.querySelector('.calculate').classList.add('hide');
				document.querySelector('.fence-form').classList.add('show');


				buttonFence.setAttribute('data-num', 4);
				collectInfo();
				formCalculate();
				return;
			}
		}

		if(num == 5) {

			let numFive = 0;
			let btnFive = document.querySelectorAll('.fence-top-four-width .fence-input');

			btnFive.forEach((item) => {
				if(item.value == '') {
					numFive += 1;
					item.parentElement.style.border = '1px solid red';
				} else {
					item.parentElement.removeAttribute('style');
				}
			});

			if(numFive) {

				galleryTop.forEach((item) => {
					if(item.getAttribute('data-item') == 4) {
						item.classList.remove('hide');
						item.classList.add('show');
						document.querySelector('.fence-calculate_top h2').innerHTML = item.getAttribute('data-title');
					} else {
						item.classList.remove('show');
						item.classList.add('hide');
					}
				});

				galleryBottom.forEach((item) => {
					if(item.getAttribute('data-item') == 4) {
						item.classList.remove('hide');
						item.classList.add('show');
					} else {
						item.classList.remove('show');
						item.classList.add('hide');
					}
				});

				tabsLink.forEach((item) => {
					if(item.getAttribute('data-item') == 4) {
						item.classList.add('calculate-tabs_active');
					} else {
						item.classList.remove('calculate-tabs_active');
					}
				});

				buttonFence.setAttribute('data-num', 4);
				buttonFence.classList.add('btn-hide');
				num = 4;

				return;
			} else {
				document.querySelector('.calculate').classList.add('hide');
				document.querySelector('.fence-form').classList.add('show');


				buttonFence.setAttribute('data-num', 6);
				collectInfo();
				formCalculate();
			}


		} else {
			num += 1;
			document.querySelector('.calculate__block').style.display = 'none';

			buttonFence.setAttribute('data-num', num);
		}

		if(num == 4) {
			buttonFence.classList.add('btn-hide');
		} else {
			buttonFence.classList.remove('btn-hide');
		}


		galleryTop.forEach((item) => {
			if(item.getAttribute('data-item') == num) {
				item.classList.remove('hide');
				item.classList.add('show');
				document.querySelector('.fence-calculate_top h2').innerHTML = item.getAttribute('data-title');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		galleryBottom.forEach((item) => {
			if(item.getAttribute('data-item') == num) {
				item.classList.remove('hide');
				item.classList.add('show');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		tabsLink.forEach((item) => {
			if(item.getAttribute('data-item') == num) {
				item.classList.add('calculate-tabs_active');
			} else {
				item.classList.remove('calculate-tabs_active');
			}
		});

	}


	buttonFence2.onclick = function() {

		let numFive = 0;
		let btnFive = document.querySelectorAll('.fence-top-four-width .fence-input');

		btnFive.forEach((item) => {
			if(item.value == '') {
				numFive += 1;
				item.parentElement.style.border = '1px solid red';
			} else {
				item.parentElement.removeAttribute('style');
			}
		});

		if(numFive) {
			return;
		}

		if(document.querySelector('.fence-calculate .fence-top-four-gate_active').innerHTML == 'Нет') {
			document.querySelector('.calculate').classList.add('hide');
			document.querySelector('.fence-form').classList.add('show');


			buttonFence.setAttribute('data-num', 4);
			collectInfo();
			formCalculate();
			return;
		}

		buttonFence.setAttribute('data-num', '5');
		buttonFence.classList.remove('btn-hide');


		galleryTop.forEach((item) => {
			if(item.getAttribute('data-item') == 5) {
				item.classList.remove('hide');
				item.classList.add('show');
				document.querySelector('.fence-calculate_top h2').innerHTML = item.getAttribute('data-title');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		galleryBottom.forEach((item) => {
			if(item.getAttribute('data-item') == 5) {
				item.classList.remove('hide');
				item.classList.add('show');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		tabsLink.forEach((item) => {
			if(item.getAttribute('data-item') == 5) {
				item.classList.add('calculate-tabs_active');
			} else {
				item.classList.remove('calculate-tabs_active');
			}
		});

	}

	/*Данные на отправку Fence*/
	let titleCalculate, title1Calculate, size1Calculate, title2Calculate, title3Calculate, aCalculate, bCalculate, needDoor, needDoor2, size2Calculate, imgPath;

	function collectInfo() {
		titleCalculate = document.querySelector('.fence-slider_up-one .swiper-slide-active .js-title1').innerHTML;
		title1Calculate = document.querySelector('.fence-slider_up-two .swiper-slide-active .calculate-subtitle').innerHTML;
		title2Calculate = document.querySelector('.fence-slider_up-three .swiper-slide-active h3').innerHTML;
		size1Calculate = document.querySelector('.fence-slider_up-one .swiper-slide-active .label').innerHTML;
		aCalculate = document.querySelector('.fence-slider_up-four .fence-a').value;
		bCalculate = document.querySelector('.fence-slider_up-four .fence-b').value;
		needDoor = document.querySelector('.fence-slider_up-four .fence-top-four-gate_active').innerHTML;
		needDoor2 = document.querySelector('.fence-slider_up-four .fence-top-wicket_active').innerHTML;
		if(document.querySelector('.fence-calculate .fence-top-four-gate_active').innerHTML == 'Да') {
			title3Calculate = document.querySelector('.fence-slider_up-five .swiper-slide-active .calculate-subtitle').innerHTML;
			size2Calculate = document.querySelector('.fence-slider_up-five .swiper-slide-active .answer').innerHTML;
		}
		imgPath = document.querySelector('.fence-slider_up-one .swiper-slide-active .fence-top1-column img').getAttribute('src');

		setFormTitles();
	}

	function setFormTitles() {
		document.querySelector('.fence-form .fence-form__name h2').innerHTML = titleCalculate;
		document.querySelector('.fence-form .fence-form__subname h3').innerHTML = titleCalculate;
		document.querySelector('.fence-form .fence-form__subname p').innerHTML = title1Calculate+' / '+title2Calculate;
		document.querySelector('.fence-form .fence-form__name p').innerHTML = title1Calculate+' / '+title2Calculate;

		fenceSquare = Number(aCalculate) * Number(bCalculate);
		document.querySelector('.fence-form__square span').innerHTML = Number(fenceSquare);

		sumFence = document.querySelector('.fence-form__sum-origin span').innerHTML;
		document.querySelector('.fence-form .fence-form__img img').setAttribute('src', imgPath);
	}



	/*Добавление файлов*/
	let filesBlock = document.querySelector('.fence-form__files-block');
	let files = document.querySelector('.fence-form__files');
	let filesListFence = '';


	files.onchange = changeFileForm;

	function changeFileForm() {

		filesBlock.querySelector('label').style.display = 'none';

		setFiles();
	}

	function setFiles() {
		filesBlock.innerHTML = "";

		let files1 = files.files;
		let num = 0;
		let span = document.createElement('span');


		for(item of files1) {
			filesListFence +=' '+item.name;

			if(num == 2) {
				num = 2;
				break;
			}

			let span = document.createElement('span');
			let btn = document.createElement('span');

			btn.classList.add('fence-form-btn');
			span.setAttribute('data-file', num);
			span.innerHTML = item.name.slice(0, 7)+'...';
			span.classList.add('fence-form-span_name', 'fence-form-span');
			btn.onclick = function() {
				deleteFiles.call(span);
			};
			span.appendChild(btn);
			filesBlock.appendChild(span);

			num+=1;

		}

		if((files1.length - num) != 0 && num == 2) {
			span.innerHTML = "+ "+(Number(files1.length)-num);
			span.classList.add('fence-form-span', 'fence-form-span_last');
			filesBlock.appendChild(span);
		}

	}

	function createFiles() {
		filesBlock.innerHTML = "";
		let inp = document.createElement('input');
		let label = document.createElement('label');
		inp.setAttribute('type', 'file');
		inp.setAttribute('placeholder', 'Прикрепить свои файлы');
		inp.setAttribute('multiple', 'multiple');
		inp.setAttribute('accept', 'image/*,image/jpeg');
		inp.setAttribute('id', 'files');
		inp.setAttribute('class', 'fence-form__files');
		filesBlock.appendChild(inp);
		label.setAttribute('for', 'files');
		label.innerHTML = 'Прикрепить свои файлы';
		filesBlock.appendChild(label);
		filesBlock.querySelector('.fence-form__files').onchange = changeFileForm;
	}


	//Удаление файлов
	function deleteFiles() {
		console.log("Пока не реализована, нужен бэкенд");
	}

	/*Шаг назад*/
	let backBtn = document.querySelector('.fence-form__back');


	/*Начать заново*/
	let againBtn = document.querySelector('.fence-form__again');


	/*Включить первый слайдер*/
	function againSlider() {
		num = 1;
		document.querySelector('.fence-calculate .calculate-up-button').setAttribute('data-num', 1);
		document.querySelector('.calculate__block').style.display = 'block';
		document.querySelector('.fence-calculate .calculate-up-button').removeAttribute('style');
		document.querySelector('.fence-calculate .calculate-up-button').removeAttribute('disabled');
		document.querySelector('.fence-form').classList.remove('show');
		document.querySelector('.calculate').classList.remove('hide');
		document.querySelector('.fence-form__send button').removeAttribute('style');
		document.querySelector('.fence-form__send button').removeAttribute('disabled');
		document.querySelector('.fence-form__send button').innerHTML = "Отправить расчет на почту";
		createFiles();

		galleryTop.forEach((item) => {
			if(item.getAttribute('data-item') == 1) {
				item.classList.remove('hide');
				item.classList.add('show');
				document.querySelector('.fence-calculate_top h2').innerHTML = item.getAttribute('data-title');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		galleryBottom.forEach((item) => {
			if(item.getAttribute('data-item') == 1) {
				item.classList.remove('hide');
				item.classList.add('show');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		tabsLink.forEach((item) => {
			if(item.getAttribute('data-item') == 1) {
				item.classList.add('calculate-tabs_active');
			} else {
				item.classList.remove('calculate-tabs_active');
			}
		});

	}

	function againSlider2() {
		num1 = 1;
		document.querySelector('.terras-calculate .calculate-up-button').setAttribute('data-num', 1);
		document.querySelector('.terras-calculate .calculate-up-button').removeAttribute('style');
		document.querySelector('.terras-calculate .calculate-up-button').removeAttribute('disabled');
		document.querySelector('.fence-form__send button').removeAttribute('style');
		document.querySelector('.fence-form__send button').removeAttribute('disabled');
		document.querySelector('.fence-form__send button').innerHTML = "Отправить расчет на почту";
		document.querySelectorAll('.terras-top1-question_one').forEach((item) => {
			item.removeAttribute('style');
		});
		document.querySelectorAll('.terras-top1-question_two').forEach((item) => {
			item.removeAttribute('style');
		});
		createFiles();

		document.querySelector('.calculate__block').style.display = 'block';
		document.querySelector('.fence-form').classList.remove('show');
		document.querySelector('.calculate').classList.remove('hide');

		galleryTopTerras.forEach((item) => {
			if(item.getAttribute('data-item') == 1) {
				item.classList.remove('hide');
				item.classList.add('show');
				document.querySelector('.fence-calculate_top h2').innerHTML = item.getAttribute('data-title');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		galleryBottomTerras.forEach((item) => {
			if(item.getAttribute('data-item') == 1) {
				item.classList.remove('hide');
				item.classList.add('show');
			} else {
				item.classList.remove('show');
				item.classList.add('hide');
			}
		});

		tabsLinkTerras.forEach((item) => {
			if(item.getAttribute('data-item') == 1) {
				item.classList.add('calculate-tabs_active');
			} else {
				item.classList.remove('calculate-tabs_active');
			}
		});

		document.querySelector('.terras-calculate .calculate-up').classList.add('up-title');

	}


	let sumFence;
	let fenceSquare = 0;

	/*Изменение формы Fence*/
	function formCalculate() {

		againBtn.onclick = function(e) {
			if(!document.querySelector('.fence-calculate .calculate-up').classList.contains('up-title')) {
				document.querySelector('.fence-calculate .calculate-up').classList.add('up-title');
			}

			e.preventDefault();
			againSlider();
		}

		backBtn.onclick = function(e) {
			e.preventDefault();
			document.querySelector('.fence-form').classList.remove('show');
			document.querySelector('.calculate').classList.remove('hide');
		}


		takeIfnoFence(1);
	}


	/*Изменение формы Terras*/
	function formCalculate2() {

		againBtn.onclick = function(e) {
			if(!document.querySelector('.fence-calculate .calculate-up').classList.contains('up-title')) {
				document.querySelector('.fence-calculate .calculate-up').classList.add('up-title');
			}

			e.preventDefault();
			againSlider2();
		}

		backBtn.onclick = function(e) {
			e.preventDefault();
			document.querySelector('.fence-form').classList.remove('show');
			document.querySelector('.calculate').classList.remove('hide');
			document.querySelector('.fence-calculate .calculate-up-button').removeAttribute('style');
			document.querySelector('.fence-calculate .calculate-up-button').removeAttribute('disabled');
			document.querySelector('.fence-calculate .calculate-up-button').setAttribute('data-num', 6);
			num1 = 7;

			galleryTopTerras.forEach((item) => {
				if(item.getAttribute('data-item') == 6) {
					item.classList.remove('hide');
					item.classList.add('show');
					document.querySelector('.fence-calculate_top h2').innerHTML = item.getAttribute('data-title');
				} else {
					item.classList.remove('show');
					item.classList.add('hide');
				}
			});

			galleryBottomTerras.forEach((item) => {
				if(item.getAttribute('data-item') == 6) {
					item.classList.remove('hide');
					item.classList.add('show');
				} else {
					item.classList.remove('show');
					item.classList.add('hide');
				}
			});

			tabsLinkTerras.forEach((item) => {
				if(item.getAttribute('data-item') == 6) {
					item.classList.add('calculate-tabs_active');
				} else {
					item.classList.remove('calculate-tabs_active');
				}
			});

		}

		takeIfnoFence(2);
	}

	let fenceName, fencePhone, fenceEmail, fenceMessage, fenceOptions='';

	/*Отправка формы*/
	function takeIfnoFence(myNum) {
		document.querySelector('.fence-form__form').onsubmit = function(e) {
			e.preventDefault();


			fenceName = document.querySelector('.fence-form-input_box .js-name').value;
			fencePhone = document.querySelector('.fence-form-input_box .js-phone').value;
			fenceEmail = document.querySelector('.fence-form-input_box .js-email').value;
			fenceMessage = document.querySelector('.fence-form__textarea').value;

			let inputs = document.querySelectorAll('.fence-form__checkbox input');

			inputs.forEach((item) => {
				if(item.checked) {
					fenceOptions += ' '+item.parentElement.querySelector('label').innerHTML;
				}
			});


			if(myNum == 1) {
				sendMail();
			} else {
				sendMailTerras();
			}

		}
	}

	function sendMail() {
		let formData = new FormData();

		formData.append('title', 'fence');
		formData.append('name', fenceName);
		formData.append('phone', fencePhone);
		formData.append('email', fenceEmail);
		formData.append('square', fenceSquare);
		formData.append('price', sumFence);
		formData.append('length', aCalculate);
		formData.append('width', bCalculate);
		formData.append('door', needDoor);
		formData.append('door2', needDoor2);
		formData.append('model', titleCalculate);
		formData.append('size', size1Calculate);
		formData.append('color', title1Calculate);
		formData.append('texture', title2Calculate);

		if(title3Calculate) {
			formData.append('doorName', title3Calculate);
			formData.append('doorSize', size2Calculate);
		}


		if(filesListFence != '') {
			formData.append('files', filesListFence);
		}

		if(fenceOptions != '') {
			formData.append('options', fenceOptions);
		}

		if(fenceMessage != '') {
			formData.append('message', fenceMessage);
		}
		var xhr = new XMLHttpRequest();

	// 2. Конфигурируем его: GET-запрос на URL 'phones.json'
	xhr.open('POST', 'message.php');

	// 3. Отсылаем запрос
	xhr.send(formData);

	document.querySelector('.fence-form-input_box .js-name').value = '';
	document.querySelector('.fence-form-input_box .js-phone').value = '';
	document.querySelector('.fence-form-input_box .js-email').value = '';
	document.querySelector('.fence-form__textarea').value = '';

	createFiles();

	document.querySelector('.fence-form__send button').innerHTML = 'Отправлено!';
	document.querySelector('.fence-form__send button').style.color = '#ffffff';
	document.querySelector('.fence-form__send button').style.backgroundColor = 'transparent';
	document.querySelector('.fence-form__send button').style.border = '1px solid #93856f';
	document.querySelector('.fence-form__send button').setAttribute('disabled', 'disabled');

		filesListFence = '';
		fenceOptions = '';

}

function sendMailTerras() {
	let formData = new FormData();

	formData.append('title', 'terras');
	formData.append('name', fenceName);
	formData.append('phone', fencePhone);
	formData.append('email', fenceEmail);
	formData.append('price', sumFence);
	formData.append('model', modelTerrasTitle);
	formData.append('size', modelTerrasSize);
	formData.append('color', modelTerrasColor);
	formData.append('texture', textureTerras);
	formData.append('how', howWood);
	formData.append('forma', formTerras);
	formData.append('aside', aTerras);
	formData.append('bside', bTerras);

	if(filesListFence != '') {
		formData.append('files', filesListFence);
	}

	if(fenceMessage != '') {
		formData.append('message', fenceMessage);
	}

	if(sTerras) {
		formData.append('square', sTerras);
	}

	if(cTerras) {
		formData.append('cside', cTerras);
	}

	if(dTerras) {
		formData.append('dside', dTerras);
	}

	if(eTerras) {
		formData.append('eside', eTerras);
	}

	if(titleColTerras) {
		formData.append('stepmodel', titleColTerras);
		formData.append('stepscol', stepColTerras);
		formData.append('lengthstep', widthColTerras);
		formData.append('colorstep', colorColTerras);
	}

	if(fenceOptions != '') {
		formData.append('options', fenceOptions);
	}



	var xhr = new XMLHttpRequest();

	// 2. Конфигурируем его: GET-запрос на URL 'phones.json'
	xhr.open('POST', 'message.php');

	// 3. Отсылаем запрос
	xhr.send(formData);

	document.querySelector('.fence-form-input_box .js-name').value = '';
	document.querySelector('.fence-form-input_box .js-phone').value = '';
	document.querySelector('.fence-form-input_box .js-email').value = '';
	document.querySelector('.fence-form__textarea').value = '';

	createFiles();


	document.querySelector('.fence-form__send button').innerHTML = 'Отправлено!';
	document.querySelector('.fence-form__send button').style.color = '#ffffff';
	document.querySelector('.fence-form__send button').style.backgroundColor = 'transparent';
	document.querySelector('.fence-form__send button').style.border = '1px solid #93856f';
	document.querySelector('.fence-form__send button').setAttribute('disabled', 'disabled');

}





/*Кнопки 4 таба калькулятор Fence*/
let btnGate = document.querySelectorAll('.js-gate span');
let btnWicket = document.querySelectorAll('.js-wicket span');

btnGate.forEach((item) => {
	item.onclick = function() {
		gateActive.call(item);
	}
});

function gateActive () {
	btnGate.forEach((item) => {
		item.classList.remove('fence-top-four-gate_active');
	});

	this.classList.add('fence-top-four-gate_active');
}


btnWicket.forEach((item) => {
	item.onclick = function() {
		wicketActive.call(item);
	}
});

function wicketActive () {
	btnWicket.forEach((item) => {
		item.classList.remove('fence-top-wicket_active');
	});

	this.classList.add('fence-top-wicket_active');
}

// let btnForTitle = document.querySelector('.fence-slider_up-one .swiper-button-next');
// let btnForTitle2 = document.querySelector('.fence-slider_up-one .swiper-button-prev');
// let btnForTitleTerras = document.querySelector('.terras-slider-up-one .swiper-button-next');
// let btnForTitle2Terras = document.querySelector('.terras-slider-up-one .swiper-button-prev');

// btnForTitleTerras.onclick = function() {
// 	let titleNav = document.querySelector('.terras-calculate .main-back-title');
// 	let title = document.querySelector('.terras-calculate .terras-slider-up-one .swiper-slide-active h3').innerHTML;

// 	titleNav.innerHTML = title;
// }

// btnForTitle2Terras.onclick = function() {
// 	let titleNav = document.querySelector('.terras-calculate .main-back-title');
// 	let title = document.querySelector('.terras-calculate .terras-slider-up-one .swiper-slide-active h3').innerHTML;

// 	titleNav.innerHTML = title;
// }


// btnForTitle.onclick = function() {
// 	let titleNav = document.querySelector('.fence-calculate .main-back-title2');
// 	let title = document.querySelector('.fence-calculate .fence-slider_up-one .swiper-slide-active h3').innerHTML;

// 	titleNav.innerHTML = title;
// }

// btnForTitle2.onclick = function() {
// 	let titleNav = document.querySelector('.fence-calculate .main-back-title2');
// 	let title = document.querySelector('.fence-calculate .fence-slider_up-one .swiper-slide-active h3').innerHTML;

// 	titleNav.innerHTML = title;
// }
