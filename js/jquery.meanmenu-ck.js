/*!
 * jQuery meanMenu v2.0.6
 * @Copyright (C) 2012-2013 Chris Wharton (https://github.com/weare2ndfloor/meanMenu)
 *
 *//*
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT
 * HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY OR
 * FITNESS FOR ANY PARTICULAR PURPOSE OR THAT THE USE OF THE SOFTWARE
 * OR DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS,
 * COPYRIGHTS, TRADEMARKS OR OTHER RIGHTS.COPYRIGHT HOLDERS WILL NOT
 * BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL OR CONSEQUENTIAL
 * DAMAGES ARISING OUT OF ANY USE OF THE SOFTWARE OR DOCUMENTATION.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://gnu.org/licenses/>.
 *
 * Find more information at http://www.meanthemes.com/plugins/meanmenu/
 *
 */(function(e){"use strict";e.fn.meanmenu=function(t){var n={meanMenuTarget:jQuery(this),meanMenuContainer:"body",meanMenuClose:"X",meanMenuCloseSize:"18px",meanMenuOpen:"<span /><span /><span />",meanRevealPosition:"right",meanRevealPositionDistance:"0",meanRevealColour:"",meanRevealHoverColour:"",meanScreenWidth:"768",meanNavPush:"",meanShowChildren:!0,meanExpandableChildren:!0,meanExpand:"+",meanContract:"-",meanRemoveAttrs:!1,onePage:!1,removeElements:""},t=e.extend(n,t),r=window.innerWidth||document.documentElement.clientWidth;return this.each(function(){function x(){if(a=="center"){var e=window.innerWidth||document.documentElement.clientWidth,t=e/2-22+"px";C="left:"+t+";right:auto;";S?jQuery(".meanmenu-reveal").animate({left:t}):jQuery(".meanmenu-reveal").css("left",t)}}function A(){jQuery(L).is(".meanmenu-reveal.meanclose")?L.html(s):L.html(u)}function O(){jQuery(".mean-bar,.mean-push").remove();jQuery(n).removeClass("mean-container");jQuery(e).show();T=!1;N=!1;jQuery(E).removeClass("mean-remove")}function M(){if(r<=h){jQuery(E).addClass("mean-remove");N=!0;jQuery(n).addClass("mean-container");jQuery(".mean-container").prepend('<div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="'+k+'">Show Navigation</a><nav class="mean-nav"></nav></div>');var t=jQuery(e).html();jQuery(".mean-nav").html(t);b&&jQuery("nav.mean-nav ul, nav.mean-nav ul *").each(function(){jQuery(this).removeAttr("class");jQuery(this).removeAttr("id")});jQuery(e).before('<div class="mean-push" />');jQuery(".mean-push").css("margin-top",p);jQuery(e).hide();jQuery(".meanmenu-reveal").show();jQuery(d).html(u);L=jQuery(d);jQuery(".mean-nav ul").hide();if(v)if(m){jQuery(".mean-nav ul ul").each(function(){jQuery(this).children().length&&jQuery(this,"li:first").parent().append('<a class="mean-expand" href="#" style="font-size: '+o+'">'+g+"</a>")});jQuery(".mean-expand").on("click",function(e){e.preventDefault();if(jQuery(this).hasClass("mean-clicked")){jQuery(this).text(g);jQuery(this).prev("ul").slideUp(300,function(){})}else{jQuery(this).text(y);jQuery(this).prev("ul").slideDown(300,function(){})}jQuery(this).toggleClass("mean-clicked")})}else jQuery(".mean-nav ul ul").show();else jQuery(".mean-nav ul ul").hide();jQuery(".mean-nav ul li").last().addClass("mean-last");L.removeClass("meanclose");jQuery(L).click(function(e){e.preventDefault();if(T==0){L.css("text-align","center");L.css("text-indent","0");L.css("font-size",o);jQuery(".mean-nav ul:first").slideDown();T=!0}else{jQuery(".mean-nav ul:first").slideUp();T=!1}L.toggleClass("meanclose");A();jQuery(E).addClass("mean-remove")});w&&jQuery(".mean-nav ul > li > a:first-child").on("click",function(){jQuery(".mean-nav ul:first").slideUp();T=!1;jQuery(L).toggleClass("meanclose").html(u)})}else O()}var e=t.meanMenuTarget,n=t.meanMenuContainer,i=t.meanReveal,s=t.meanMenuClose,o=t.meanMenuCloseSize,u=t.meanMenuOpen,a=t.meanRevealPosition,f=t.meanRevealPositionDistance,l=t.meanRevealColour,c=t.meanRevealHoverColour,h=t.meanScreenWidth,p=t.meanNavPush,d=".meanmenu-reveal",v=t.meanShowChildren,m=t.meanExpandableChildren,g=t.meanExpand,y=t.meanContract,b=t.meanRemoveAttrs,w=t.onePage,E=t.removeElements;if(navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPod/i)||navigator.userAgent.match(/iPad/i)||navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/Blackberry/i)||navigator.userAgent.match(/Windows Phone/i))var S=!0;(navigator.userAgent.match(/MSIE 8/i)||navigator.userAgent.match(/MSIE 7/i))&&jQuery("html").css("overflow-y","scroll");var T=!1,N=!1;a=="right"&&(C="right:"+f+";left:auto;");if(a=="left")var C="left:"+f+";right:auto;";x();var k="background:"+l+";color:"+l+";"+C,L="";S||jQuery(window).resize(function(){r=window.innerWidth||document.documentElement.clientWidth;r>h?O():O();if(r<=h){M();x()}else O()});window.onorientationchange=function(){x();r=window.innerWidth||document.documentElement.clientWidth;r>=h&&O();r<=h&&N==0&&M()};M()})}})(jQuery);