$(document).ready(function () {

	var inputs = document.querySelectorAll('.inputfile');
	Array.prototype.forEach.call(inputs, function (input) {
		var label = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener('change', function (e) {
			var fileName = '';
			if (this.files && this.files.length > 1)
				fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
			else
				fileName = e.target.value.split('\\').pop();

			if (fileName)
				label.querySelector('span').innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});
	});



	$('.times').timepicker({
		uiLibrary: 'bootstrap4'
	});
	// select-all Checkbox
	// select-all_hoadon
	$('.select-all_hoadon').click(function (event) {
		if (this.checked) {
			$(this).parent().parent().parent().find('input').attr('checked', true);
		} else {
			$(this).parent().parent().parent().find('input').attr('checked', false);
		}
	});
	// select-all_hoadon
	$('.select-all_hethong').click(function (event) {
		if (this.checked) {
			$(this).parent().parent().parent().find('input').attr('checked', true);
		} else {
			$(this).parent().parent().parent().find('input').attr('checked', false);
		}
	});
	$('.checkbox2').click(function (event) {
		if (this.checked) {
			$(this).parent().parent().find('input').attr('checked', true);
		} else {
			$(this).parent().parent().find('input').attr('checked', false);
		}
	});
	// select-all_phathanh
	$('.select-all_phathanh').click(function (event) {
		if (this.checked) {
			$(this).parent().parent().parent().find('input').attr('checked', true);
		} else {
			$(this).parent().parent().parent().find('input').attr('checked', false);
		}
	});
	$('.checkbox2').click(function (event) {
		if (this.checked) {
			$(this).parent().parent().find('input').attr('checked', true);
		} else {
			$(this).parent().parent().find('input').attr('checked', false);
		}
	});

	// select-all_banlamviec
	$('.select-all_banlamviec').click(function (event) {
		if (this.checked) {
			$(this).parent().parent().parent().find('input').attr('checked', true);
		} else {
			$(this).parent().parent().parent().find('input').attr('checked', false);
		}
	});

	// select-all_baocao
	$('.select-all_baocao').click(function (event) {
		if (this.checked) {
			$(this).parent().parent().parent().find('input').attr('checked', true);
		} else {
			$(this).parent().parent().parent().find('input').attr('checked', false);
		}
	});
	$('.checkbox2').click(function (event) {
		if (this.checked) {
			$(this).parent().parent().find('input').attr('checked', true);
		} else {
			$(this).parent().parent().find('input').attr('checked', false);
		}
	});

	// select-all_dauvao
	$('.select-all_dauvao').click(function (event) {
		if (this.checked) {
			$(this).parent().parent().parent().find('input').attr('checked', true);
		} else {
			$(this).parent().parent().parent().find('input').attr('checked', false);
		}
	});

	$("#select-me").on('change', function () {

		if ($(this).val() == 1) {
			$("#myModal_first").modal('show');
		} else if ($(this).val() == 2) {
			$("#myModal_second").modal('show');
		}
	});

	// End select-all Checkbox
});
$(document).ready(function () {
	$('.js-example-basic-single').select2();
});
// $(function() {
//   $('input.datetimes').daterangepicker({
// 	timePicker: true,
// 	startDate: moment().startOf('hour'),
// 	endDate: moment().startOf('hour').add(32, 'hour'),
// 	autoUpdateInput: false,
// 	locale: {
// 	  format: 'DD/MM/YYYY'
// 	}
//   });
// });

