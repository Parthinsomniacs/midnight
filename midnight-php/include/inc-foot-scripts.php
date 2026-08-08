<!--Common JS-->
<?php require_once $alljs; ?>
<script src="<?php echo $jsurl; ?>lenis.min.js"></script>
<script src="<?php echo $jsurl; ?>ScrollTrigger.min.js"></script>
<script src="<?php echo $jsurl; ?>gsap-split-text.js"></script>
<script src="<?php echo $jsurl; ?>gsap.min.js"></script>
<script src="<?php echo $jsurl; ?>ScrambleTextPlugin.min.js"></script>
<!--Common JS-->
<script>
	/**Menu Toggle**/
	<?php if ($pagetype == "onepage") { ?>

		function menuresponsive() {
			var element = document.getElementById("home");
			element.classList.toggle("insomenu-active");
		}

		function menuresponsiveclose() {
			var element = document.getElementById("home");
			element.classList.remove("insomenu-active");
		}
	<?php } else { ?>
		let body = document.querySelector('body')
		let toggle = document.querySelector('#menu-trigger')
		toggle.addEventListener('click', () => {
			body.classList.toggle('insomenu-active')
		})
	<?php } ?>
	/**End Menu Toggle**/


	<?php if ($page != "thankyou") { ?>
		/* Back To Top Js Start */
		var scrollToTopBtn = document.querySelector(".scroll-to-top")
		var rootElement = document.documentElement

		function handleScroll() {
			var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
			if ((rootElement.scrollTop / scrollTotal) > 0.01) {
				scrollToTopBtn.classList.add("showBtn")

			} else {
				scrollToTopBtn.classList.remove("showBtn")
			}
		}

		function scrollToTop() {
			rootElement.scrollTo({
				top: 0,
				behavior: "smooth"
			})
		}
		scrollToTopBtn.addEventListener("click", scrollToTop);
		document.addEventListener("scroll", handleScroll);
		/* Back To Top Js End */
	<?php } ?>

	/***Form Toggle***/
	let myForm = document.getElementById('inquiry');
	let errors = document.querySelectorAll(".error-msg1");

	function opencForm() {
		var myButtonClasses = document.getElementById("sticky-bottom-form").classList;
		if (myButtonClasses.contains("open")) {
			myButtonClasses.remove("open");
		} else {
			myButtonClasses.add("open");
		}
	}

	function closecForm() {
		var myButtonClasses = document.getElementById("sticky-bottom-form").classList;
		if (myButtonClasses.contains("open")) {
			myButtonClasses.remove("open");
		} else {
			myButtonClasses.add("open");
		}
	}

	function openForm(formtyp) {
		const body = document.querySelector('html');
		body.classList.add('is-active');
		var myButtonClasses = document.getElementById("register-modal").classList;
		var formtype = document.getElementById("formtype");
		if (myButtonClasses.contains("is-active")) {
			myButtonClasses.remove("is-active");
			formtype.value = '';
			if (formtype.value == "brochure") {
				document.getElementById("leadmodaltitle").innerHTML = "Download Brochure";
			} else {
				document.getElementById("leadmodaltitle").innerHTML = "Enquire Now";
			}
		} else {
			myButtonClasses.add("is-active");
			formtype.value = formtyp;
			if (formtype.value == "brochure") {
				document.getElementById("leadmodaltitle").innerHTML = "Download Brochure";
			} else {
				document.getElementById("leadmodaltitle").innerHTML = "Enquire Now";
			}
		}
	}

	function closeForm() {
		const body = document.querySelector('html');
		body.classList.remove('is-active');
		var myButtonClasses = document.getElementById("register-modal").classList;
		if (myButtonClasses.contains("is-active")) {
			myButtonClasses.remove("is-active");
		} else {
			myButtonClasses.add("is-active");
		}

		document.getElementById('inquiry-submit').disabled = false;

		myForm.reset();

		errors.forEach(e => {
			e.textContent = '';
		})
	}
	/***End Form Toggle***/

	/**Modal**/
	function closeModel(modelid) {
		let model = document.querySelector('#' + modelid);
		model.classList.remove('is-active');
		let html = document.querySelector('html');
		html.classList.remove('is-active-1');
	}

	function openModel(modelid) {
		let model = document.querySelector('#' + modelid);
		model.classList.add('is-active');
		let html = document.querySelector('html');
		html.classList.add('is-active-1');
	}

	<?php if ($page == "home") { ?>
		// setTimeout(function() {
		// 	var element = document.getElementById("register-modal");
		// 	element.classList.add("is-active");
		// 	const body = document.querySelector('html');
		// 	body.classList.add('is-active');
		// }, 7000);
	<?php } ?>
	/**End Modal**/
