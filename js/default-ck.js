var slides=[];$(document).ready(function(){jQuery.support.placeholder=!1;test=document.createElement("input");"placeholder"in test&&(jQuery.support.placeholder=!0);var e=$("#homepage_slideshow").atdSlide({slides:slides,shown:1,speed:1e3,autoplay:5e3,loop:!0,onComplete:function(){if($("#homepage_slideshow .slides li.new").length>0)var e=$("#homepage_slideshow .slides li.new").attr("data-name"),t=$("#homepage_slideshow .slides li.new").attr("data-link"),n=$("#homepage_slideshow .slides li.new").attr("data-desc");else var e=$("#homepage_slideshow .slides li").attr("data-name"),t=$("#homepage_slideshow .slides li").attr("data-link"),n=$("#homepage_slideshow .slides li").attr("data-desc");$(".description h3").text(e);$(".description .desc").text(n);t?$(".description .learn_more").attr("href",t).addClass("active"):$(".description .learn_more").removeClass("active")}});$("#menu-main_menu").superfish({autoArrows:!1,animation:{opacity:"show",height:"show"},speed:"fast"});$("a.fancybox").fancybox()});$(function(){if(!$.support.placeholder){var e=document.activeElement;$(":text").focus(function(){$(this).attr("placeholder")!=""&&$(this).val()==$(this).attr("placeholder")&&$(this).val("").removeClass("hasPlaceholder")}).blur(function(){$(this).attr("placeholder")!=""&&($(this).val()==""||$(this).val()==$(this).attr("placeholder"))&&$(this).val($(this).attr("placeholder")).addClass("hasPlaceholder")});$(":text").blur();$(e).focus();$("form:eq(0)").submit(function(){$(":text.hasPlaceholder").val("")})}});