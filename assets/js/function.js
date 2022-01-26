//トグルメニュー//

$(function () {
	$("#mdmenu01").click(function () {
		$(this).toggleClass("active"); //メニューボタンの切り替え

		/*-- メニューの開閉 --*/
		if ($(this).hasClass("active")) {
			$(".md_header_nav02").toggleClass("md_header_nav02_active");
		} else {
			$(".md_header_nav02").removeClass("md_header_nav02_active");
		}
		return false;
	});
});

$(function () {
	$("#mdmenu02").click(function () {
		$(this).toggleClass("active"); //メニューボタンの切り替え

		/*-- メニューの開閉 --*/
		if ($(this).hasClass("active")) {
			$(".md_header_nav").toggleClass("md_header_nav_active");
		} else {
			$(".md_header_nav").removeClass("md_header_nav_active");
		}
		return false;
	});
});

$(function () {

	$("#onChange1").change(function () {

		$("#change-price1").text($(this).val());

	});
});
$(function () {

	$("#onChange2").change(function () {

		$("#change-price2").text($(this).val());

	});
});
