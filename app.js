/**
 * Vanilla JS carousel
 * Carousel used for price cards
 *
 * source: https://medium.com/@marcusmichaels/how-to-build-a-carousel-from-scratch-in-vanilla-js-9a096d3b98c9
 */

 !(function (d) {
	const container = d.querySelector(".sh-carousel-wrapper");
	var itemClassName = "sh-price-card sh-carousel__photo",
		items = container.getElementsByClassName("sh-carousel__photo"),
		links = container.querySelectorAll(".sh-carousel-selector"),
		indicators = container.querySelectorAll(".sh-carousel-indicator"),
		totalItems = items.length,
		slide = 0,
		moving = true;

	// make it rain
	initCarousel();

	// Set classes
	function setInitialClasses() {
		// Targets the previous, current, and next items
		// This assumes there are at least three items.
		items[totalItems - 1].classList.add("prev");
		items[0].classList.add("active");
		items[1].classList.add("next");
	}
	// Set event listeners
	function setEventListeners() {
		// var next = d.getElementsByClassName("sh-carousel__button--next")[0],
		// 	prev = d.getElementsByClassName("sh-carousel__button--prev")[0];
		// next.addEventListener("click", moveNext);
		// prev.addEventListener("click", movePrev);

		links.forEach((l) => {
			l.addEventListener("click", moveCarouselTo);
		});
		indicators.forEach((i) => {
			i.addEventListener("click", moveCarouselTo);
		});
	}

	// Next navigation handler
	function moveNext() {
		// Check if moving
		if (!moving) {
			// If it's the last slide, reset to 0, else +1
			if (slide === totalItems - 1) {
				slide = 0;
			} else {
				slide++;
			}
			// Move carousel to updated slide
			moveCarouselTo(slide);
		}
	}
	// Previous navigation handler
	function movePrev() {
		// Check if moving
		if (!moving) {
			// If it's the first slide, set as the last slide, else -1
			if (slide === 0) {
				slide = totalItems - 1;
			} else {
				slide--;
			}

			// Move carousel to updated slide
			moveCarouselTo(slide);
		}
	}

	function disableInteraction() {
		// Set 'moving' to true for the same duration as our transition.
		// (0.5s = 500ms)

		moving = true;
		// setTimeout runs its function once after the given time
		setTimeout(function () {
			moving = false;
		}, 500);
	}

	function moveCarouselTo(newSlide) {
		if (typeof newSlide === "object") {
			newSlide.preventDefault();
			newSlide = +newSlide.target.dataset.slide;
		}

		// Check if carousel is moving, if not, allow interaction
		if (!moving) {
			// temporarily disable interactivity
			disableInteraction();
			// Update the "old" adjacent slides with "new" ones
			var newPrevious = newSlide == 0 ? items.length - 1 : newSlide - 1;
			var newNext = newSlide == items.length - 1 ? 0 : newSlide + 1;
			var oldPrevious = newPrevious == 0 ? items.length - 2 : newPrevious - 1;
			var oldNext = newPrevious == items.length - 1 ? 0 : oldPrevious + 1;

			if (true) {
				// Checks and updates if the new slides are out of bounds
				if (newPrevious <= 0) {
					oldPrevious = totalItems - 1;
				} else if (newNext >= totalItems - 1) {
					oldNext = 0;
				}
				// Checks and updates if slide is at the beginning/end
				if (newSlide == 0) {
					newPrevious = totalItems - 1;
					oldPrevious = totalItems - 2;
					oldNext = newSlide + 1;
				} else if (newSlide == totalItems - 1) {
					newPrevious = newSlide - 1;
					newNext = 0;
					oldNext = 1;
				}
				// Now we've worked out where we are and where we're going,
				// by adding/removing classes we'll trigger the transitions.
				// Reset old next/prev elements to default classes
				items[oldPrevious].className = itemClassName;
				items[oldNext].className = itemClassName;
				// Add new classes
				items[newPrevious].className = itemClassName + " prev";
				items[newSlide].className = itemClassName + " active";
				items[newNext].className = itemClassName + " next";

				links.forEach((l, index) => {
					if (newSlide != index) {
						if (l.classList.contains("active")) l.classList.remove("active");
					} else {
						if (!l.classList.contains("active")) l.classList.add("active");
					}
				});

				indicators.forEach((i, index) => {
					if (newSlide != index) {
						if (i.classList.contains("active")) i.classList.remove("active");
					} else {
						if (!i.classList.contains("active")) i.classList.add("active");
					}
				});
			}
		}
	}

	function initCarousel() {
		setInitialClasses();
		setEventListeners();
		// Set moving to false so that the carousel becomes interactive
		moving = false;
	}
})(document);

