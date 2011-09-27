<!--  CONTENT  -->
<div id="content">	    
  <div id="text">
			
<?php
if(isset($error))
{
    ?>
    Ошибка авторизации<br/>
    <?php
}
?>
<?php
echo Form::open('login',array('id'=>'form_auth'));
?>
Логин:<input style="border: 1px solid;" type="text" name="login" /><br/>
Пароль:<input style="border: 1px solid;" type="password" name="password" /><br/>

<input type="submit" value="submit" name="submit" /><br/>
<a href="/login/fpassword">Забыли пароль?</a>
<?php
echo Form::close();
?>

  </div>	      
</div>
<!--  end CONTENT  -->
