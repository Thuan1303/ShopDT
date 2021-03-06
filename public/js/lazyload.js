const images = document.querySelectorAll("[data-src]");

const imgOptions = {
    root: null,
    threshold: 0,
    rootMargin: "0px",
};

function preloadImage(img) {
    const src = img.getAttribute("data-src");
    if (!src) {
        return;
    }
    img.src = src;
}

const imgObserver = new IntersectionObserver((entries,
    imgObserver) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            preloadImage(entry.target);
            imgObserver.unobserve(entry.target);
        }
    })
}, imgOptions);

images.forEach(image => {
    imgObserver.observe(image);
});
