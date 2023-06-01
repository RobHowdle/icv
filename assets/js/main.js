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

		button.dataset.target = `portfolio-modal-${cardNumber}`;
	});

	modals.forEach((modal, counter) => {
		const modalNumber = counter + 1;
		modal.id = `portfolio-modal-${modalNumber}`;
	});
});

// Loading Spinner
// document.onreadystatechange = function () {
// 	if()
// }