</script>


<script type="text/javascript">
	/*Form Validation */
	function alphanumeric(data) {
		let letters = /^[0-9a-zA-Z]+$/;
		if (letters.test(data)) {
			return true;
		}
		return false;
	}

	function checkname(name) {
		let input = document.getElementById(name).value;
		let res = /^[a-zA-Z ]*$/.test(input);
		return !(res);
	}

	function setMsgID(ele, msg) {
		document.getElementById(ele).textContent = msg;
	}

	function validateEmail(data) {
		let testData = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if (testData.test(data)) {
			return true;
		}
		return false;
	}

	function phonenumber(inputtxt) {
		var phoneno = /^\(?([6-9]{1})\)?([0-9]{9})$/;
		if (inputtxt.match(phoneno)) {
			return true;
		} else {
			return false;
		}
	}

	function getvalue(obj, val) {
		console.log(obj + "--" + val);
		if (val == "") {
			console.log("if");
			setMsgID(obj + "formerror-5", "Enter Valid Captcha Code.");
			document.getElementById(obj + '-submit').disabled = true;
		} else {
			if (document.getElementById(obj + '-captcha').value != document.getElementById(obj + '-query_result').value) {
				console.log("if-else-if");
				setMsgID(obj + "formerror-5", "Enter Valid Captcha.");
				document.getElementById(obj + '-submit').disabled = true;
			} else {
				console.log("if-else-else");
				document.getElementById(obj + '-submit').disabled = false;
				setMsgID(obj + "formerror-5", "");
			}
		}
	}

	function disableButton() {
		document.getElementById('inquiry-submit').disabled = true;
		document.getElementById('inquiry-submit').innerHTML = 'Submitting...';
		document.getElementById('inquiry1-submit').disabled = true;
		document.getElementById('inquiry1-submit').innerHTML = 'Submitting...';
	}

	function validateInquiryForm(obj) {
		let inp = 0;

		if (document.getElementById(obj + '-fname').value == "") {
			setMsgID(obj + "formerror-1", "Enter Valid First Name");
			inp = 1;
		} else if (checkname(obj + '-fname')) {
			setMsgID(obj + "formerror-1", "Numeric Name Not Allowed");
			inp = 1;
		} else if (document.getElementById(obj + '-fname').value.includes(" ")) {
			setMsgID(obj + "formerror-1", "Spaces are not allowed");
			inp = 1;
		} else {
			setMsgID(obj + "formerror-1", "");
		}

		// Full Name Validation Start

		// if (document.getElementById(obj + '-fname').value === "") {
		// 	setMsgID(obj + "formerror-1", "Enter Valid Full Name");
		// 	inp = 1;
		// } else if (checkname(obj + '-fname')) {
		// 	setMsgID(obj + "formerror-1", "Numeric Name Not Allowed");
		// 	inp = 1;
		// } else if (document.getElementById(obj + '-fname').value.charAt(0) === " ") {
		// 	setMsgID(obj + "formerror-1", "First character is not a space");
		// 	inp = 1;
		// } else {
		// 	setMsgID(obj + "formerror-1", "");
		// }

		// Full Name Validation End

		if (document.getElementById(obj + '-lname').value == "") {
			setMsgID(obj + "formerror-2", "Enter Valid Last Name");
			inp = 1;
		} else if (checkname(obj + '-lname')) {
			setMsgID(obj + "formerror-2", "Numeric Name Not Allowed");
			inp = 1;
		} else if (document.getElementById(obj + '-lname').value.includes(" ")) {
			setMsgID(obj + "formerror-2", "Spaces are not allowed");
			inp = 1;
		} else {
			setMsgID(obj + "formerror-2", "");
		}


		if (!phonenumber(document.getElementById(obj + '-phone').value)) {
			setMsgID(obj + "formerror-3", "Enter Valid Mobile Number");
			inp = 1;
		} else {
			setMsgID(obj + "formerror-3", "");
		}

		if (!validateEmail(document.getElementById(obj + '-email').value)) {
			setMsgID(obj + "formerror-4", "Enter Valid Email Address");
			inp = 1;
		} else {
			setMsgID(obj + "formerror-4", "");
		}
		<?php if ($captcha) { ?>
			if (document.getElementById(obj + '-captcha').value == "") {
				setMsgID(obj + "formerror-5", "Enter Valid Captcha Code");
				inp = 1;
			} else {
				if (document.getElementById(obj + '-captcha').value != document.getElementById(obj + '-query_result').value) {
					setMsgID(obj + "formerror-5", "Enter Valid Captcha");
					inp = 1;
				} else {
					setMsgID(obj + "formerror-5", "");
				}
			}
		<?php } ?>
		if (inp == 1) {
			document.getElementById(obj + '-submit').disabled = true;
			inp = false;
		} else {
			document.getElementById(obj + '-submit').disabled = false;
			inp = true;
		}
		return inp;
	}


	// document.getElementById('inquiry-submit').onclick = function() {
	// 	validateInquiryForm('inquiry');
	// };
	// document.getElementById('inquiry-fname').oninput = function() {
	// 	validateInquiryForm('inquiry');
	// };
	// document.getElementById('inquiry-lname').oninput = function() {
	// 	validateInquiryForm('inquiry');
	// };
	// document.getElementById('inquiry-phone').oninput = function() {
	// 	validateInquiryForm('inquiry');
	// };
	// document.getElementById('inquiry-email').oninput = function() {
	// 	validateInquiryForm('inquiry');
	// };

	// document.getElementById('inquiry1-submit').onclick = function() {
	// 	validateInquiryForm('inquiry1');
	// };
	// document.getElementById('inquiry1-fname').oninput = function() {
	// 	validateInquiryForm('inquiry1');
	// };
	// document.getElementById('inquiry1-lname').oninput = function() {
	// 	validateInquiryForm('inquiry1');
	// };
	// document.getElementById('inquiry1-phone').oninput = function() {
	// 	validateInquiryForm('inquiry1');
	// };
	// document.getElementById('inquiry1-email').oninput = function() {
	// 	validateInquiryForm('inquiry1');
	// };
