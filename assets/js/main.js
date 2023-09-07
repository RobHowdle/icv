// Scrolling adding active class to nav items
document.addEventListener("DOMContentLoaded", () => {
	const observer = new IntersectionObserver(
		(entries) => {
			const navLinks = document.querySelectorAll(
				".header .nav-menu ul li a"
			);

			navLinks.forEach((navLink) => {
				navLink.classList.remove("active");
			});

			const lastSection = entries[entries.length - 1].target;
			const isLastSectionIntersecting =
				entries[entries.length - 1].isIntersecting;

			entries.forEach((entry) => {
				const ref = entry.target.dataset.link;
				const link = document.querySelector(
					`.header .nav-menu ul li a.${ref}`
				);
				const intersecting =
					entry.isIntersecting && entry.intersectionRatio >= 0.5;

				if (
					link &&
					(intersecting ||
						(entry.target === lastSection &&
							isLastSectionIntersecting))
				) {
					link.classList.add("active");
				}
			});
		},
		{
			root: document.querySelector(".container"),
			rootMargin: "0px",
			threshold: [
				...Array.from({ length: 1000 }, (value, index) => index / 1000),
			],
		}
	);

	document.querySelectorAll(".single-section").forEach((content) => {
		observer.observe(content);
	});
});

// Landing Slider
const landingSlider = new Swiper(".landing-slider", {
	slidesPerView: 1,
	spaceBetween: 20,
	loop: true,
	speed: 5000,
	breakpoints: {
		576: {
			slidesPerView: 2,
		},
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	autoplay: {
		disableOnInteraction: true,
		pauseOnMouseHover: true,
	},
});

// Portfolio Load More
const loadmore = document.querySelector("#loadmore");
let currentItems = 3;
loadmore.addEventListener("click", (e) => {
	const elementList = [
		...document.querySelectorAll(".work-card-wrapper .card"),
	];
	for (let i = currentItems; i < currentItems + 3; i++) {
		if (elementList[i]) {
			elementList[i].style.visibility = "visible";
			elementList[i].style.opacity = "1";
			elementList[i].style.height = "600px";
		}
	}

	currentItems += 3;

	if (currentItems >= elementList.length) {
		event.target.style.visibility = "hidden";
		event.target.style.opacity = "0";
		event.target.style.height = "0px";
	}
});

// Mobile Nav
$(document).ready(function () {
	$(".mobile-nav-toggle").click(function () {
		$(".header-mobile").toggleClass("active");
	});
});

// Assigning unique ID's to Portfolio Cards
document.addEventListener("DOMContentLoaded", () => {
	const cards = document.querySelectorAll(".work-card-wrapper .card");
	const modals = document.querySelectorAll(".portfolio-modal");

	cards.forEach((card, index) => {
		const cardNumber = index + 1;
		const button = card.querySelector(".btn");
		const contentList = card.querySelectorAll("p.content");
		const title = card.querySelector(".h6");
		const modalId = `portfolio-modal-${cardNumber}`;

		button.dataset.target = `#${modalId}`;

		// Giving each p.content div the card number id
		contentList.forEach((content) => {
			content.classList.add(`content-${cardNumber}`);
		});

		button.addEventListener("click", () => {
			const targetModal = document.getElementById(modalId);
			const backdrop = document.querySelector(
				".portfolio-modal-backdrop"
			);

			if (targetModal) {
				backdrop.classList.add("show");
				targetModal.classList.add("show");
				const content = button.getAttribute("data-text");

				const modalTitle = targetModal.querySelector(
					".modal-header h2.h5"
				);
				const modalText = targetModal.querySelector(".modal-text p");

				if (modalTitle) {
					modalTitle.innerHTML = title.innerHTML;
				}

				if (modalText) {
					modalText.innerHTML = content;
				}
			}
		});
	});

	modals.forEach((modal, counter) => {
		const modalNumber = counter + 1;
		const modalId = `portfolio-modal-${modalNumber}`;
		modal.id = modalId;

		const closeBtn = modal.querySelector(
			`#${modalId} .modal-header .close`
		);
		closeBtn.addEventListener("click", () => {
			console.log("click");
			modal.classList.remove("show");
			document
				.querySelector(".portfolio-modal-backdrop")
				.classList.remove("show");
		});
	});

	document.addEventListener("keyup", (event) => {
		if (event.key === "Escape") {
			const backdrop = document.querySelector(
				".portfolio-modal-backdrop"
			);
			const visibleModal = document.querySelector(
				".portfolio-modal.show"
			);

			if (backdrop && visibleModal) {
				backdrop.classList.remove("show");
				visibleModal.classList.remove("show");
			}
		}
	});
});
