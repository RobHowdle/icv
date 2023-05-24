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
