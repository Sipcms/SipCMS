<div id="load-content">
            <!--  Blocks  -->
            <div class="blocks">

                <div class="block widget">
                	<a class="close"></a><a class="set"></a>
                	<div class="widget_inner">

						<h1>Набор виджетов</h1>

						<div class="filtr">
							<label for="name">Фильтр:</label>
							<input type="text" onblur="javascript: if(this.value == '') { this.value = 'Название категории...';}" onfocus="javascript: if(this.value == 'Название категории...') this.value = '';" class="stylizedInput" value="Название виджета..." id="name" />
							<input type="submit" class="button_search" value="Поиск" id="name" />
	            		</div>

			            <div class="sort">
							<div class="sort_inner">Сортировка:</div>
							<select class="state">
								<option value="0">Выбор раздела...</option>
							</select>
							<select class="date" >
								<option value="0">Выбор даты...</option>
							</select>
			            </div>

                        <div id="tableScrollOuter">
                            <div id="tableScrollInner">
                            	<div class="pressable widget_down pngf"><a href="#">виджеты для интернет магазина</a></div>
                            	<div class="widget_open">
	                                <div class="row">
	                                    <div class="first img">
	                                        <img src="/sipcms/panel/images/nofoto.png" alt="" /></div>
	                                    <div class="first widget_descr">
	                                        <h2>Виджеты 1</h2>
											<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.<br />
	В то время некий безымянный печатник создал большую коллекцию размеров и форм.
	шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem</p>
										</div>
	                                    <div class="first widget_btn">
	                                        <div class="pressable pngf"><a href="#">Добавить в консоль</a></div></div>
	                                </div>
	                                <div class="row">
	                                    <div class="first img">
	                                        <img src="/sipcms/panel/images/nofoto.png" alt="" /></div>
	                                    <div class="first widget_descr">
	                                        <h2>Виджеты 2</h2>
											<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.<br />
	В то время некий безымянный печатник создал большую коллекцию размеров и форм.
	шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem</p>
										</div>
	                                    <div class="first widget_btn">
	                                        <div class="pressable pngf"><a href="#">Добавить в консоль</a></div></div>
	                                </div>
	                                <div class="row">
	                                    <div class="first img">
	                                        <img src="/sipcms/panel/images/nofoto.png" alt="" /></div>
	                                    <div class="first widget_descr">
	                                        <h2>Виджеты 3</h2>
											<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.<br />
	В то время некий безымянный печатник создал большую коллекцию размеров и форм.
	шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem</p>
										</div>
	                                    <div class="first widget_btn">
	                                        <div class="pressable pngf"><a href="#">Добавить в консоль</a></div></div>
	                                </div>
	                            </div>
                            	<div class="pressable widget_down pngf"><a href="#">виджеты для форумов</a></div>
                            	<div class="pressable widget_down pngf"><a href="#">виджеты статитстики</a></div>
                            	<div class="pressable widget_down pngf"><a href="#">виджеты статитстики</a></div>
                            	<div class="pressable widget_down pngf"><a href="#">виджеты статитстики</a></div>
                            </div>
                        </div>

                        <div class="scroll" id="archive_scroll">
                            <div class="up" id="archive_scroll_up">
                            </div>
                            <div class="track" id="archive_scroll_track">
                                <div class="drag" id="archive_scroll_drag">
                                </div>
                            </div>
                            <div class="down" id="archive_scroll_down">
                            </div>
                        </div>
                        <script language="javascript" type="text/javascript">
                            //speed, trackObj, upObj, downObj, dragObj, contentMaskObj, contentObj, scrollObj
                            var scroller2 = new ScrollObj(5, "archive_scroll_track", "archive_scroll_up", "archive_scroll_down", "archive_scroll_drag", "tableScrollOuter", "tableScrollInner", "archive_scroll");
                        </script>




					</div>
				</div>

                <div class="leftcol">
                    <div class="block stat">
                	    <a class="close"></a><a class="set"></a>
					    <h1>Статистика сайта</h1>
					    <div class="tbl">
                            <div class="row">
                                <div class="l_col">последние заоходившие на сайт:</div>
                                <div class="r_col"><a href="#">User11lkds</a></div>
                            </div>
                            <div class="row">
                                <div class="l_col">сколько человек на сайте в данное время:</div>
                                <div class="r_col"><a href="#">15478</a></div>
                            </div>
                            <div class="row last">
                                <div class="l_col">сколько пользователей в личных кабинетах:</div>
                                <div class="r_col"><a href="#">1247</a></div>
                            </div>						                        
					    </div>					
				    </div>
                    <div class="block forum">
                	    <a class="close"></a><a class="set"></a>
					    <h1>блок форума</h1>
                        <div class="tbl">
                    	    <div class="row head">
                                <div class="l_col">последние добавленные темы</div>
                                <div class="r_col r_col_first">коментариии</div>
                                <div class="r_col last_col">на форуме</div>                    	
                    	    </div>
                            <div class="row row_middle hoverable">
                                <div class="l_col"><a href="#">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</a></div>
                                <div class="r_col r_col_first"><span><span><a href="#">user12kfd</a></span></span></div>
                                <div class="r_col last_col"><a href="#">1245</a></div>                            
                            </div>
                            <div class="row row_middle hoverable">
                                <div class="l_col"><a href="#">Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</a></div>
                                <div class="r_col r_col_first"><a href="#">usernhsa</a></div>
                                <div class="r_col last_col"><a href="#">1547</a></div>                            
                            </div>
                            <div class="row row_middle hoverable last">
                                <div class="l_col"><a href="#">В то время некий безымянный печатник создал большую коллекцию размеров и форм.</a></div>
                                <div class="r_col r_col_first"><a href="#">usergyy12</a></div>
                                <div class="r_col last_col"><a href="#">154</a></div>                            
                            </div>						                        
                        </div>
				    </div>
				</div>

                <div class="rightcol">
                    <div class="block fastnews">
                	    <a class="close"></a><a class="set"></a>
					    <h1>быстрые новости</h1>
                        <div class="tbl">
                            <div class="row">
                                <div class="l_col">заголовок</div>
                                <div class="r_col"><input type="text" name="title" value="" class="fastText"/></div>
                            </div>
                            <div class="row">
                                <div class="l_col tools"></div>
                                <div class="r_col tools">
                                    <a href="#">Календарь</a> <a class="callendar"></a>
                                    <a href="#" class="insert">Загрузить/вставить</a> <a class="play"></a> <a class="list"></a> <a class="fly"></a>
                                </div>
                            </div>
                            <div class="row last">
                                <div class="l_col">текст</div>
                                <div class="r_col"><textarea name="text" class="fastText" cols="35" rows="6"></textarea>
                                    <div class="buttons">
                                        <div class="pressable pngf"><a href="#">просмотреть</a></div><div class="pressable pngf"><a href="#">изменить</a></div>
                                    </div>
                                </div>
                            </div>						                        
                        </div>
				    </div>
                    <div class="block news">
                	    <a class="close"></a><a class="set"></a>
					    <h1>новости</h1>
                        <div class="tbl">
                            <div class="row">
                                <div class="l_col"><a href="#">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</a></div>
                            </div>
                            <div class="row">
                                <div class="l_col"><a href="#">Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</a></div>
                            </div>
                            <div class="row">
                                <div class="l_col"><a href="#">В то время некий безымянный печатник создал большую коллекцию размеров и форм.</a></div>
                            </div>
                            <div class="row">
                                <div class="l_col"><a href="#">Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.</a></div>
                            </div>
                            <div class="row last">
                                <div class="l_col"><a href="#">Его популяризации в новое время послужили публикация листов Letraset с образцами. Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</a></div>
                            </div>																		                        
                        </div>				
				    </div>                    
                </div>
            </div>
            <!--  end Blocks  -->
</div>