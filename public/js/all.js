!function(e){function t(a){if(n[a])return n[a].exports;var i=n[a]={i:a,l:!1,exports:{}};return e[a].call(i.exports,i,i.exports,t),i.l=!0,i.exports}var n={};t.m=e,t.c=n,t.i=function(e){return e},t.d=function(e,n,a){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:a})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=10)}([function(e,t){$(document).ready(function(){function e(){if($(window).width()>480){var e=$(".main-hero").outerHeight();$(window).scrollTop()>100?$(".index-navbar").addClass("first-scroll-navbar"):$(window).scrollTop()<50&&$(".index-navbar").removeClass("first-scroll-navbar"),$(window).scrollTop()>e-125?$(".index-navbar").addClass("second-scroll-navbar"):$(window).scrollTop()<e&&$(".index-navbar").removeClass("second-scroll-navbar")}}function t(){$(window).width()<480?($(".index-navbar").removeClass("navbar-fixed-top"),$(".index-navbar").addClass("navbar-default"),$(".index-navbar").addClass("mobile-navbar")):($(".index-navbar").addClass("navbar-fixed-top"),$(".index-navbar").removeClass("navbar-default"),$(".index-navbar").removeClass("mobile-navbar"))}$("a").on("click",function(e){if(""!==this.hash){e.preventDefault();var t=this.hash;$("html, body").animate({scrollTop:$(t).offset().top},800,function(){})}}),$(window).scroll(function(){e()}),$(window).resize(function(){e()}),e(),$(window).resize(function(){t()}),t(),$(".create-new-item").css("height",$(".board-task-item").outerHeight());var n=!1;$(".create-new-item-action-btn").click(function(){0===$(".create-new-item-input-field").val().length&&(n?($(this).removeClass("close-it"),$(".create-new-item-input-field").removeClass("open-input"),$(".create-new-item-input-field").blur(),$(".create-new-item-cancel").css("opacity",0),n=!1):($(this).addClass("close-it"),$(".create-new-item-input-field").addClass("open-input"),$(".create-new-item-input-field").focus(),$(".create-new-item-cancel").css("opacity",1),n=!0))}),$(".create-new-item-input-field").on("input",function(){$(this).val().length>0?($(".create-new-item-action-btn").removeClass("close-it"),$(".create-new-item-action-btn").addClass("submit-it"),$(".create-new-item-action-btn").attr("type","submit"),$(".create-new-item-cancel").css("opacity",0),$(".create-new-item-create").css("opacity",1)):($(".create-new-item-action-btn").addClass("close-it"),$(".create-new-item-action-btn").removeClass("submit-it"),$(".create-new-item-action-btn").attr("type","button"),$(".create-new-item-cancel").css("opacity",1),$(".create-new-item-create").css("opacity",0))}),$(".create-new-board-title-field").keydown(function(e){if(13===e.keyCode&&0===$(".create-new-board-title-field").val().length)return e.preventDefault(),!1})})},function(e,t){},function(e,t){},function(e,t){},function(e,t){},function(e,t){},function(e,t){},function(e,t){},function(e,t){},function(e,t){},function(e,t,n){n(0),n(8),n(9),n(1),n(2),n(3),n(4),n(5),n(6),e.exports=n(7)}]);