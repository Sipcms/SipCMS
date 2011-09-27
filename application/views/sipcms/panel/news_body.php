
<div id="load-content">
            <!--  List Content Buttons  -->
            <div class="list_content_buttons">
                <div class="textButton textButton_1 pressable pngf <?=(Request::initial()->action() == 'index' ? 'pressed' : '')?>"><a href="#">новости</a></div>            
                <div class="textButton textButton_3 pressable pngf <?=(Request::initial()->action() == 'archive' ? 'pressed' : '')?>"><a href="#">архив новостей</a></div>
            </div>
            <!--  end List Content Buttons  -->

            <!--  List Content Blocks  -->
            <div class="list_content_blocks"><div class="list_content_blocks_inner">
	            <div class="filtr">
					<label for="name">Фильтр:</label>
					<input type="text" id="name" value="Название категории..." class="stylizedInput" onfocus="javascript: if(this.value == 'Название категории...') this.value = '';" onblur="javascript: if(this.value == '') { this.value = 'Название категории...';}" />
					<input type="submit" id="name" value="Поиск" class="button_search" />
	            </div>            	
	            <div class="sort sort_news">
					<div class="sort_inner">Сортировка:</div>
					<select class="news-author">
						<option value="0">Выбор автора...</option>
					</select>
					
                    <select class="news-access">
						<option value="0">Выбор уровня доступа...</option>
					</select>	

					<select class="news-state">
						<option value="0">Выбор состояния...</option>
					</select>						
                    <br />			

					<select class="news-date">
						<option value="0">Выбор даты...</option>
					</select>										
	            </div>
	            
	            <div class="tbl"><div class="tbl_inner">					
                                <div class="bg_left"></div>
                                <div class="bg_right"></div>
                                <div class="bg_top"></div>
                                <div class="bg_bottom"></div>
                                <div class="corner_tl"></div>
                                <div class="corner_tr"></div>
                                <div class="corner_bl"></div>
                                <div class="corner_br"></div>
				            	<div class="tbl_content news divtable">
				            		<div class="thead">
				            			<div class="chack"><input type="checkbox" class="custom" /></div>
				            			<div class="name">Название</div>
				            			<div class="state">Состояние</div>
				            			<div class="access">Доступ</div>
                                        <div class="author">Автор</div>
				            			<div class="date last">Дата</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" value="1" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_unpub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            		<div class="row">
				            			<div class="first"><input type="checkbox" class="custom"/></div>
				            			<div class="first"><a href="#">Lorem Ipsum - это текст Lorem Ipsum</a></div>
				            			<div class="first"><a class="state_pub"></a></div>
				            			<div class="first">Публичный</div>
                                        <div class="first">User11111</div>
				            			<div class="first last">21.06.2011</div>									            			
				            		</div>
				            	</div>
	            </div></div>
	            
	            <div class="pages">
		            <div class="show">
						<div class="show_inner">Показать:</div>
						<select class="page">
							<option value="0">20</option>
						</select>
		            </div>            	

		            <div class="up">
						<a href="#top">Вверх</a>
		            </div>
		            
					<a href="#" class="prev">Предыдущая</a>
					<a href="#">1</a>
					<span>2</span>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<a href="#" class="next">Следующая</a>																			

	            </div>						            
            </div>
			
            <div class="list_content_blocks_shadow pngf"></div>			
			
			</div>
            <!--  end List Content Blocks  -->
</div>