$(function () {

	$('input.datetimes').daterangepicker({
		autoUpdateInput: false,
		locale: {
			format: 'DD/MM/YYYY'
		}
	});

	$('input.datetimes').on('apply.daterangepicker', function (ev, picker) {
		$(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
	});

	$('input.datetimes').on('cancel.daterangepicker', function (ev, picker) {
		$(this).val('');
	});

});

$(document).ready(function () {
	$("#btn-add").click(function () {
		$(".form-add-new").append("<div class='form-group form-add'><label class='col-sm-1 col-form-label'><div class='checkbox'><input class='inp-cbx' id='cbx17' type='checkbox' style='display: none;' checked=''><label class='cbx' for='cbx17'><span><svg width='12px' height='10px' viewBox='0 0 12 10'><polyline points='1.5 6 4.5 9 10.5 1'></polyline></svg></span></label></div></label><input type='text' class='form-control' id='text' value='' placeholder='Nhập tên thiết bị'><textarea class='form-control' rows='3'></textarea><button type='button' class='btn btn-outline-danger btn-sm' id='close-form'><i class='bx bx-trash'></i> Xóa thiết bị</button></div>");
	});

	$(".cc-mail").hide();
	$(".cc-mails").hide();
	$("#cc-mail").click(function () {
		$(".cc-mail").slideToggle();
	});
	$("#cc-mails").click(function () {
		$(".cc-mails").slideToggle();
	});
});

$(document).ready(function () {
	$("#close-form").click(function () {
		$(".form-add").hide();
	});
	$(".box-filter").hide();
	$(".icon-filter").click(function () {
		$(".box-filter").slideToggle();

	});
	$(".close-box-filter").click(function () {
		$(".box-filter").hide();

	});
	$(".close-box-filter").click(function () {
		$(".box-filter").hide();

	});

	$("#box-filter-other").hide();
	$("#icon-filter-other").click(function () {
		$("#box-filter-other").slideToggle();

	});
	$(".close-box-filter").click(function () {
		$("#box-filter-other").hide();

	});
	$(".close-box-filter").click(function () {
		$("#box-filter-other").hide();

	});


	$("#add-contact-minus").hide();
	$("#add-contact .minus").click(function () {
		$("#add-contact-minus").slideToggle();

	});
	$("#add-contact-minus").click(function () {
		$("#add-contact-minus").hide();

	});

	// $(".list-drop").hide();
	// $(".link-drop").click(function(){
	//   	$(".list-drop").slideToggle();

	// });

	// $(".list-drop1").hide();
	// $(".link-drop1").click(function(){
	//   	$(".list-drop1").slideToggle();

	// });



});

(function ($) {
	"use strict";
	jQuery(document).on('ready', function () {

		// Header Sticky
		// $(window).on('scroll',function() {
		//           if ($(this).scrollTop() > 30){  
		//               $('.top-navbar').addClass("is-sticky");
		//           }
		//           else{
		//               $('.top-navbar').removeClass("is-sticky");
		//           }
		//       });

		// Burger Menu JS
		$('.burger-menu').on('click', function () {
			$(this).toggleClass('active');
			$('.main-content').toggleClass('hide-sidemenu-area');
			$('.sidemenu-area').toggleClass('toggle-sidemenu-area');
			$('.top-navbar').toggleClass('toggle-navbar-area');
		});
		$('.responsive-burger-menu').on('click', function () {
			$('.responsive-burger-menu').toggleClass('active');
			$('.sidemenu-area').toggleClass('active-sidemenu-area');
		});

		// Tooltip JS
		$(function () {
			$('[data-toggle="tooltip"]').tooltip();
		});

		// Popovers JS
		$(function () {
			$('[data-toggle="popover"]').popover()
		});

		// Metis Menu JS
		$(function () {
			$('#sidemenu-nav').metisMenu();
		});

		// Webpage FullScreen JS
		$("#fullscreen-button").on("click", function toggleFullScreen() {
			if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
				if (document.documentElement.requestFullScreen) {
					document.documentElement.requestFullScreen();
				} else if (document.documentElement.mozRequestFullScreen) {
					document.documentElement.mozRequestFullScreen();
				} else if (document.documentElement.webkitRequestFullScreen) {
					document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
				} else if (document.documentElement.msRequestFullscreen) {
					document.documentElement.msRequestFullscreen();
				}
			} else {
				if (document.cancelFullScreen) {
					document.cancelFullScreen();
				} else if (document.mozCancelFullScreen) {
					document.mozCancelFullScreen();
				} else if (document.webkitCancelFullScreen) {
					document.webkitCancelFullScreen();
				} else if (document.msExitFullscreen) {
					document.msExitFullscreen();
				}
			}
		});
		$('.bx-fullscreen-btn').on('click', function () {
			$(this).toggleClass('active');
		});

		// Summernote JS
		$('.summernote').summernote({
			height: 230, // Set editor height
			minHeight: null, // Set minimum height of editor
			maxHeight: null, // Set maximum height of editor
			focus: false // Set focus to editable area after initializing summernote
		});

		// Progress Bar
		if ($('.progress-line').length) {
			$('.progress-line').appear(function () {
				var el = $(this);
				var percent = el.data('width');
				$(el).css('width', percent + '%');
			}, {
				accY: 0
			});
		}
		if ($('.count-box').length) {
			$('.count-box').appear(function () {
				var $t = $(this),
					n = $t.find(".count-text").attr("data-stop"),
					r = parseInt($t.find(".count-text").attr("data-speed"), 10);

				if (!$t.hasClass("counted")) {
					$t.addClass("counted");
					$({
						countNum: $t.find(".count-text").text()
					}).animate({
						countNum: n
					}, {
						duration: r,
						easing: "linear",
						step: function () {
							$t.find(".count-text").text(Math.floor(this.countNum));
						},
						complete: function () {
							$t.find(".count-text").text(this.countNum);
						}
					});
				}

			}, {
				accY: 0
			});
		}

		// FAQ Accordion
		$(function () {
			$('.accordion').find('.accordion-title').on('click', function () {
				// Adds Active Class
				$(this).toggleClass('active');
				// Expand or Collapse This Panel
				$(this).next().slideToggle('fast');
				// Hide The Other Panels
				$('.accordion-content').not($(this).next()).slideUp('fast');
				// Removes Active Class From Other Titles
				$('.accordion-title').not($(this)).removeClass('active');
			});
		});

		// initialize clipboard plugin
		if ($('.btn-clipboard').length) {
			var clipboard = new ClipboardJS('.btn-clipboard');

			// Enabling tooltip to all clipboard buttons
			$('.btn-clipboard').attr('data-toggle', 'tooltip').attr('title', 'Copy to clipboard');

			// initializing bootstrap tooltip
			$('[data-toggle="tooltip"]').tooltip();

			// initially hide btn-clipboard and show after copy
			clipboard.on('success', function (e) {
				e.trigger.classList.value = 'btn btn-clipboard btn-current'
				$('.btn-current').tooltip('hide');
				e.trigger.dataset.originalTitle = 'Copied';
				$('.btn-current').tooltip('show');
				setTimeout(function () {
					$('.btn-current').tooltip('hide');
					e.trigger.dataset.originalTitle = 'Copy to clipboard';
					e.trigger.classList.value = 'btn btn-clipboard'
				}, 1000);
				e.clearSelection();
			});
		}

		// Count Time 
		function makeTimer() {
			var endTime = new Date("August 19, 2020 17:00:00 PDT");
			var endTime = (Date.parse(endTime)) / 1000;
			var now = new Date();
			var now = (Date.parse(now) / 1000);
			var timeLeft = endTime - now;
			var days = Math.floor(timeLeft / 86400);
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
			if (hours < "10") {
				hours = "0" + hours;
			}
			if (minutes < "10") {
				minutes = "0" + minutes;
			}
			if (seconds < "10") {
				seconds = "0" + seconds;
			}
			$("#days").html(days + "<span>Days</span>");
			$("#hours").html(hours + "<span>Hours</span>");
			$("#minutes").html(minutes + "<span>Minutes</span>");
			$("#seconds").html(seconds + "<span>Seconds</span>");
		}
		setInterval(function () {
			makeTimer();
		}, 0);

		// Gallery Viewer JS
		var console = window.console || {
			log: function () {}
		};
		var $images = $('.gallery-area');
		var $toggles = $('.gallery-toggles');
		var $buttons = $('.gallery-buttons');
		var options = {
			// inline: true,
			url: 'data-original',
			ready: function (e) {
				console.log(e.type);
			},
			show: function (e) {
				console.log(e.type);
			},
			shown: function (e) {
				console.log(e.type);
			},
			hide: function (e) {
				console.log(e.type);
			},
			hidden: function (e) {
				console.log(e.type);
			},
			view: function (e) {
				console.log(e.type);
			},
			viewed: function (e) {
				console.log(e.type);
			}
		};

		function toggleButtons(mode) {
			if (/modal|inline|none/.test(mode)) {
				$buttons
					.find('button[data-enable]')
					.prop('disabled', true)
					.filter('[data-enable*="' + mode + '"]')
					.prop('disabled', false);
			}
		}
		$images.on({
			ready: function (e) {
				console.log(e.type);
			},
			show: function (e) {
				console.log(e.type);
			},
			shown: function (e) {
				console.log(e.type);
			},
			hide: function (e) {
				console.log(e.type);
			},
			hidden: function (e) {
				console.log(e.type);
			},
			view: function (e) {
				console.log(e.type);
			},
			viewed: function (e) {
				console.log(e.type);
			}
		}).viewer(options);
		toggleButtons(options.inline ? 'inline' : 'modal');
		$toggles.on('change', 'input', function () {
			var $input = $(this);
			var name = $input.attr('name');
			options[name] = name === 'inline' ? $input.data('value') : $input.prop('checked');
			$images.viewer('destroy').viewer(options);
			toggleButtons(options.inline ? 'inline' : 'modal');
		});
		$buttons.on('click', 'button', function () {
			var data = $(this).data();
			var args = data.arguments || [];
			if (data.method) {
				if (data.target) {
					$images.viewer(data.method, $(data.target).val());
				} else {
					$images.viewer(data.method, args[0], args[1]);
				}
				switch (data.method) {
					case 'scaleX':
					case 'scaleY':
						args[0] = -args[0];
						break;
					case 'destroy':
						toggleButtons('none');
						break;
				}
			}
		});

		// Feather Icon Js
		feather.replace();

		// Tabs
		(function ($) {
			$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
			$('.tab ul.tabs li a').on('click', function (g) {
				var tab = $(this).closest('.tab'),
					index = $(this).closest('li').index();
				tab.find('ul.tabs > li').removeClass('current');
				$(this).closest('li').addClass('current');
				tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
				tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
				g.preventDefault();
			});
		})(jQuery);

		// App Email All JS
		$('.email-list-actions .favorite').on('click', function () {
			$(this).toggleClass('active');
		});
		$('.email-list-header .checkbox .cbx').on('click', function () {
			$('.email-list-actions .checkbox .cbx').toggleClass('active');
		});

		// App Todo All JS
		$('.todo-list-header .checkbox .cbx').on('click', function () {
			$('.todo-list-item .checkbox .cbx').toggleClass('active');
		});

		// App Read Email All JS
		$('.email-read-list-detail .email-information .favorite').on('click', function () {
			$(this).toggleClass('active');
		});

		// App Chat All JS
		$('.chat-list-header .header-right .favorite').on('click', function () {
			$(this).toggleClass('active');
		});

		// World Map JS


	});
}(jQuery));

