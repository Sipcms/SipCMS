<?php
if(!Auth::instance()->logged_in())
{
?>
    
	  </div>
	  <!--  end CONTAINER  -->

	<!--  BOTTOM -->
	<div id="bottom"><div id="bottom_inner"><div id="bottom_content">
		<div class="bottom_block_1">			
					<h1>Новости</h1>
                    <div class="scrollable">
                    <ul class="scrollContent">
					    <li>
	<a href="#" class="pngf">
							    <img src="/sipcms/images/news-1.jpg" alt="" />
							    <span class="date">06.06.11, 15:03</span>
							    <span class="title">Lorem Ipsum - это текст-"рыба", часто используемый в печати.</span>					
						    </a>
</li>
					   <li>
	 <a href="#" class="pngf">
							    <img src="/sipcms/images/news-1.jpg" alt="" />
							    <span class="date">06.06.11, 15:03</span>
							    <span class="title">Lorem Ipsum - это текст-"рыба", часто используемый в печати.</span>					
						    </a>
</li>
					   <li>
	 <a href="#" class="pngf">
							    <img src="/sipcms/images/news-1.jpg" alt="" />
							    <span class="date">06.06.11, 15:03</span>
							    <span class="title">Lorem Ipsum - это текст-"рыба", часто используемый в печати.</span>					
						    </a>
</li>
					   <li>
	 <a href="#" class="pngf">
							    <img src="/sipcms/images/news-1.jpg" alt="" />
							    <span class="date">06.06.11, 15:03</span>
							    <span class="title">Lorem Ipsum - это текст-"рыба", часто используемый в печати.</span>					
						    </a>
</li>
					   <li>
	 <a href="#" class="pngf">
							    <img src="/sipcms/images/news-1.jpg" alt="" />
							    <span class="date">06.06.11, 15:03</span>
							    <span class="title">Lorem Ipsum - это текст-"рыба", часто используемый в печати.</span>					
						    </a>
</li>
					   <li>
	 <a href="#" class="pngf">
							    <img src="/sipcms/images/news-1.jpg" alt="" />
							    <span class="date">06.06.11, 15:03</span>
							    <span class="title">Lorem Ipsum - это текст-"рыба", часто используемый в печати.</span>					
						    </a>
</li>			
                    </ul>
			</div>
		
		</div>
		<div class="bottom_block_2">
			<h1>Сервис</h1>	
			<ul>
				<li class="pngf"><a href="#">Lorem Ipsum - это текст-"рыба"</a></li>
				<li class="pngf"><a href="#">Lorem Ipsum является стандартной</a></li>
				<li class="pngf"><a href="#">В то время некий безымянный печатник</a></li>
				<li class="pngf"><a href="#">Lorem Ipsum не только успешно пережил</a></li>
				<li class="pngf"><a href="#">Его популяризации в новое время послужили </a></li>
				<li class="last pngf"><a href="#">Более недавнее время, программы</a></li>			
			</ul>	
		</div>		
		<div class="bottom_block_4">
			<ul>
				<li class="pngf"><a href="#"><img src="/sipcms/images/soc-1.png" alt="" class="pngf" /></a></li>
				<li class="pngf"><a href="#"><img src="/sipcms/images/soc-2.png" alt="" class="pngf" /></a></li>
				<li class="pngf"><a href="#"><img src="/sipcms/images/soc-3.png" alt="" class="pngf" /></a></li>
				<li class="pngf"><a href="#"><img src="/sipcms/images/soc-4.png" alt="" class="pngf" /></a></li>
				<li class="pngf"><a href="#"><img src="/sipcms/images/soc-5.png" alt="" class="pngf" /></a></li>
				<li class="last pngf"><a href="#"><img src="/sipcms/images/soc-6.png" class="pngf" alt="" /></a></li>			
			</ul>		
		</div>	  
	</div></div></div>
	<!--  end BOTTOM  -->
	  
	<div class="clear"></div>
	<div class="empty"></div>	  
	
</div>
	<!--  end WRAPPERS  -->


<!--  FOOTER  -->	
<div id="footer">
	<span class="copy">2011 г. “Starsfon“. WWW. STARSFON.ru. Все права защищены.</span>
</div>
<!--  end FOOTER  -->	
<?php
}else{
    ?>

    
	  </div>
	  <!--  end CONTAINER  -->
	  
	<div class="clear"></div>
	<div class="empty"></div>	  
	
	</div>
	<!--  end WRAPPERS  -->

<!--  FOOTER  -->	
<div id="footer">
		
</div>
<!--  end FOOTER  -->	

<?php
}
echo View::factory('sipcms/_popup');
?>

</body>

</html>