/**
 * Events for show room tab group
 */
!(function (d) {
	const links = d.querySelectorAll(".show-room-link");
	const selectors = d.querySelectorAll(".show-room-selector");

	links.forEach((link) => {
		link.addEventListener("click", function (event) {
			event.preventDefault();
			index = link.dataset.index;
			links.forEach((sub_link, sub_index) => {
				const list_item = sub_link.parentElement;
				const section = d.querySelector(`#show-room .show-room-section[data-index='${sub_index}']`);
				if (sub_link.dataset.index !== index) {
					list_item.classList.remove("active");
					if (section) section.classList.remove("active");
				} else {
					list_item.classList.add("active");
					if (section) section.classList.add("active");
				}
			});
		});
	});

	selectors.forEach((selector) => {
		selector.addEventListener("click", function (event) {
			event.preventDefault();
			const link = this.querySelector(".show-room-link");
			index = link.dataset.index;
			selectors.forEach((list_item, sub_index) => {
				const sub_link = list_item.querySelector(".show-room-link");
				const section = d.querySelector(`#show-room .show-room-section[data-index='${sub_index}']`);
				if (sub_link.dataset.index !== index) {
					list_item.classList.remove("active");
					if (section) section.classList.remove("active");
				} else {
					list_item.classList.add("active");
					if (section) section.classList.add("active");
				}
			});
		});
	});
})(document);

/**
 * Vanilla JS carousel
 * Carousel used for payroll options
 *
 * source: https://medium.com/@marcusmichaels/how-to-build-a-carousel-from-scratch-in-vanilla-js-9a096d3b98c9
 */

// !(function (d) {
// 	const container = d.querySelector(".show-room-payroll-carousel-wrapper");
// 	var itemClassName = "sh-carousel__content",
// 		items = container.getElementsByClassName("sh-carousel__content"),
// 		links = container.querySelectorAll(".sh-carousel-selector"),
// 		indicators = container.querySelectorAll(".sh-carousel-indicator"),
// 		moving = true;

// 	// make it rain
// 	initCarousel();

// 	// Set classes
// 	function setInitialClasses() {
// 		// Targets the previous, current, and next items
// 		// This assumes there are at least three items.
// 		// Modified to accomodate only two items.
// 		items[0].classList.add("active");
// 		items[1].classList.add("next");
// 		items[1].classList.add("prev");
// 	}
// 	// Set event listeners
// 	function setEventListeners() {
// 		links.forEach((l) => {
// 			l.addEventListener("click", moveCarouselTo);
// 		});
// 		indicators.forEach((i) => {
// 			i.addEventListener("click", moveCarouselTo);
// 		});
// 	}

// 	function disableInteraction() {
// 		// Set 'moving' to true for the same duration as our transition.
// 		// (0.5s = 500ms)

// 		moving = true;
// 		// setTimeout runs its function once after the given time
// 		setTimeout(function () {
// 			moving = false;
// 		}, 500);
// 	}

// 	function moveCarouselTo(newSlide) {
// 		if (typeof newSlide === "object") {
// 			newSlide.preventDefault();
// 			newSlide = +newSlide.target.dataset.slide;
// 		}

// 		// Check if carousel is moving, if not, allow interaction
// 		if (!moving) {
// 			// temporarily disable interactivity
// 			disableInteraction();
// 			// Update the "old" adjacent slides with "new" ones
// 			if (newSlide == 0) {
// 				items[0].className = itemClassName + " active";
// 				items[1].className = itemClassName + " prev next";
// 			} else {
// 				items[0].className = itemClassName + " prev next";
// 				items[1].className = itemClassName + " active";
// 			}

// 			links.forEach((l, index) => {
// 				if (newSlide != index) {
// 					if (l.classList.contains("active")) l.classList.remove("active");
// 				} else {
// 					if (!l.classList.contains("active")) l.classList.add("active");
// 				}
// 			});

// 			indicators.forEach((i, index) => {
// 				if (newSlide != index) {
// 					if (i.classList.contains("active")) i.classList.remove("active");
// 				} else {
// 					if (!i.classList.contains("active")) i.classList.add("active");
// 				}
// 			});
// 		}
// 	}

// 	function initCarousel() {
// 		setInitialClasses();
// 		setEventListeners();
// 		// Set moving to false so that the carousel becomes interactive
// 		moving = false;
// 	}
// })(document);

