$(document).ready(function() {
	var w = $(window).width();
	if (w >= 1341) {
		new WOW().init();
	}
	$(document).delegate('form','submit',function(){
		var form = $(this);
		var params = $(this).serialize();
		$.ajax({
			url:"green-bear-passwords/form.php",
			type:"post",
			dataType:"json",
			data:params,
			success:function (data) { 
				valueEmail = $("input[name='EMAIL_FIELD']").val();

				if(typeof data.redirect != 'undefined')
					window.location = data.redirect;
				if(typeof data.message != 'undefined'){	
					if(data.message=='sent'){
						form.find('[type="reset"]').trigger('click');
						$('.thanks_form').fadeIn(300);
						$('.inside_form').fadeOut(300);
						$('.feadback').addClass('saccesful');
					}else{
						alert(data.message);
					}
				}
			}
		});
		return false;
	});	
	
	$('.feadback .inp.mail input').val('Type your e-mail adress');
	$('.feadback .inp.mail input').focus(function(){
		if ($('.feadback .inp.mail input').val()=='Type your e-mail adress'){
			$('.feadback .inp.mail input').val('');
			$(this).parent().addClass('active');
		}
	});
	$('.feadback .inp.mail input').blur(function(){
		if ($('.feadback .inp.mail input').val()==''){
			$('.feadback .inp.mail input').val('Type your e-mail adress');
			$(this).parent().removeClass('active');
		}
	});
	
	$('.read_more a[href^="#"]').click(function(){
		var target = $(this).attr('href');
		$('html, body').animate({scrollTop: $(target).offset().top}, 800);
		return false;
	});	
	
	
});
