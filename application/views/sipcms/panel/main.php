<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>CMS5</title>
    <link rel="stylesheet" href="/sipcms/panel/css/clear.css" type="text/css" />
    <link rel="stylesheet" href="/sipcms/panel/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/sipcms/panel/css/jquery.selectbox.css" type="text/css" />
    
    <script type="text/javascript" src="/sipcms/panel/js/jquery.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/cufon-yui.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/font.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/hoverable.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/tabler.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/checkbox.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/jquery.selectbox-0.6.1.pack.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/selects.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/divtables.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/tools.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/draggable.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/movable.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/blocks.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/scroll.js"></script>
    <script type="text/javascript" src="/sipcms/panel/js/jcarousellite.js"></script>

    <script type="text/javascript" src="/sipcms/panel/js/main.js"></script>

    <script type="text/javascript">
        Cufon.replace('#header a', { fontFamily: 'Arial', textShadow:'#003247 1px 1px', letterSpacing: '-0.3px'});
        Cufon.replace('#menu ul li a span', { fontFamily: 'Arial', textShadow:'#0E0F0F 1px 1px', letterSpacing: '-0.3px'});		
        Cufon.replace('#toolPanel .text', { fontFamily: 'Arial', textShadow:'#08536b 1px 1px', letterSpacing: '0.1px'});
    </script>
    <!--[if lte IE 6]>
    <link href="/sipcms/panel/css/ie.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/sipcms/panel/js/png.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix(".pngf");
        DD_belatedPNG.fix("#header a");
        DD_belatedPNG.fix(".image img");
        DD_belatedPNG.fix(".button");
        DD_belatedPNG.fix(".close");
        DD_belatedPNG.fix(".set");
        DD_belatedPNG.fix(".hoverable");				
    </script>	
    <![endif]-->

    <!--[if lte IE 7]>
    <link href="/sipcms/panel/css/ie67.css" rel="stylesheet" type="text/css" />
    <![endif]-->	
	
</head>

