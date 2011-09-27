<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>STARSFON</title>
	<link rel="stylesheet" href="/sipcms/css/clear.css" type="text/css" />
	<link rel="stylesheet" href="/sipcms/css/style.css" type="text/css" />

	<script type="text/javascript" src="/sipcms/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="/sipcms/js/cufon-yui.js"></script>
	<script type="text/javascript" src="/sipcms/js/Century_Gothic_400.font.js"></script>		
	
	<script type="text/javascript" src="/sipcms/js/strip.js"></script> 
 <script type="text/javascript" src="/sipcms/js/jcarousellite.js"></script>
 <script type="text/javascript" src="/sipcms/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="/sipcms/js/jScrollPane.js"></script>
<script type="text/javascript" src="/sipcms/js/nivo.js"></script>
<link type="text/css" rel="stylesheet" href="/sipcms/css/strip.css" > 
<link rel="stylesheet" type="text/css" href="/sipcms/css/jScrollPane.css" />

<script type="text/javascript">

    
    var mystrip;
    $(document).ready(function () {

        mystrip = new ImageStrip('.anythingWindow', 904, 800);

        $('.news_content').jCarouselLite({
            circular: 1,
            visible: 4,
            btnNext: '#next',
            btnPrev: '#prev',
	        speed: 500,
            easing: 'swing'
        });

        $('.direct .direct_item .slideArea').each(function () {
            $(this).jCarouselLite({
                vertical: 1,
                circular: 1,
                visible: 6,
                auto: 2000,
                scroll: 1
            });
        });
    });
    function setActiv(n,e) {
        $('.thumbNav a').removeClass('cur');
        mystrip.move(n);
        $(e).addClass('cur');
    }

    $(function () {
        $('.nivoSlider').nivoSlider({
            effect: 'sliceDown',
            animSpeed: 500,
            pauseTime: 5000,
            startSlide: 0,
            slices: 15,
            directionNav: false,
            directionNavHide: true,
            controlNav: true,
            controlNavThumbs: false,
            keyboardNav: true,
            pauseOnHover: true,
            captionOpacity: 1
        });

        $('.news_arr_down').click(function () {
            $('.scrollContent').animate({ top: '-=79' });
            return false;
        });

        $('.news_arr_up').click(function () {
            $('.scrollContent').animate({ top: '+=79' });
            return false;
        });
    });
</script> 
	
	
	<script type="text/javascript">
		Cufon.replace('.banneritem h2', { fontFamily: 'Century Gothic' , textShadow:'#01598a 3px 3px', color: '-linear-gradient(0=#b9bdbe, 0.5=#fcfdfd, 0.5=#b9bdbe, 0.5=#ffffff, 1=#b9bdbe)', letterSpacing: '-0.2px'});
	</script>


	<!--[if lte IE 6]>
	<link href="/sipcms/css/ie.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/sipcms/js/png.js"></script>
	<script type="text/javascript">
        DD_belatedPNG.fix(".pngf");

        //$('.phone_btn1').live('hover', function(){DD_belatedPNG.fix(".pngf");});
        $('.news_item').live('hover', function () {$(this).toggleClass('news_item_hover')});
        $('.menu li').live('hover', function() {$(this).toggleClass('hover')});
        $('.scrollContent a').live('hover', function () {$(this).toggleClass('hover')});
	</script>	
	<![endif]-->
	
</head>

<body>

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
		
		<!--  SLIDER  -->
		<div id="slider"><div id="slider_bg">
		  
			<div id="slider_block">
			                		
				<div class="anythingSlider">
					<div class="anythingWindow" style="position:relative;">
						<ul class="bannergroup" style="width: 4705px;position:absolute;">
							<li class="banneritem">
								<div class="nivoSlider">

                                    <img alt="" src="/sipcms/images/slide-2.png" class="pngf" title='<h2>2Lorem Ipsum - это текст-"рыба".</h2>
								        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.<br />Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века</p>
								        <div class="more pngf"><a href="#">Читать дальше</a></div>'/>

                                    <img alt="" src="/sipcms/images/slide-3.png" class="pngf" title='<h2>3Lorem Ipsum - это текст-"рыба".</h2>
								        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.<br />Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века</p>
								        <div class="more pngf"><a href="#">Читать дальше</a></div>'/>

                                    <img alt="" src="/sipcms/images/slide-4.png" class="pngf" title='<h2>4Lorem Ipsum - это текст-"рыба".</h2>
								        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.<br />Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века</p>
								        <div class="more pngf"><a href="#">Читать дальше</a></div>'/>

                                    <img alt="" src="/sipcms/images/slide-5.png" class="pngf" title='<h2>5Lorem Ipsum - это текст-"рыба".</h2>
								        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.<br />Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века</p>
								        <div class="more pngf"><a href="#">Читать дальше</a></div>'/>

                                    <img alt="" src="/sipcms/images/slide-6.png" class="pngf" title='<h2>5Lorem Ipsum - это текст-"рыба".</h2>
								        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.<br />Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века</p>
								        <div class="more pngf"><a href="#">Читать дальше</a></div>'/>

                                    <img alt="" src="/sipcms/images/slide-7.png" class="pngf" title='<h2>5Lorem Ipsum - это текст-"рыба".</h2>
								        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.<br />Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века</p>
								        <div class="more pngf"><a href="#">Читать дальше</a></div>'/>

                                    <img alt="" src="/sipcms/images/slide-8.png" class="pngf" title='<h2>5Lorem Ipsum - это текст-"рыба".</h2>
								        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.<br />Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века</p>
								        <div class="more pngf"><a href="#">Читать дальше</a></div>'/>
                                </div>
							</li>
						</ul>
					</div>

					<ul class="thumbNav nivo-controlNav">
						<li><a href="#" class="panel1 pngf cur" rel="1"></a></li>
						<li><a href="#" class="panel1 pngf" rel="2"></a></li>
						<li><a href="#" class="panel1 pngf" rel="3"></a></li>
						<li><a href="#" class="panel1 pngf" rel="4"></a></li>
						<li><a href="#" class="panel1 pngf" rel="5"></a></li>
					</ul>
				</div>
			
			<!--POSITION SLIDER-->
			</div>
		
		</div></div>
		<!--  end SLIDER  -->		
		
	  <!--  CONTAINER  -->
	  <div id="container">