$(document).ready(function () {

	function toggleRowChildren(parentRowElement, parentClass) {
		var childClass = parentRowElement.attr('id');
		$('tr.' + childClass, parentRowElement.parent()).toggle();
		$('tr.' + childClass).each(function () {
			if ($(this).hasClass(parentClass) && !$(this).hasClass('collapsed')) {
				toggleRowChildren($(this), parentClass);
			}
		});
		parentRowElement.toggleClass('collapsed');
	}

	$('.table-row').on('dblclick', function (e) {
		var add_Popup = $('#add_KhachHang').html();
		e.preventDefault();
		jQuery.noConflict();
		$('#add_KhachHang').modal({
			backdrop: 'static',
			keyboard: 'false',
			show: 'false'
		});

		$(document).on('dblclick', '.table-row', function () {
			$('body').val(add_Popup);
			$('.modal-content').css('margin-top', '15vh');
		});
	});

	// $("#checkslide").click(function(){
	//   	$("#boxshow1").slideToggle();
	// });
	document.querySelector("html").classList.add('js');
});

function clickFile(e) {
	var prElm = e.closest('.open-input');
	var fileInput = prElm.querySelector(".input-file"),
		button = prElm.querySelector(".input-file-trigger"),
		the_return = prElm.querySelector(".file-return");
	console.log(fileInput);
	console.log(button);
	console.log(the_return);
	if (fileInput != null && button != null && the_return != null) {
		button.addEventListener("keydown", function (event) {
			if (event.keyCode == 13 || event.keyCode == 32) {
				fileInput.focus();
			}
		});
		button.addEventListener("click", function (event) {
			fileInput.focus();
			return false;
		});
		fileInput.addEventListener("change", function (event) {
			the_return.innerHTML = this.value.replace(/^.*[\\\/]/, '');
		});
	}
}


