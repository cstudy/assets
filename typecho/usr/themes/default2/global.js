$(document).ready(function () {
    // ---------------- jquery.fancybox.min.js
    $(".fancybox").fancybox();

    // ---------------- back to top
    function setBackToTop() {
        var $a = $(".back-to-top");
        function setBtn() {
            if ($(window).scrollTop() > 100) {
                $a.css({ right: "20px" });
            } else {
                $a.css({ right: "-80px" });
            }
        }
        setBtn();

        $(window).scroll(setBtn);
        $a.click(function () {
            $("body,html").animate({
                scrollTop: 0,
                // duration: 400,
            });
        });
    }
    setBackToTop();
});
