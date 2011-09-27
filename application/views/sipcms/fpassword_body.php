<!--  CONTENT  -->
<div id="content">	    
    <div id="text">
        <?php
        if(isset($err))
        {
            echo $err.'<br/>';
        }
        ?>
        <?=Form::open('/login/fpassword_step2')?>
        E-Mail:<input name="mail" type="text"/><br/>
        <input value="Отправить" type="submit" name="submit_step1"/>
        <?=Form::close()?>
    </div>	      
</div>
<!--  end CONTENT  -->