let msnry = new Masonry('.bd-list', {
	columnWidth: 260,
	itemSelector: '.bd-detail',
	fitWidth: true,
	gutter: 25
});


$(document).ready(function () {
	$('.js-example-basic-multiple').select2();

});
$(document).ready(function () {
	$('.btn-view').click(function (e) {
		$(".card-body").addClass("show-table");
		$(".pagination-bottom").addClass("show-table");
	});

	$('#cbxShowHide').click(function () {
		this.checked ? $('#boxaction').show(1000) : $('#boxaction').hide(1000);
	});
	$('#single').select2();

	$('.toggle-speaker').click(function() {
		$(this).toggleClass('mute');
	})



	$(".add-contact-form").hide();
	$(".lct-button").hide();
	$(".add-contact-form form .btn").click(function(){
	  	$(".add-contact-form").hide();
	  	$(".list-contact-detail").show();
	});
	$(".icon-close").click(function(){
	  	$(".add-contact-form").hide();
	  	$(".list-contact-detail").show();
	});
	$(".edit-show").click(function(){
	  	$(".add-contact-form").show();
	  	$(".list-contact-detail").hide();
	});
	$(".edit-del").click(function(){
	  	$(".lct-button").show();
	});
	$(".lct-button").click(function(){
	  	$(".list-contact-detail").hide();
	});
});

function onChangeSelect() {
	$('#modal-demo').modal('show');
}

