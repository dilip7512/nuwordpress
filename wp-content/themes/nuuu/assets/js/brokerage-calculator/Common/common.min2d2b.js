$(document).ready(function(){$(".selectpicker").selectpicker(),$('input[name="StartDate"]').daterangepicker({dateFormat:"dd-mmm-yy",showDropdowns:!0,singleDatePicker:!0,minYear:parseInt(moment().subtract(10,"years").format("YYYY"),10),startDate:moment().subtract(30,"days"),maxYear:parseInt(moment().format("YYYY"),10),endDate:moment(),maxDate:moment()}),$('input[name="EndDate"]').daterangepicker({dateFormat:"dd-mmm-yy",showDropdowns:!0,singleDatePicker:!0,minYear:parseInt(moment().subtract(10,"years").format("YYYY"),10),startDate:moment().subtract(30,"days"),maxYear:parseInt(moment().format("YYYY"),10),endDate:moment(),maxDate:moment()}),jQuery.ui.autocomplete.prototype._resizeMenu=function(){this.menu.element.outerWidth(this.element.outerWidth())},$(".eql").matchHeight(),$(".mCustomScrollbar").mCustomScrollbar(),$("input").focus(function(){$(this).parents(".form-group").addClass("focused")}),$("input").blur(function(){""==$(this).val()?($(this).removeClass("filled"),$(this).parents(".form-group").removeClass("focused")):$(this).addClass("filled")}),$(".btn-group.btn-group-switch > .btn").click(function(){$(this).addClass("active").siblings().removeClass("active")}),$(".counter").counter({}),function(){$(".panel").on("show.bs.collapse hide.bs.collapse",function(e){"show"==e.type?$(this).addClass("active"):$(this).removeClass("active")})}.call(this),$(".nav-tabs.nav-flex > li").click(function(){var e=$(this).index(),t=0;for(j=e;j>=1;j--){var n=$(".nav-flex > li:nth-child("+j+")").outerWidth();null!=n&&(t+=n)}$(".nav-flex").animate({scrollLeft:t})}),$(window).on("load scroll",function(){$(this).scrollTop()>100?$("#scroll-down").fadeIn():$("#scroll-down").fadeOut()}),$("#scroll-down").on("click",function(){$("body,html").animate({scrollTop:0},1e3)})}),$(document).ready(function(){var e=$(".footer").outerHeight();$("body").css("margin-bottom",e)}),$(document).ready(function(){$(".nav-btn").click(function(){return $("body").addClass("menu-push-toleft"),$(".navigation-wrap").addClass("menu-open"),!1}),$(".close-menu-btn").click(function(){return $("body").removeClass("menu-push-toleft"),$(".navigation-wrap").removeClass("menu-open"),!1}),$(".side-nav-wrap .navigation .nav .dropdown > a").attr("href","#"),$(".side-nav-wrap .navigation .nav .dropdown > a").click(function(){return $(this).toggleClass("open"),$(this).parent(".dropdown").find(".dropdown-menu").toggleClass("open"),$(this).parent(".dropdown").find(".dropdown-menu").slideToggle(),!1}),$(".side-nav-wrap .navigation .main-nav").clone().appendTo(".desk-nav-wrap"),$(".side-nav-wrap .navigation").mCustomScrollbar({}),$(window).width()>767&&$(".left-section .side-nav-wrap").mCustomScrollbar({scrollButtons:{enable:!0}}),$(" .suggest-video-list ").mCustomScrollbar({scrollButtons:{enable:!0}}),$(".select-input-file").fileinput({dropZoneEnabled:!1,showPreview:!1}),$(".select-input-file").on("change",function(e){$(this).parents(".upload-file").addClass("selected-file")}),$(".select-input-file").on("fileclear",function(e){$(this).parents(".upload-file").removeClass("selected-file")}),$(window).scroll(function(){5<$(document).scrollTop()?$(".header").addClass("header-fixed"):$(".header").removeClass("header-fixed")}),$(window).width()<767&&$(".footer_links h4").click(function(){$(this).parent().toggleClass("minus"),$(this).parent(".footer_links").find("ul").slideToggle()}),$('.nav li a[href^="#"]').on("click",function(e){var t=$(this.getAttribute("href"));t.length&&"call-us"==$(t).attr("id")&&(e.preventDefault(),$("html, body").stop().animate({scrollTop:t.offset().top-85},1e3))})});