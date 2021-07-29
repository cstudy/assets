window.addEventListener("DOMContentLoaded", (event) => {
    var a = document.getElementsByClassName("back-to-top")[0];
    function setBackToTop() {
        if (window.scrollY > 100) {
            // a.style.visibility = "visible";
            a.style.right = "20px";
        } else {
            // a.style.visibility = "hidden";
            a.style.right = "-80px";
        }
    }
    setBackToTop();
    window.addEventListener("scroll", setBackToTop);
    a.onclick = function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    };
});


