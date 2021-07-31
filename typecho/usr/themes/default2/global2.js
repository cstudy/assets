$(document).ready(function () {
    // -------------------------------- jquery.fancybox.min.js
    $(".fancybox").fancybox();

    // -------------------------------- back to top
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

    // -------------------------------- 目录导航
    function setRightToc() {
        $(".sticky>ul>li").addClass("level1");
        var headings = $("[name^=index-]");
        var rightTocLinks = $("[data-href^='#index-']");
        var timer = null;

        function setTocShow() {
            var toc = $(".sticky>.widget-list");
            if (localStorage.getItem("LijqBlogToc")) {
                toc.addClass("active");
                setTocHighlight();
            }
            $(".sticky>.widget-title").on("click", function () {
                if (toc.hasClass("active")) {
                    toc.removeClass("active");
                    localStorage.setItem("LijqBlogToc", "");
                } else {
                    toc.addClass("active");
                    setTocHighlight();
                    localStorage.setItem("LijqBlogToc", "1");
                }
            });
        }

        function setTocHighlight() {
            var Top = $(window).scrollTop();
            headings.each(function (i) {
                var parent;
                var curLi;
                if (Top >= $(this).offset().top - 10) {
                    rightTocLinks.parent().removeClass("active");
                    curLi = rightTocLinks.eq(i).parent();

                    curLi.addClass("active");
                    parent = curLi.hasClass("level1") ? curLi : curLi.parents(".level1");
                    parent.get(0).scrollIntoView();
                }
            });
        }

        setTocShow();

        rightTocLinks.click(function (e) {
            e.preventDefault();
            var index = rightTocLinks.index($(this));

            var _top = headings.eq(index).offset().top;
            $("html,body").animate({ scrollTop: _top }, 200);
        });
        $(window).scroll(function () {
            clearTimeout(timer);
            timer = setTimeout(() => {
                setTocHighlight();
            }, 50);
        });
    }
    setRightToc();
});