/**
 * Events for demo video
 */

!(function (d) {
	// Get the modal
	const modal = d.getElementById("video-modal");

	const video = d.querySelector("video");

	// Get the button that opens the modal
	const btns = d.querySelectorAll(".sh-watch-demo");

	// Get the <span> element that closes the modal
	const span = modal.getElementsByClassName("close")[0];

	// When the user clicks on the button, open the modal
	btns.forEach((btn) => {
		btn.addEventListener("click", function (event) {
			event.preventDefault();
			modal.style.display = "block";
			if (video) {
				video.play();
				if (video.requestFullscreen) video.requestFullscreen();
				else if (video.webkitRequestFullscreen) video.webkitRequestFullscreen();
				else if (video.msRequestFullScreen) video.msRequestFullScreen();
			}
		});
	});

	// When the user clicks on <span> (x), close the modal
	span.addEventListener("click", function (event) {
		event.preventDefault();
		modal.style.display = "none";
		if (video) video.pause();
	});

	// When the user clicks anywhere outside of the modal, close it
	window.addEventListener("click", function (event) {
		if (event.target == modal) {
			modal.style.display = "none";
			if (video) video.pause();
		}
	});
})(document);

/**
 * Events for contact modal
 */
!(function (d) {
	// Get the modal
	const modal = d.getElementById("contact-modal");

	// Get the button that opens the modal
	const btns = d.querySelectorAll(".sh-show-contact-form");

	// Get the <span> element that closes the modal
	const span = modal.getElementsByClassName("close")[0];

	/**
	 * CHANGE THIS TO THE PHP FILE URL.
	 */
	const contact_form_url = "./contact.php";

	const contact_form = d.getElementById("contact-form");
	const phone_input = d.getElementById("contact-phone-number");

	// When the user clicks on the button, open the modal
	btns.forEach((btn) => {
		btn.addEventListener("click", function (event) {
			event.preventDefault();
			modal.style.display = "block";
		});
	});

	// When the user clicks on <span> (x), close the modal
	span.addEventListener("click", function (event) {
		event.preventDefault();
		close();
	});

	// When the user clicks anywhere outside of the modal, close it
	window.addEventListener("click", function (event) {
		if (event.target == modal) {
			close();
		}
	});

	if (contact_form) {
		contact_form.addEventListener("submit", function (event) {
			event.preventDefault();
			submitForm();
		});
	}

	const submitForm = function () {
		const token = grecaptcha.getResponse();
		if (!token) return;
		const formData = new FormData();
		const name = d.getElementById("contact-name").value;
		const email = d.getElementById("contact-email").value;
		const phone_number = d.getElementById("contact-phone-number").value;
		formData.append("name", name);
		formData.append("email", email);
		formData.append("phone_number", phone_number);
		formData.append("recaptcha_token", token);
		const xmlHttp = new XMLHttpRequest();
		xmlHttp.open("POST", contact_form_url, false);
		xmlHttp.send(formData);
		if (xmlHttp.response) {
			console.log(xmlHttp.response);
			if (!xmlHttp.response.error) {
				contact_form.style.display = "none";
				d.querySelector("#contact-modal .sh-contact-response").style.display = "block";
			}
		}
	};

	if (phone_input) {
		phone_input.addEventListener("input", validatePhoneNumber);
	}

	function validatePhoneNumber() {
		const digits_only = this.value.replace(/\D/g, "").substring(0, 10);
		var value = "";
		if (digits_only.length > 6) {
			var area_code = digits_only.substring(0, 3);
			var middle_digits = digits_only.substring(3, 6);
			var last_digits = digits_only.substring(6);
			value = `(${area_code}) ${middle_digits}-${last_digits}`;
		} else if (digits_only.length > 3) {
			var area_code = digits_only.substring(0, 3);
			var middle_digits = digits_only.substring(3, 6);
			value = `(${area_code}) ${middle_digits}`;
		} else if (digits_only.length > 0) {
			var area_code = digits_only;
			value = `(${area_code}`;
		}

		this.value = value;
	}

	function close() {
		grecaptcha.reset();
		modal.style.display = "none";
		d.getElementById("contact-name").value = "";
		d.getElementById("contact-email").value = "";
		d.getElementById("contact-phone-number").value = "";
		contact_form.style.display = "block";
		d.querySelector("#contact-modal .sh-contact-response").style.display = "none";
	}
})(document);