</script>


<script>
	const lenis = new Lenis({
		duration: 2,
		easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
		smoothWheel: true
	});

	lenis.on('scroll', ScrollTrigger.update);

	gsap.ticker.add((time) => {
		lenis.raf(time * 1000);
	});

	gsap.ticker.lagSmoothing(0);
</script>


<!-- text chnage -->

<script>
	gsap.utils.toArray(".scramble-text").forEach((el) => {
		const texts = JSON.parse(el.dataset.text);

		const tl = gsap.timeline({
			repeat: -1,
			repeatDelay: 2.5
		});

		// First text already visible
		for (let i = 1; i < texts.length; i++) {
			tl.to(el, {
				duration: 1.8,
				ease: "power2.inOut",
				scrambleText: {
					text: texts[i],
					chars: "upperAndLowerCase",
					revealDelay: 0.2,
					speed: 0.35
				}
			});

			// Hold the text before next transition
			tl.to({}, {
				duration: 4
			});
		}

		// Back to first text
		tl.to(el, {
			duration: 1.8,
			ease: "power2.inOut",
			scrambleText: {
				text: texts[0],
				chars: "upperAndLowerCase",
				revealDelay: 0.2,
				speed: 0.35
			}
		});

		tl.to({}, {
			duration: 2
		});
	});
</script>

<!-- Text Roll Animation -->

<script>
	document.addEventListener("DOMContentLoaded", () => {

		const STAGGER = 35; // milliseconds

		document.querySelectorAll(".text-roll").forEach(el => {

			if (el.dataset.rollInit) return;
			el.dataset.rollInit = true;

			const text = el.textContent;
			el.textContent = "";

			const wrap = document.createElement("span");
			wrap.className = "tr-wrap";

			const top = document.createElement("span");
			top.className = "tr-top";

			const bottom = document.createElement("span");
			bottom.className = "tr-bottom";

			[...text].forEach((char, index) => {

				const topChar = document.createElement("span");
				topChar.className = "char";
				topChar.innerHTML = char === " " ? "&nbsp;" : char;
				topChar.style.transitionDelay = `${index * STAGGER}ms`;

				const bottomChar = document.createElement("span");
				bottomChar.className = "char";
				bottomChar.innerHTML = char === " " ? "&nbsp;" : char;
				bottomChar.style.transitionDelay = `${index * STAGGER}ms`;

				top.appendChild(topChar);
				bottom.appendChild(bottomChar);

			});

			wrap.appendChild(top);
			wrap.appendChild(bottom);
			el.appendChild(wrap);

		});

	});
