// Scrolling adding active class to nav items
const observer = new IntersectionObserver(
	(entries) => {
		entries.forEach((entry) => {
			const intersecting =
				entry.isIntersecting && entry.intersectionRatio >= 0.5;
			const ref = `.${entry.target.dataset.link}`;
			document
				.querySelector(`.header .nav-menu ul li a${ref}`)
				.classList.toggle("active", intersecting);
		});
	},
	{
		root: document.querySelector(".container"),
		threshold: [
			...Array.from({ length: 1000 }, (value, index) => index / 1000),
		],
	}
);

document.querySelector(".header .nav-menu ul li a").click(function (l) {
	l.toggleClass("active");
});

document.querySelectorAll(".single-section").forEach((content) => {
	observer.observe(content);
});

// Landing Slider
const landingSlider = new Swiper(".landing-slider", {
	slidesPerView: 2,
	spaceBetween: 20,
	loop: true,
	speed: 5000,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	autoplay: {
		disableOnInteraction: true,
		pauseOnMouseHover: true,
	},
});
