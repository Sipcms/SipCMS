<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>phone</title>
	<link rel="stylesheet" href="/sipcms/css/clear.css" type="text/css" />
	<link rel="stylesheet" href="/sipcms/css/style.css" type="text/css" />

	<script type="text/javascript" src="/sipcms/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="/sipcms/js/jquery.swfobject.min.js"></script>
    <script type="text/javascript" src="/sipcms/js/jcarousellite.js"></script>
	<!--[if lte IE 6]>
	<link href="/sipcms/css/ie.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/sipcms/js/png.js"></script>
 
	<script type="text/javascript">
        DD_belatedPNG.fix(".pngf");

        //$('.phone_btn1').live('hover', function(){DD_belatedPNG.fix(".pngf");});
        $('.news_item').live('hover', function () {$(this).toggleClass('news_item_hover')});
        $('.menu li').live('hover', function() {$(this).toggleClass('hover')})
	</script>	
	<![endif]-->
        <?php
        $auth = Auth::instance();
        $user_id = $auth->get_user();

        $user = ORM::factory('sipusers', array('id'=>$user_id));
        ?>
	<script type="text/javascript">
    $(function() {
        $('.phone_btn2').click(function(){
            if($('.themes:visible').length > 0)
            {
                $('.themes').animate({left: '-=137'}, function(){$(this).hide();$('.button-active').hide();});
            }
            else
            {
                $('.button-active').show();
                $('.themes').show().css('left', '-137px');
                $('.themes').animate({left: '+=137'});
            }
            return false;
        });	 

	    $('.themes a').click(function() {            
            $('.themes').animate({left: '-=137'}, function(){$(this).hide();$('.button-active').hide();});
            
            _this = this;
            $.ajax({
                type: "POST",
                url: "/ajax/set_themes",
                data: {
                        themes: $(_this).attr('class')
                },
                beforeSend: function(){
                    //Идет отправка
                },
                success: function(data){
                    //Данные принят
                }
            });
//            $(document.body).fadeOut(500, function(){
//                $(document.body).attr('class', 'inner');
//	            $(document.body).addClass($(_this).attr('class'));
//
//                $(document.body).fadeIn(500);
//            });
            $(document.body).animate({
                opacity: 0
            },500);
            setTimeout(function(){
                $(document.body).attr('class', 'inner');
                $(document.body).addClass($(_this).attr('class'));
            },500);
            $(document.body).animate({
                opacity: 1
            },500);   
                
	        $('.phone_btn2 span').css('background-position', $(this).css('background-position').replace('-1px', '100%'));
	        //console.log($(this).css('background-position').replace('-1px', '100%')+'|'+ $(_this).attr('class'));
	        return false;
	    });
            
            type_t = '<?=$user->themes?>';
            switch(type_t){
                case "grey":
                    $('.phone_btn2 span').css('background-position', '100% -215px');
                    break;
                case "blue":
                    $('.phone_btn2 span').css('background-position', '100% -187px');
                    break;
                case "green":
                    $('.phone_btn2 span').css('background-position', '100% -159px');
                    break;
                case "orange":
                    $('.phone_btn2 span').css('background-position', '100% -131px');
                    break;
                case "pink":
                    $('.phone_btn2 span').css('background-position', '100% -103px');
                    break;
            }
        $('.news_content').jCarouselLite({
            circular: 1,
            visible: 4,
            btnNext: '#next',
            btnPrev: '#prev',
            speed: 500,
            easing: 'swing'
        });



    });
	</script>
        
        <script type="text/javascript">
        $(document).ready(
                function () {
                        // #myFlashVars is the selector
                        $('#phone_flash').flash(
                                {
                                        // test_flashvars.swf is the flash document
                                        swf: '/phone/webphone.swf',
                                        height: 383,
                                        width: 550,
					wmode: 'transparent',
                                        // these arguments will be passed into the flash document
                                        flashvars: {
                                                user: <?=$user_id?>,
                                                phone: <?=  Model_Sipstarsfon::get_number($user->email)?>
                                        }
                                }
                        );
                }
        );
        </script>
</head>

<body class="inner <?=(!empty($user->themes) ? $user->themes : '')?>">

 	<!--  WRAPPERS  -->
	<div id="wrapper">
	
		<!--  HEADER  -->
		<div id="header"><div id="header_inner">
		  	<a href="#" class="logo"><img src="/sipcms/images/logo.png" alt="StarsFon"/></a>
		  
			<!--  TOPMENU  -->
			<ul class="menu pngf">
				<li class="pngf"><a href="/">О компании</a></li>
				<li class="pngf"><a href="/">услуги</a></li>
				<li class="pngf"><a href="/">Клиенты</a></li>
				<li class="pngf"><a href="/">Контакты</a></li>
			</ul>
			<!--  end TOPMENU  -->
			
			<a href="<?=(Auth::instance()->logged_in() ? '/logout' : '/login')?>" class="entry pngf"><?=(Auth::instance()->logged_in() ? 'Выход' : 'Вход в систему')?></a>
		
		</div></div>
		<!--  end HEADER  -->
		
		<!--  PHONE  -->
		<div id="phone"><div id="phone_inner">
			<div class="phone_block">
				<h1 class="pngf"><?=$user->email?></h1>
                                <div class="phone_item number pngf"><div class="pngf"></div><?=  Model_Sipstarsfon::get_number($user->email)?></div>
                                <div class="phone_item balans pngf"><div class="pngf"></div><?=  Model_Sipstarsfon::get_balanc($user->email)?> <span>USD</span></div>
				<!--ul class="tab">
					<li class="tab1"><a href="#"></a></li>
					<li class="tab2"><a href="#"></a></li>
					<li class="tab3"><a href="#"></a></li>
					<li class="tab4"><a href="#"></a></li>															
				</ul>
				<div class="tab_block tab1"><img src="images/tab-1.png" class="pngf" alt="" /></div-->
				<div id="phone_flash" class="phone_img">
                                    
                                </div>
				<div class="btn_left pngf"><a href="#" class="phone_btn1 pngf"><span class="bg pngf">Как пользоваться<span>?</span></span></a></div>
				<div class="btn_right pngf">
					<div class="theme-selector">
					<a href="#" class="phone_btn2"><span class="pngf">Выбрать тему</span></a>
                        <div class="button-active">
                        </div>
                        <div class="themes"  style="display:none;">
                            <a href="#" class="grey"></a>
                            <a href="#" class="blue"></a>
                            <a href="#" class="green"></a>
                            <a href="#" class="orange"></a>
                            <a href="#" class="pink"></a>
                        </div>
                    </div>
					<a href="#" class="phone_btn3"><span class="pngf">Настроить аккаунт</span></a>
				</div>
			</div>
		
		</div></div>
		<!--  end PHONE  -->		
	
	  <!--  CONTAINER  -->
	  <div id="container">