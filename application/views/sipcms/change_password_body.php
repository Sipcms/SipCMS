<div id="content">	    
    <div id="text">
        <?=Form::open('cabinet/change_password')?>
        Старый пароль:<input name="oldpass"/><br/>
        Новый пароль:<input name="newpass" /><br/>
        Повторите новый пароль:<input name="renewpass" /><br/>
        <input value="Изменить" name="submit" type="submit" />
        <?=Form::close()?>
    </div>
</div>