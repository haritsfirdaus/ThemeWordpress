document.addEventListener("DOMContentLoaded",(function(e){var n=new IntersectionObserver((function(e,n){e.forEach((function(e){e.isIntersecting&&(new Swiper(e.target,{loop:!1,slidesPerView:2.5,spaceBetween:10}),n.unobserve(e.target))}))}));document.querySelectorAll(".swiper").forEach((function(e){n.observe(e)}))}));
//# sourceMappingURL=page-default.js.map