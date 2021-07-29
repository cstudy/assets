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

(function(){
    if (document.getElementById('secondary')) {
        document.getElementById('secondary').style.height = document.getElementById('main').scrollHeight + 'px';
        //生成文章目录
        (function () {
            let index = 0;
            let depth = 0;
            let tocTreeHtml = '';
            let tocTreeObj = document.getElementById('tocTree')
            let postContentObj = document.getElementById('main').querySelector('.post-content');
            postContentObj.innerHTML = postContentObj.innerHTML.replace(/<h([1-6])(.*?)>(.*?)<\/h\1>/ig, function (match, num, attrs, html) {
                index++;
                if (depth < num) {
                    if (index > 1) {
                        tocTreeHtml += '</li><li><ul class="widget-list"><li><a href="#index-' + index + '">' + html + '</a>';
                    } else {
                        tocTreeHtml += '<li><a href="#index-' + index + '">' + html + '</a>';
                    }
                } else if (depth == num) {
                    tocTreeHtml += '</li><li><a href="#index-' + index + '">' + html + '</a>';
                } else if (depth > num) {
                    tocTreeHtml += '</li>' + (new Array(depth - num + 1).join('</ul></li>')) + '<li><a href="#index-' + index + '">' + html + '</a>';
                }
                depth = num;
                return '<h' + num + attrs + ' id="index-' + (index) + '">' + html + '</h' + num + '>';
            })
            if (tocTreeHtml) {
                tocTreeObj.style.display = 'block';
                tocTreeObj.querySelector('.widget-list').innerHTML = tocTreeHtml;
            }
        })();
        //文章目录跟随内容滚动
        (function () {
            let tocIndexNode = document.querySelectorAll('[id^="index"]');
            let tocTreeListObj = document.getElementById('tocTree').querySelector('.widget-list');
            if (tocIndexNode) {
                window.addEventListener('scroll', function () {
                    let scrollTop = document.documentElement.scrollTop;
                    let windowHeight = window.innerHeight;
                    tocIndexNode.forEach(function (item, index, tocIndexNode) {
                        let tocNameObj = document.querySelector('[href="#' + item.attributes['id'].value + '"]');
                        if (tocIndexNode[Math.min(index + 1, tocIndexNode.length - 1)].offsetTop - scrollTop > 0 && item.offsetTop - scrollTop < windowHeight) {
                            tocNameObj.style.fontWeight = 'bolder';
                            tocTreeListObj.scrollTo(0, tocNameObj.offsetTop - tocTreeListObj.offsetHeight/2);
                        } else {
                            tocNameObj.style.fontWeight = 'normal';
                        }
                    })
                })
            }
        })();
    }
})();