</script>

<script>
	gsap.registerPlugin(ScrollTrigger);

	gsap.utils.toArray(".image-container").forEach(function(container) {
		let image = container.querySelector("img");

		let tl = gsap.timeline({
			scrollTrigger: {
				trigger: container,
				scrub: true,
				pin: false,
			},
		});
		tl.from(image, {
			yPercent: -15,
			ease: "none",
		}).to(image, {
			yPercent: 15,
			ease: "none",
		});
	});
</script>

<script>
	gsap.registerPlugin(ScrollTrigger);

	function setupMarqueeAnimation() {
		const marqueeItems = gsap.utils.toArray(".marquee h1");

		if (!marqueeItems.length) return;

		horizontalLoop(marqueeItems, {
			repeat: -1,
			speed: 1,
			paddingRight: 30
		});
	}

	window.addEventListener("load", setupMarqueeAnimation);

	function horizontalLoop(items, config) {

		items = gsap.utils.toArray(items);
		config = config || {};

		let tl = gsap.timeline({
			repeat: config.repeat || -1,
			paused: config.paused || false,
			defaults: {
				ease: "none"
			}
		});

		let length = items.length,
			startX = items[0].offsetLeft,
			widths = [],
			xPercents = [],
			pixelsPerSecond = (config.speed || 1) * 100,
			totalWidth,
			curX,
			distanceToStart,
			distanceToLoop,
			item,
			i;

		gsap.set(items, {
			xPercent: function(i, el) {

				let w = widths[i] = parseFloat(gsap.getProperty(el, "width", "px"));

				xPercents[i] =
					(parseFloat(gsap.getProperty(el, "x", "px")) / w) * 100 +
					gsap.getProperty(el, "xPercent");

				return xPercents[i];
			}
		});

		gsap.set(items, {
			x: 0
		});

		totalWidth =
			items[length - 1].offsetLeft +
			(xPercents[length - 1] / 100) * widths[length - 1] -
			startX +
			items[length - 1].offsetWidth *
			gsap.getProperty(items[length - 1], "scaleX") +
			(parseFloat(config.paddingRight) || 0);

		for (i = 0; i < length; i++) {

			item = items[i];

			curX = (xPercents[i] / 100) * widths[i];

			distanceToStart = item.offsetLeft + curX - startX;

			distanceToLoop = distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");

			tl.to(item, {
					xPercent: ((curX - distanceToLoop) / widths[i]) * 100,
					duration: distanceToLoop / pixelsPerSecond
				}, 0)

				.fromTo(item, {
					xPercent: ((curX - distanceToLoop + totalWidth) / widths[i]) * 100
				}, {
					xPercent: xPercents[i],
					duration: (totalWidth - distanceToLoop) / pixelsPerSecond,
					immediateRender: false
				}, distanceToLoop / pixelsPerSecond);

		}

		tl.progress(1, true).progress(0, true);

		return tl;
	}
</script>

