!function(n){function o(r){if(a[r])return a[r].exports;var e=a[r]={i:r,l:!1,exports:{}};return n[r].call(e.exports,e,e.exports,o),e.l=!0,e.exports}var a={};o.m=n,o.c=a,o.i=function(n){return n},o.d=function(n,a,r){o.o(n,a)||Object.defineProperty(n,a,{configurable:!1,enumerable:!0,get:r})},o.n=function(n){var a=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(a,"a",a),a},o.o=function(n,o){return Object.prototype.hasOwnProperty.call(n,o)},o.p="",o(o.s=9)}([function(n,o){$(document).ready(function(){function n(){if($(window).width()>480){var n=$(".main-hero").outerHeight();$(window).scrollTop()>100?$(".index-navbar").addClass("first-scroll-navbar"):$(window).scrollTop()<50&&$(".index-navbar").removeClass("first-scroll-navbar"),$(window).scrollTop()>n-125?$(".index-navbar").addClass("second-scroll-navbar"):$(window).scrollTop()<n&&$(".index-navbar").removeClass("second-scroll-navbar")}}function o(){$(window).width()<480?($(".index-navbar").removeClass("navbar-fixed-top"),$(".index-navbar").addClass("navbar-default"),$(".index-navbar").addClass("mobile-navbar")):($(".index-navbar").addClass("navbar-fixed-top"),$(".index-navbar").removeClass("navbar-default"),$(".index-navbar").removeClass("mobile-navbar"))}$("a").on("click",function(n){if(""!==this.hash){n.preventDefault();var o=this.hash;$("html, body").animate({scrollTop:$(o).offset().top},800,function(){})}}),$(window).scroll(function(){n()}),$(window).resize(function(){n()}),n(),$(window).resize(function(){o()}),o()})},function(n,o){},function(n,o){},function(n,o){},function(n,o){},function(n,o){},function(n,o){},function(n,o){},function(n,o){},function(n,o,a){a(0),a(7),a(8),a(1),a(2),a(3),a(4),a(5),n.exports=a(6)}]);