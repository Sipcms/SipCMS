<!--  CONTENT  -->
<div id="content">	    
    <div id="text">
        <?=Form::open('/login/fpassword_step3')?>
        На указанную почту был отправлен код подтверждения, для смены пароля введите его в поле ниже!<br/>
        Код потверждения:<input name="code" type="text"/><br/>
        <input value="Отправить" type="submit" name="submit_step2"/>
        <?=Form::close()?>
    </div>	      
</div>
<!--  end CONTENT  -->