<script>
	const cards = gsap.utils.toArray(".section-process .card");
	const introCard = cards[0];

	const titles = gsap.utils.toArray(".card-title h4");

	titles.forEach((title) => {
		const split = new SplitText(title, {
			type: "chars",
			charsClass: "char",
			tag: "div",
		});

		split.chars.forEach((char) => {
			char.innerHTML = `<span>${char.textContent}</span>`;
		});
	});

	const cardImgWrapper = introCard.querySelector(".card-img");
	const cardImg = introCard.querySelector(".card-img img");

	gsap.set(cardImgWrapper, {
		scale: 0.5,
		borderRadius: "400px"
	});

	gsap.set(cardImg, {
		scale: 1.5
	});

	function animateContentIn(titleChars, description) {
		gsap.to(titleChars, {
			x: "0%",
			duration: 0.75,
			ease: "power4.out"
		});

		gsap.to(description, {
			x: 0,
			opacity: 1,
			duration: 0.75,
			delay: 0.1,
			ease: "power4.out"
		});
	}

	function animateContentOut(titleChars, description) {
		gsap.to(titleChars, {
			x: "100%",
			duration: 0.5,
			ease: "power4.in"
		});

		gsap.to(description, {
			x: 50,
			opacity: 0,
			duration: 0.5,
			ease: "power4.in"
		});
	}

	const marquee = introCard.querySelector(".card-marquee .marquee");
	const titleChars = introCard.querySelectorAll(".char span");
	const description = introCard.querySelector(".card-description");

	// Marquee infinite scroll animation
	function setupMarqueeAnimation() {
		const marqueeEl = document.querySelector(".card-marquee .marquee");
		if (!marqueeEl) return;

		// Clone content for seamless loop
		const clone = marqueeEl.innerHTML;
		marqueeEl.innerHTML += clone;

		const totalWidth = marqueeEl.scrollWidth / 2;

		gsap.to(marqueeEl, {
			x: -totalWidth,
			duration: 20,
			ease: "none",
			repeat: -1,
		});
	}

	setupMarqueeAnimation();

	ScrollTrigger.create({
		trigger: introCard,
		start: "top top",
		end: "+=300vh",

		onUpdate: (self) => {

			const progress = self.progress;
			const imgScale = 0.5 + progress * 0.5;
			const borderRadius = 400 - progress * 375;
			const innerImgScale = 1.5 - progress * 0.5;

			gsap.set(cardImgWrapper, {
				scale: imgScale,
				borderRadius: `${borderRadius}px`
			});

			gsap.set(cardImg, {
				scale: innerImgScale
			});

			if (imgScale >= 0.5 && imgScale <= 0.75) {

				const fadeProgress = (imgScale - 0.5) / (0.75 - 0.5);

				gsap.set(marquee, {
					opacity: 1 - fadeProgress
				});

			} else if (imgScale < 0.5) {

				gsap.set(marquee, {
					opacity: 1
				});

			} else {

				gsap.set(marquee, {
					opacity: 0
				});

			}
		}
	});

	cards.forEach((card, index) => {

		const isLastCard = index === cards.length - 1;

		ScrollTrigger.create({
			trigger: card,
			start: "top top",
			end: isLastCard ? "+=100vh" : "top top",
			endTrigger: isLastCard ? null : cards[cards.length - 1],
			pin: true,
			pinSpacing: isLastCard,
		});

	});

	cards.forEach((card, index) => {

		if (index < cards.length - 1) {

			const cardWrapper = card.querySelector(".card-wrapper");

			ScrollTrigger.create({
				trigger: cards[index + 1],
				start: "top bottom",
				end: "top top",

				onUpdate: (self) => {

					const progress = self.progress;

					gsap.set(cardWrapper, {
						scale: 1 - progress * 0.25,
						opacity: 1 - progress
					});

				}
			});

		}

	});

	cards.forEach((card, index) => {

		if (index > 0) {

			const cardImg = card.querySelector(".card-img img");
			const imgContainer = card.querySelector(".card-img");

			ScrollTrigger.create({
				trigger: card,
				start: "top bottom",
				end: "top top",

				onUpdate: (self) => {

					const progress = self.progress;

					gsap.set(cardImg, {
						scale: 2 - progress
					});

					gsap.set(imgContainer, {
						borderRadius: `${150 - progress * 125}px`
					});

				}
			});

		}

	});

	cards.forEach((card, index) => {

		if (index === 0) return;

		const cardDescription = card.querySelector(".card-description");
		const cardTitleChars = card.querySelectorAll(".char span");

		ScrollTrigger.create({
			trigger: card,
			start: "top top",

			onEnter: () => animateContentIn(cardTitleChars, cardDescription),

			onLeaveBack: () => animateContentOut(cardTitleChars, cardDescription)
		});

	});
</script>

<script>
	/* ------------------------------
   PARALLAX
------------------------------ */

	const gallery = document.querySelector(".parallax-gallery");
	const viewportHeight = window.innerHeight;

	const columns = [{
		el: ".column-1",
		distance: viewportHeight * 2
	}, {
		el: ".column-2",
		distance: viewportHeight * 3.3
	}, {
		el: ".column-3",
		distance: viewportHeight * 1.25
	}, {
		el: ".column-4",
		distance: viewportHeight * 3
	}];

	columns.forEach((item) => {

		gsap.fromTo(
			item.el, {
				y: 0
			}, {
				y: item.distance,
				ease: "none",
				scrollTrigger: {
					trigger: gallery,
					start: "top bottom",
					end: "bottom top",
					scrub: true
				}
			}
		);

	});