<body>
    <!--  WRAPPER  -->
	<div id="wrapper" class="pngf">
	
	    <!--  HEADER  -->
		<div id="header">
			<a href="/" class="logo pngf"></a>
			<a href="/logout" class="exit">Выход</a>
			<a href="#" class="user">user1213sf</a>
			<div class="lang"><a href="#" class="ru">RU</a><a href="#" class="en">EN</a><a href="#" class="gr">GR</a></div>
		</div>
        <!-- end HEADER -->
		
        <!--  MENU  -->
        <div id="menu">
            <ul>
                <li><a href="#"><span>консоль</span></a></li>
                <li><a href="#"><span>система</span></a>
                    <ul>
                        <li><a href="#">Права доступа</a></li>
                        <li><a href="#">Общие настройки</a></li>
                        <li><a href="#">Менеджер пользователей</a></li>
                        <li><a href="#">Плагины</a></li>
                        <li><a href="#">Мой профиль</a></li>
                    </ul>
                </li>
                <li><a href="#"><span>модули</span></a>
                    <ul>
                        <li><a href="#">Контент страниц</a></li>
                        <li><a href="/panel/news" >Новости</a></li>
                        <li><a href="#">Интернет магазин</a></li>
                        <li><a href="#">Форум</a></li>
                    </ul>                
                </li>
                <li><a href="#"><span>внешний вид</span></a>
                    <ul>
                        <li><a href="#">Медиа библиотека</a></li>
                        <li><a href="#">Менеджер меню</a></li>
                    </ul>                
                </li>
                <li class="last"><a href="#"><span>безопасность</span></a></li>												
            </ul>
            <div class="button_save">
                <div class="pressable pngf textButton btnSave">
                    <a href="#">сохранить</a>
                </div>
                <div class="pressable pngf textButton btnCancel">
                    <a href="#">отменить</a>
                </div>
            </div>
        </div>
        <!--  end MENU  -->

        <div id="container">
		
        <!--  INFOPANEL  -->		
        <div id="infoPanel" class="pngf">
            <div class="infopanel_inner">
                <div class="infopanel_block">
                    <a href="/" class="site pngf"><span>15478</span>на сайте</a>
                    <a href="#" class="panel pngf"><span>1247</span>в панели</a>
                    <a href="#" class="message pngf">сообщения</a>
                    <a href="/" class="view pngf">просмотр сайта</a>
                    <a href="#" class="consol pngf">настроить консоль</a>				
                </div>
            </div>
        </div>
        <!--  end INFOPANEL  -->
			
            <?php
            if(Request::initial()->controller() == 'main')
            {
            ?>
            <!--  ToolPanel  -->
            <div class="toolPanel pngf">
                <a class="close"></a><a class="set"></a>
                    <ul class="button pngf">
                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/content.png" alt="" /></span>
	                        <span class="text"><span><span>Контент страниц</span></span></span>
	                    </a>
                        </li>
                        <li>
	                    <a href="/panel/news" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/news.png" alt="" /></span>
	                        <span class="text"><span><span>Новости</span></span></span>
	                    </a>
                        </li>
                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/shop.png" alt="" /></span>
	                        <span class="text"><span><span>Интернет магазин</span></span></span>
	                    </a>
                        </li>
                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/forum.png" alt="" /></span>
	                        <span class="text"><span><span>Форум</span></span></span>
	                    </a>
                        </li>
                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/access.png" alt=""/></span>
	                        <span class="text"><span><span>Права доступа</span></span></span>
	                    </a>
                        </li>

                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/library.png" alt=""/></span>
	                        <span class="text"><span><span>Медиа библиотека</span></span></span>
	                    </a>
                        </li>

                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/menu.png" alt=""/></span>
	                        <span class="text"><span><span>Менеджер меню</span></span></span>
	                    </a>
                        </li>

                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/setting.png" alt=""/></span>
	                        <span class="text"><span><span>Общие настройки</span></span></span>
	                    </a>
                        </li>

                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/users.png" alt=""/></span>
	                        <span class="text"><span><span>Менеджер пользователей</span></span></span>
	                    </a>
                        </li>

                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/plugins.png" alt=""/></span>
	                        <span class="text"><span><span>Плагины</span></span></span>
	                    </a>
                        </li>

                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/profile.png" alt=""/></span>
	                        <span class="text"><span><span>Мой профиль</span></span></span>
	                    </a>
                        </li>

                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/security.png" alt="" /></span>
	                        <span class="text">Безопасность</span>
	                    </a>
                        </li>
                    </ul>
                </div>
            <!--  end ToolPanel  -->
            <?php
            }elseif(Request::initial()->controller() == 'news' && Request::initial()->action() == 'index')
            {
            ?>
            <!--  ToolPanel  -->
            <div class="toolPanel list_content pngf"><div class="toolPanelHolder"><div class="list_content_inner">
                <div class="list_content_title">Новости</div>
                    <ul class="button pngf">
                        <li>
	                    <a href="/panel/news/add_news" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/add.png" alt="" /></span>
	                        <span class="text"><span><span>Создать</span></span></span>
	                    </a>
                        </li>
                        <li id="edit_news">
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/edit.png" alt="" /></span>
	                        <span class="text"><span><span>Изменить</span></span></span>
	                    </a>
                        </li>
                        <li id="publication">
	                    <a href="/panel/ajax/news_publication" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/publish.png" alt="" /></span>
	                        <span class="text"><span><span>Опубликовать</span></span></span>
	                    </a>
                        </li>
                        <li id="no_publication">
	                    <a href="/panel/ajax/news_nopublication" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/unpublish.png" alt="" /></span>
	                        <span class="text"><span><span>Снять с публикации</span></span></span>
	                    </a>
                        </li>
                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/archive.png" alt=""/></span>
	                        <span class="text"><span><span>В архив</span></span></span>
	                    </a>
                        </li>
                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/cart.png" alt=""/></span>
	                        <span class="text"><span><span>В корзину</span></span></span>
	                    </a>
                        </li>
                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/set.png" alt=""/></span>
	                        <span class="text"><span><span>Настройки</span></span></span>
	                    </a>
                        </li>
                        <li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/help.png" alt=""/></span>
	                        <span class="text"><span><span>Справка</span></span></span>
	                    </a>
                        </li>
                    </ul>
				<div class="list_content_blocks_shadow pngf"></div>
			</div></div></div>
            <!--  end ToolPanel  -->

            <?php
            }elseif(Request::initial()->action() == 'add_news')
            {
            ?>
            
            <!--  ToolPanel  -->
            <div class="toolPanel list_content pngf content_create"><div class="toolPanelHolder"><div class="list_content_inner">
                <div class="list_content_title">Новости: Создание новости</div>
				<ul class="button pngf">
					<li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/save.png" alt="" /></span>
	                        <span class="text"><span><span>Сохранить</span></span></span>
	                    </a>
			    	</li>

					<li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/savenclose.png" alt="" /></span>
	                        <span class="text"><span><span>Сохранить и закрыть</span></span></span>
	                    </a>
			    	</li>

					<li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/savencreate.png" alt="" /></span>
	                        <span class="text"><span><span>Сохранить и создать</span></span></span>
	                    </a>
			    	</li>

					<li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/cancel.png" alt="" /></span>
	                        <span class="text"><span><span>Отменить</span></span></span>
	                    </a>
			    	</li>



					<li>
	                    <a href="#" class="hoverable">
	                        <span class="image"><img src="/sipcms/panel/images/buttons/help.png" alt=""/></span>
	                        <span class="text"><span><span>Справка</span></span></span>
	                    </a>
			    	</li>
				</ul>
                <div class="list_content_blocks_shadow pngf"></div>
			</div></div></div>
            <!--  end ToolPanel  -->

            <?php
            }
            ?>

            <div id="js-load">
<?php
echo $content;
?>
</div>
</div>
        <!--  end Container  -->
		<div class="clear"></div>
		<div class="empty"></div>
	   
	</div>
    <!--  end WRAPPER  -->

	<!--  FOOTER  -->	
	<div id="footer" class="pngf">
	</div>
	<!--  end FOOTER  -->	

</body>

</html>