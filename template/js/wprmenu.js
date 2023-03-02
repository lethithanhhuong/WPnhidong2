!function (e) {
	"use strict";

	function n(e) {
		return new ("(^|\\s+)" + e + "(\\s+|$)")
	}
	var s, t, p;

	function r(e, n) {
		(s(e, n) ? p : t)(e, n)
	}
	"classList" in document.documentElement ? (s = function (e, n) {
		return e.classList.contains(n)
	}, t = function (e, n) {
		e.classList.add(n)
	}, p = function (e, n) {
		e.classList.remove(n)
	}) : (s = function (e, s) {
		return n(s).test(e.className)
	}, t = function (e, n) {
		s(e, n) || (e.className = e.className + " " + n)
	}, p = function (e, s) {
		e.className = e.className.replace(n(s), " ")
	}), e.classie = {
		hasClass: s,
		addClass: t,
		removeClass: p,
		toggleClass: r,
		has: s,
		add: t,
		remove: p,
		toggle: r
	}
}(window), jQuery(document).ready(function (e) {
	function n() {
		e(".wprmenu_bar").hasClass("bodyslide") && e(".wprmenu_bar").hasClass("left") && (doc_width = e(document).width() * (wprmenu.menu_width / 100), push_width = "" != wprmenu.push_width && wprmenu.push_width < doc_width ? wprmenu.push_width : doc_width, classie.toggle(body, "cbp-spmenu-push-toright"), e("body").hasClass("cbp-spmenu-push-toright") ? e("body").css("left", push_width + "px") : e("body").css("left", "0px")), e(".wprmenu_bar").hasClass("bodyslide") && e(".wprmenu_bar").hasClass("right") && (doc_width = e(document).width() * (wprmenu.menu_width / 100), push_width = "" != wprmenu.push_width && wprmenu.push_width < doc_width ? wprmenu.push_width : doc_width, classie.toggle(body, "cbp-spmenu-push-toleft"), e("body").hasClass("cbp-spmenu-push-toleft") ? e("body").css("left", "-" + push_width + "px") : e("body").css("left", "0px")), classie.toggle(s, "cbp-spmenu-open"), 1 == wprmenu.SubmenuOpened ? menu.find("ul.sub-menu").each(function () {
			var n = e(this),
				s = n.parent("li").find(".wprmenu_icon_par");
			n.parent("li"), n.slideDown(200), s.removeClass(wprmenu.submenu_open_icon).addClass(wprmenu.submenu_close_icon)
		}) : m()
	}
	var s = document.getElementById("mg-wprm-wrap"),
		t = document.getElementById("mg-widgetmenu-wrap");
	document.getElementById("wprMenu");
	body = document.body, e(".wprmenu_bar").hasClass("bodyslide") && e("body").addClass("cbp-spmenu-push"), e("body").addClass("cbp-spmenu-widget-push"), e(".wprmenu_bar .hamburger, .wprmenu_bar .wpr-custom-menu, .wprmenu_bar .menu_title").click(function () {
		e(this).parents(".wprm-wrapper").find("#mg-widgetmenu-wrap").hasClass("cbp-spmenu-widget-open") && e("#wprmenu_bar").find("div.wpr-widget-menu").trigger("click"), classie.toggle(this, "active"), e(this).toggleClass("is-active"), e(this).hasClass("is-active") ? (1 != wprmenu.enable_fullwidth || "left" != wprmenu.menu_open_direction && "right" != wprmenu.menu_open_direction || e("#wprmenu_bar").addClass("hide-menu-bar"), e("html").addClass("wprmenu-body-fixed"), "1" == wprmenu.enable_overlay && e("div.wprm-wrapper").find(".wprm-overlay").addClass("active")) : (1 != wprmenu.enable_fullwidth || "left" != wprmenu.menu_open_direction && "right" != wprmenu.menu_open_direction || e("#wprmenu_bar").removeClass("hide-menu-bar"), e("html").removeClass("wprmenu-body-fixed"), "1" == wprmenu.enable_overlay && e("div.wprm-wrapper").find(".wprm-overlay").removeClass("active")), e("#wprmenu_bar").find(".wpr_widget_menu_open").show(), e("#wprmenu_bar").find(".wpr_widget_menu_close").hide(), n()
	}), e(".wprmenu_bar .wpr-widget-menu").click(function () {
		e(this).parents(".wprm-wrapper").find("#mg-wprm-wrap").hasClass("cbp-spmenu-open") && e("#wprmenu_bar").find("div.hamburger").trigger("click"), classie.toggle(this, "active"), e(this).toggleClass("is-active"), e(this).hasClass("is-active") ? (e("html").addClass("wprmenu-body-fixed"), "1" == wprmenu.enable_overlay && e("div.wprm-wrapper").find(".wprm-overlay").addClass("active"), 1 != wprmenu.enable_fullwidth || "left" != wprmenu.widget_menu_open_direction && "right" != wprmenu.widget_menu_open_direction || e("#wprmenu_bar").addClass("widget-hide-menu-bar")) : (e("html").removeClass("wprmenu-body-fixed"), "1" == wprmenu.enable_overlay && e("div.wprm-wrapper").find(".wprm-overlay").removeClass("active"), 1 != wprmenu.enable_fullwidth || "left" != wprmenu.widget_menu_open_direction && "right" != wprmenu.widget_menu_open_direction || e("#wprmenu_bar").removeClass("widget-hide-menu-bar")), e(".wprmenu_bar").hasClass("bodyslide") && e(".wprmenu_bar").hasClass("widget-menu-left") && (doc_width = e(document).width() * (wprmenu.menu_width / 100), push_width = "" != wprmenu.push_width && wprmenu.push_width < doc_width ? wprmenu.push_width : doc_width, classie.toggle(body, "cbp-spmenu-widget-push-toright"), e("body").hasClass("cbp-spmenu-widget-push-toright") ? e("body").css("left", push_width + "px") : e("body").css("left", "0px")), e(".wprmenu_bar").hasClass("bodyslide") && e(".wprmenu_bar").hasClass("widget-menu-right") && (doc_width = e(document).width() * (wprmenu.menu_width / 100), push_width = "" != wprmenu.push_width && wprmenu.push_width < doc_width ? wprmenu.push_width : doc_width, classie.toggle(body, "cbp-spmenu-widget-push-toleft"), e("body").hasClass("cbp-spmenu-widget-push-toleft") ? e("body").css("left", "-" + push_width + "px") : e("body").css("left", "0px")), classie.toggle(t, "cbp-spmenu-widget-open")
	});
	var p = e("#mg-wprm-wrap.cbp-spmenu-top ul").height() + 800,
		r = e("#mg-wprm-wrap.cbp-spmenu-bottom").height();
	e("#mg-wprm-wrap.cbp-spmenu-top").css("top", -p + "px"), e("#mg-wprm-wrap.cbp-spmenu-bottom").css({
		bottom: -r + "px",
		top: "auto"
	});
	var u = e("#mg-widgetmenu-wrap.cbp-spmenu-widget-top ul").height() + 1e3,
		i = e("#mg-widgetmenu-wrap.cbp-spmenu-widget-bottom").height();

	function m() {
		menu.find("ul.sub-menu").each(function () {
			var n = e(this),
				s = n.parent("li").find(".wprmenu_icon_par"),
				t = n.parent("li");
			n.is(":visible") && n.slideUp(200), s.removeClass(wprmenu.submenu_close_icon).addClass(wprmenu.submenu_open_icon), t.removeClass("wprmenu_no_border_bottom")
		})
	}
	e("#mg-widgetmenu-wrap.cbp-spmenu-widget-top").css("top", -u + "px"), e("#mg-widgetmenu-wrap.cbp-spmenu-widget-bottom").css({
		bottom: -i + "px",
		top: "auto"
	}), e("body").click(function (n) {
		e("#wprmenu_bar").hasClass("active") ? e("#wprmenu_bar .wprmenu_icon").addClass("open") : e("#wprmenu_bar .wprmenu_icon").removeClass("open")
	}), menu = e("#mg-wprm-wrap"), menu_ul = e("#wprmenu_menu_ul"), menu_a = menu_ul.find("a"), e(document).mouseup(function (n) {
		(e(".cbp-spmenu").hasClass("cbp-spmenu-open") || e(n.target).hasClass("wprmenu_bar")) && (!e(n.target).hasClass("wprmenu_bar") && 0 != e(n.target).parents(".wprmenu_bar").length || !e(n.target).hasClass("cbp-spmenu") && 0 != e(n.target).parents(".cbp-spmenu").length || menu.is(":visible") && e(".wprmenu_bar .hamburger, .wprmenu_bar .wpr-custom-menu").trigger("click"))
	}), menu.find("ul.sub-menu").each(function () {
		var n = e(this),
			s = n.prev("a"),
			t = s.parent("li").first();
		s.addClass("wprmenu_parent_item"), t.addClass("wprmenu_parent_item_li");
		s.before('<span class="wprmenu_icon wprmenu_icon_par ' + wprmenu.submenu_open_icon + '"></span> ').find(".wprmenu_icon_par");
		n.hide()
	}), e("#wprmenu_bar .toggle-search").click(function () {
		e(".search-expand").toggle(200)
	}), e(".wprmenu_icon_par").on("click", function () {
		var n = e(this);
		n.parent("li").find("ul.sub-menu").first().slideToggle("200"), n.toggleClass(wprmenu.submenu_open_icon).toggleClass(wprmenu.submenu_close_icon), n.parent("li").first().toggleClass("wprmenu_no_border_bottom")
	}), e("#wprmenu_menu_ul a").click(function () {
		("yes" != wprmenu.parent_click || "yes" == wprmenu.parent_click && !e(this).hasClass("wprmenu_parent_item")) && e(".wprmenu_bar .hamburger, .wprmenu_bar .wpr-custom-menu").trigger("click")
	}), menu.hasClass("cbp-spmenu-top") && e("body").hasClass("cbp-spmenu-push") && (e("body").prepend(menu), e(".wprmenu_bar .hamburger, .wprmenu_bar .wpr-custom-menu").on("click", function (n) {
		e(n.target).hasClass("bar_logo") || (e("html, body").animate({
			scrollTop: 0
		}, 200), m(), menu.stop(!0, !1).slideToggle(200))
	})), "yes" == wprmenu.parent_click && e("a.wprmenu_parent_item").on("click", function (n) {
		n.preventDefault(), e(this).prev(".wprmenu_icon_par").trigger("click")
	}), e("body").on("click", "div.menu_title", function () {
		e(this).prev(".hamburger").toggleClass("is-active"), classie.toggle(this, "active")
	}), e("body").on("click", ".wpr-widget-menu .wpr_widget_menu_open", function () {
		e(this).hide(), e(this).parent(".wpr-widget-menu").find(".wpr_widget_menu_close").show()
	}), e("body").on("click", ".wpr-widget-menu .wpr_widget_menu_close", function () {
		e(this).hide(), e(this).parent(".wpr-widget-menu").find(".wpr_widget_menu_open").show()
	})
});
var wprmenu = {
	zooming: "yes",
	from_width: "768",
	parent_click: "yes",
	push_width: "400",
	menu_width: "100",
	submenu_open_icon: "wpr-fa-angle-right",
	submenu_close_icon: "wpr-fa-angle-down",
	SubmenuOpened: "0",
	enable_overlay: "1",
	menu_open_direction: "left",
	enable_fullwidth: "",
	widget_menu_open_direction: "left"
};



!function () {
	var c = document.querySelector(".wprm_search");
	document.querySelector("#wprm_search_icon").onclick = function () {
		c.classList.toggle("s_active")
	}, window.addEventListener("click", function (e) {
		c.contains(e.target) || c.classList.remove("s_active")
	})
}();