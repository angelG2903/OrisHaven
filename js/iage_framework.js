
var popup_hidden = false;
var animation = true;
var menu_trigger_icon = "<h4>&bull;&bull;&bull;</h4>";

function show_loader() {
	$("#loader").css("display", "block");
}

function hide_loader() {
	$("#loader").css("display", "none");
}

function show_menu() {
	$("#menu").animate({width: '75%'});
}

function hide_menu() {
	$("#menu").animate({width: '0%'});
}

function show_popup(title, text) {
	$("#popup").css("padding-top", "0%");

	$("#popup_header").addClass("popup_sub_content");
	$("#popup_header").removeClass("popup_alert");

	$("#title_popup").html(title);
	$("#message_popup").html(text);
	$('#popup').modal('show');
}

function hide_popup() {
	$('#popup').modal('hide');
}

function show_alert(title, text) {
	$("#popup_alert").css("padding-top", "50%");

	$("#alert_header").removeClass("popup_sub_content");
	$("#alert_header").addClass("popup_alert");

	$("#title_alert").html(title);
	$("#message_alert").html(text);
	$('#popup_alert').modal('show');
}

function hide_alert() {
	$('#popup_alert').modal('hide');
}


function render_element(element, type) {
	switch (type) {
		case 'in':
			if (animation)
				$(element).fadeIn('fast');
			else
				$(element).css('display', 'block');
		break;
		case 'out':
			if (animation)
				$(element).fadeOut('fast');
			else
				$(element).css('display', 'none');
	}
}

function set_frame(show_quick_bar, show_app_bar, show_menu_bar, menu_bar_position) {
	switch(show_quick_bar) {
		case 'quick_bar':
			//$("#footer").fadeIn('fast');
			render_element("#footer", "in");
			$("#content").css("padding-bottom","50px");
		break;
		case 'no_quick_bar':
			//$("#footer").fadeOut('fast');
			render_element("#footer", "out");
			$("#content").css("padding-bottom", "0px");
		break;
	}

	switch(show_app_bar) {
		case 'app_bar':
			//$("#header").fadeIn('fast');
			render_element("#header", "in");
			$("#content").css("padding-top","50px");
		break;
		case 'no_app_bar':
			//$("#header").fadeOut('fast');
			render_element("#header", "out");
			$("#content").css("padding-top", "0px");
		break;
	}

	switch(menu_bar_position) {
		case 'custom':
			//content of html is not altered
		break;
		case 'menu_right':
			$("#menu_content").html('<div class="col-10"><img id="logo" src="img/logo.jpg"/></div>');
			$("#menu_content").append('<div class="col-2 text-center" onclick="show_menu()" id="menu_trigger">'+menu_trigger_icon+'</div>');
			$("#close_btn_container").removeClass("text-left");
			$("#close_btn_container").addClass("text-right");
			$("#menu").css("right", "0px");
		break;
		case 'menu_left':
			$("#menu_content").html('<div class="col-1 text-center" onclick="show_menu()" id="menu_trigger">'+menu_trigger_icon+'</div>');
			$("#menu_content").append('<div class="col-11 text-right"><img id="logo" src="img/logo.jpg"/></div>');
			$("#close_btn_container").removeClass("text-right");
			$("#close_btn_container").addClass("text-left");
			$("#menu").css("left", "0px");
		break;
	}

	switch(show_menu_bar) {
		case 'menu_bar':
			//$("#menu_trigger").fadeIn('fast');
			render_element("#menu_trigger", "in");
		break;
		case 'no_menu_bar':
			//$("#menu_trigger").fadeOut('fast');
			render_element("#menu_trigger", "out");
		break;
	}
}

function render_menu(current_menu) {
	$(".main_menu").each(function(){
		id_menu = this.id;
		if (id_menu == current_menu) {
			$("#"+id_menu).html('<img id="'+id_menu+'" src="img/menu/'+id_menu+'_over.png" class="img_menu size_menu_icon"/>');
		} else {
			$("#"+id_menu).html('<img id="'+id_menu+'" src="img/menu/'+id_menu+'.png" class="img_menu size_menu_icon"/>');
		}
	});
}

function render_quick_bar(current_menu) {
	$(".opt_menu").each(function(){
		id_menu = this.id;
		if (id_menu == current_menu) {
			$("#"+id_menu).html('<img id="'+id_menu+'" src="img/menu/'+id_menu+'_over.png" class="img_menu size_menu_icon"/>');
		} else {
			$("#"+id_menu).html('<img id="'+id_menu+'" src="img/menu/'+id_menu+'.png" class="img_menu size_menu_icon"/>');
		}
	});
}

var on_end_scroll = function() {
}

var on_begin_scroll = function() {
}

$(window).on("touchmove", function() {
	if (($(this).scrollTop() + $(this).innerHeight())  >=  $("#content").innerHeight()) {
		on_end_scroll();
	}
	if ($(this).scrollTop() == 0) {
		on_begin_scroll();
	}
});

$(document).ready(function() {

    iage_content = `

		<div id="loader" class="text-center">
			<!--<img id="loader_gif" src="img/loader.gif"/>-->
			<h1>
			<i id="loader_gif" class="fa fa-circle-o-notch fa-spin fa-fw"></i>
			</h1>
		</div>

		<div id="popup" class="modal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header" id="popup_header">
						<h5 class="modal-title" id="title_popup"></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" id="message_popup">
					</div>
				</div>
			</div>
		</div>

		<div id="popup_alert" class="modal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header" id="alert_header">
						<h5 class="modal-title" id="title_alert"></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" id="message_alert">
					</div>
				</div>
			</div>
		</div>
    `;

    $("body").append(iage_content);
});
