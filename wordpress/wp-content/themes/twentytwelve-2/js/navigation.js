!function(){var nav=document.getElementById("site-navigation"),button,menu;nav&&(button=nav.getElementsByTagName("button")[0],menu=nav.getElementsByTagName("ul")[0],button&&(menu&&menu.childNodes.length?button.onclick=function(){-1===menu.className.indexOf("nav-menu")&&(menu.className="nav-menu"),-1!==button.className.indexOf("toggled-on")?(button.className=button.className.replace(" toggled-on",""),menu.className=menu.className.replace(" toggled-on","")):(button.className+=" toggled-on",menu.className+=" toggled-on")}:button.style.display="none"))}(),function($){$(".main-navigation").find("a").on("focus.twentytwelve blur.twentytwelve",(function(){$(this).parents(".menu-item, .page_item").toggleClass("focus")})),"ontouchstart"in window&&$("body").on("touchstart.twentytwelve",".menu-item-has-children > a, .page_item_has_children > a",(function(e){var el=$(this).parent("li");el.hasClass("focus")||(e.preventDefault(),el.toggleClass("focus"),el.siblings(".focus").removeClass("focus"))}))}(jQuery);