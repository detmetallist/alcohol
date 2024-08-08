$(document).ready(function(){
	$("input[name='phone']").inputmask("+7(999)999-99-99");
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('.vverh').fadeIn(300);
		} 
		else {
		 	$('.vverh').fadeOut(300);
		}
	});
	$('.vverh').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});
	$(document).scroll(function(){
		if($('html,body').scrollTop()>75){
			if($(document).width()>620){
				$('.mobile_header_phone a').fadeIn(200);
			}
		} else {
			$('.mobile_header_phone a').fadeOut(200);
		}
	});
	$(window).resize(function(){
		if($(document).width()<620){
			$('.mobile_header_phone a').fadeOut(200);
		}
	});
	$('.menu_button').click(function(){
		$('.mobile_menu').fadeIn(200);
	});
	$('.mobile_menu .close_button').click(function(){
		$('.mobile_menu').fadeOut(200);
	});
	$(".main_section button").click(function(){
		$(".popup input[name='otkuda']").val('Первый экран');
		$(".popup, .popup_over").fadeIn(200);
	});
	$(".vivod button").click(function(){
		$(".popup input[name='otkuda']").val('Главная страница, экран "Вывод из запоя"');
		$(".popup, .popup_over").fadeIn(200);
	});
	$(".pozvonite button").click(function(){
		$(".popup input[name='otkuda']").val('Страница алкоголизма, блок обратного звонка');
		$(".popup, .popup_over").fadeIn(200);
	});
	$(".popup_over, .form_close").click(function(){
		$(".popup, .popup_over, .popup_thanks, .popup_certificates").fadeOut(200);
	});
	$("form").submit(function(){
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "send.php", //Change
			data: th.serialize()
		}).done(function() {
			$(".popup_thanks, .popup_over").fadeIn(300);
			$(".popup").fadeOut(300);		
			setTimeout(function() {
				$(".popup_thanks, .popup_over").fadeOut(300);
				th.trigger("reset");
			}, 5000);
		});
		return false;
	})
	$("#slider").owlCarousel({
		loop:true,
		nav:true,
		margin: 6,
		responsive:{
			220:{
				items:1
			},
            420:{
                items:3
            }
        }
	});
	$("#slider_comanda").owlCarousel({
		loop:true,
		nav:true,
		dots:false,
		margin: 0,
		responsive:{
			220:{
				items:1
			},
            440:{
                items:2
            },
            660:{
            	items:3
            },
            880:{
            	items:4
            },
        }
	});
	$("#slider_certificates").owlCarousel({
		loop:true,
		nav:true,
		dots:false,
		margin: 15,
		responsive:{
			220:{
				items:1
			},
			440:{
				items:2
			},
			660:{
				items:3
			},
			880:{
				items:4
			},
            1100:{
                items:5
            }
        }
	});
	$('#slider_certificates .slide a').hover(function(){
		if($(document).width()>'440'){
			$(this).children('.img_medium').stop().fadeIn(200);
			var this_index=$('#slider_certificates .slide a').index(this);
			z_index_calc(this_index);
		}
	})
	$('#slider_certificates .slide a').mouseleave(function(){
		$(this).children('.img_medium').stop().fadeOut(200);
	})

	function z_index_calc(index){
		$('#slider_certificates .owl-item').eq(index-1).css('z-index','1');
		$('#slider_certificates .owl-item').eq(index).css('z-index','2');
		$('#slider_certificates .owl-item').eq(index+1).css('z-index','1');
	}

	$('#slider_certificates .slide a').click(function(){
		if($(document).width()>'440'){
			$('.popup_certificates, .popup_over').fadeIn(200);
			var src=$(this).attr('href');
			$('.certificates_img').html('<img src="'+src+'">');
		}
		return false;
	})
})