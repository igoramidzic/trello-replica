!function(e){function n(i){if(t[i])return t[i].exports;var a=t[i]={i:i,l:!1,exports:{}};return e[i].call(a.exports,a,a.exports,n),a.l=!0,a.exports}var t={};n.m=e,n.c=t,n.i=function(e){return e},n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:i})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},n.p="",n(n.s=12)}([function(e,n){$(document).ready(function(){function e(){if($(window).width()>480){var e=$(".main-hero").outerHeight();$(window).scrollTop()>100?$(".index-navbar").addClass("first-scroll-navbar"):$(window).scrollTop()<50&&$(".index-navbar").removeClass("first-scroll-navbar"),$(window).scrollTop()>e-125?$(".index-navbar").addClass("second-scroll-navbar"):$(window).scrollTop()<e&&$(".index-navbar").removeClass("second-scroll-navbar")}}function n(){$(window).width()<480?($(".index-navbar").removeClass("navbar-fixed-top"),$(".index-navbar").addClass("navbar-default"),$(".index-navbar").addClass("mobile-navbar")):($(".index-navbar").addClass("navbar-fixed-top"),$(".index-navbar").removeClass("navbar-default"),$(".index-navbar").removeClass("mobile-navbar"))}$("a").on("click",function(e){if(""!==this.hash){e.preventDefault();var n=this.hash;$("html, body").animate({scrollTop:$(n).offset().top},800,function(){})}}),$(window).scroll(function(){e()}),$(window).resize(function(){e()}),e(),$(window).resize(function(){n()}),n(),$(".create-new-item").css("height",$(".board-task-item").outerHeight());var t=!1;$(".create-new-item-action-btn").click(function(){0===$(".create-new-item-input-field").val().length&&(t?($(this).removeClass("close-it"),$(".create-new-item-input-field").removeClass("open-input"),$(".create-new-item-input-field").blur(),$(".create-new-item-cancel").css("opacity",0),t=!1):($(this).addClass("close-it"),$(".create-new-item-input-field").addClass("open-input"),$(".create-new-item-input-field").focus(),$(".create-new-item-cancel").css("opacity",1),t=!0))}),$(".create-new-item-input-field").on("input",function(){$(this).val().length>0?($(".create-new-item-action-btn").removeClass("close-it"),$(".create-new-item-action-btn").addClass("submit-it"),$(".create-new-item-action-btn").attr("type","submit"),$(".create-new-item-cancel").css("opacity",0),$(".create-new-item-create").css("opacity",1)):($(".create-new-item-action-btn").addClass("close-it"),$(".create-new-item-action-btn").removeClass("submit-it"),$(".create-new-item-action-btn").attr("type","button"),$(".create-new-item-cancel").css("opacity",1),$(".create-new-item-create").css("opacity",0))}),$(".create-new-board-title-field").keydown(function(e){if(13===e.keyCode&&0===$(".create-new-board-title-field").val().length)return e.preventDefault(),!1}),$(".task-delete-btn").click(function(){$(".delete-item-form").css("z-index","-10"),$(this).parent().parent().find(".delete-item-form").css("z-index","10")}),$(".cancel-btn").click(function(){$(this).parent().parent().css("z-index","-10")})})},function(e,n){},function(e,n){},function(e,n){},function(e,n){},function(e,n){},function(e,n){},function(e,n){},function(e,n){},function(e,n){},function(e,n){},function(e,n){},function(e,n,t){t(0),t(10),t(11),t(1),t(2),t(3),t(4),t(5),t(6),t(7),t(8),e.exports=t(9)}]);