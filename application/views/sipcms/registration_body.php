<!--  CONTENT  -->
<div id="content">	    
  <div id="text">
			
<?php
if(isset($regok))
{
    ?>
    <div id="notice_reg">Регистрация прошла успшно</div>
    <?php
}
if(isset($reger))
{
    foreach($reger as $item){ ?>
            <p style="color:red;"><?=$item?></p>
    <?php }
}
?>
<?php
echo Form::open('registration',array('id'=>'reg_form'));
?>
Е-Mail:<br/>
<input name="mail" type="text" value="<?=Arr::get($_POST,'mail','')?>" /><br/>
<input value="Отправить" name="submit" type="submit" />
<?php
echo Form::close();
?>	
  </div>	      
</div>
<!--  end CONTENT  -->