</script>

<!-- Loader -->

<script>
	// Page Loader: Logo Animation → Stairs Transition
	(function() {
		const loader = document.getElementById("page-loader");
		const loaderLogo = document.getElementById("loaderLogo");
		const stairsWrap = document.getElementById("stairsWrap");
		if (!loader) return;

		// Set initial states for logo SVG elements
		gsap.set("#lHex", { opacity: 0, scale: 0.6, svgOrigin: "17.57 20" });
		gsap.set("#lChevron", { opacity: 0, scaleX: 0, svgOrigin: "17.57 17" });
		gsap.set(".l-face", { opacity: 0, y: 6 });
		gsap.set("#lEye1", { opacity: 0, scale: 0, svgOrigin: "9.69 18.68" });
		gsap.set("#lEye2", { opacity: 0, scale: 0, svgOrigin: "25.46 18.68" });
		gsap.set("#lSep", { opacity: 0, scaleY: 0, svgOrigin: "17.57 30.5" });
		gsap.set(".l-text", { opacity: 0, y: 5 });

		// Make elements visible (GSAP controls their appearance)
		gsap.set(".l-hex, .l-chevron, .l-face, .l-eye, .l-sep, .l-text", { visibility: "visible" });

		const tl = gsap.timeline();

		// --- PHASE 1: Logo Animation ---
		tl.to("#lHex", { opacity: 1, scale: 1, duration: 0.5, ease: "back.out(2.5)" }, 0);
		tl.to("#lChevron", { opacity: 1, scaleX: 1, duration: 0.4, ease: "power3.out" }, 0.3);
		tl.to("#lFace1", { opacity: 1, y: 0, duration: 0.4, ease: "power3.out" }, 0.45);
		tl.to("#lFace2", { opacity: 1, y: 0, duration: 0.4, ease: "power3.out" }, 0.49);
		tl.to("#lFace3", { opacity: 1, y: 0, duration: 0.4, ease: "power3.out" }, 0.53);
		tl.to("#lFace4", { opacity: 1, y: 0, duration: 0.4, ease: "power3.out" }, 0.57);
		tl.to("#lEye1", { opacity: 1, scale: 1, duration: 0.4, ease: "back.out(3)" }, 0.65);
		tl.to("#lEye2", { opacity: 1, scale: 1, duration: 0.4, ease: "back.out(3)" }, 0.7);
		tl.to("#lSep", { opacity: 1, scaleY: 1, duration: 0.35, ease: "power3.out" }, 0.78);

		for (var i = 0; i < 8; i++) {
			tl.to("#lT" + i, { opacity: 1, y: 0, duration: 0.4, ease: "power3.out" }, 0.82 + i * 0.05);
		}

		// --- PHASE 2: Stairs Transition (after logo completes) ---
		tl.to(loaderLogo, { opacity: 0, scale: 0.9, duration: 0.3, ease: "power2.in" }, "+=0.4");

		// Show stairs, set them full height first
		tl.set(stairsWrap, { opacity: 1 });
		tl.set(".stair", { scaleY: 1, transformOrigin: "top" });

		// Change loader bg so page is visible behind stairs
		tl.set(loader, { background: "transparent" });

		// Stairs slide out (reveal page from top to bottom)
		tl.to(".stair", {
			scaleY: 0,
			transformOrigin: "top",
			duration: 0.6,
			stagger: { amount: -0.2, from: "start" },
			ease: "power4.inOut"
		}, "+=0.1");

		// --- PHASE 3: Hide loader completely ---
		tl.set(loader, { display: "none" });

		// --- PHASE 4: Reveal text animation after loader ---
		const revealEls = gsap.utils.toArray(".reveal-text");
		if (revealEls.length > 0) {
			revealEls.forEach(el => {
				const split = new SplitText(el, { type: "chars, words" });
				gsap.set(split.chars, { opacity: 0, y: 80, rotateY: -40, scale: 0.8 });

				tl.to(split.chars, {
					opacity: 1,
					y: 0,
					rotateY: 0,
					scale: 1,
					duration: 0.6,
					stagger: 0.03,
					ease: "back.out(1.7)",
				}, "-=0.2");
			});
		}
	})();
</script>