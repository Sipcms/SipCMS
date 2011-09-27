<?php
$db = Database::instance();
?>
<div id="content">	    
    <div id="text">
        <style type="text/css">
            form input, select{
                border: 1px solid;
                margin: 5px;
            }
        </style>
        
        <?=Form::open('cabinet/change_information')?>
        <?=__('inform_fio')?>:<input name="fio" value="<?=(empty($user->fio) ? '' : $user->fio)?>"/><br/>
        Язык: 
        <?php
        $query_language = "SELECT * FROM `lang`";
        $result = $db->query(Database::SELECT, $query_language, TRUE);
        ?>
        <select name="lang">
            <?php
            foreach($result as $val)
            {
                ?>
                <option value="<?=$val->i18n?>" <?=($user->language == $val->i18n ? 'selected="selected"' : '')?>><?=$val->name?></option>
                <?php
            }
            ?>
        </select><br/>
        Пол: 
        <select name="pol">
            <option value="M" <?=($user->pol == 'M' ? 'selected="selected"' : '')?>>Мужской</option>
            <option value="G" <?=($user->pol == 'G' ? 'selected="selected"' : '')?>>Женский</option>
        </select><br/>
        Дата рождения:<input name="data_rog" value="<?=(empty($user->data_ro) ? '' : $user->data_ro)?>" /><br/>
        Телефон:<input name="tel" value="<?=(empty($user->phone) ? '' : $user->phone)?>" /><br/>
        Часовой пояс:
        <select name="GMT">
            <option value="+12" <?=($user->time_pos == '+12' ? 'selected="selected"' : '')?>>Камчатка, Магадан, Сахалин(UTC/GMT+12)</option>
            <option value="+11" <?=($user->time_pos == '+11' ? 'selected="selected"' : '')?>>Владивосток(UTC/GMT+11)</option>
            <option value="+10" <?=($user->time_pos == '+10' ? 'selected="selected"' : '')?>>Якутск(UTC/GMT+10)</option>
            <option value="+9" <?=($user->time_pos == '+9' ? 'selected="selected"' : '')?>>Иркутск(UTC/GMT+9)</option>
            <option value="+8" <?=($user->time_pos == '+8' ? 'selected="selected"' : '')?>>Красноярск(UTC/GMT+8)</option>
            <option value="+7" <?=($user->time_pos == '+7' ? 'selected="selected"' : '')?>>Омск(UTC/GMT+7)</option>
            <option value="+6" <?=($user->time_pos == '+6' ? 'selected="selected"' : '')?>>Екатеринбург(UTC/GMT+6)</option>
            <option value="+4" <?=($user->time_pos == '+4' ? 'selected="selected"' : '')?>>Москва(UTC/GMT+4)</option>
            <option value="+3" <?=($user->time_pos == '+3' ? 'selected="selected"' : '')?>>Минск(UTC/GMT+3)</option>
            <option value="+2" <?=($user->time_pos == '+2' ? 'selected="selected"' : '')?>>Париж(UTC/GMT+2)</option>
            <option value="+1" <?=($user->time_pos == '+1' ? 'selected="selected"' : '')?>>Лондон(UTC/GMT+1)</option>
            <option value="-1" <?=($user->time_pos == '-1' ? 'selected="selected"' : '')?>>Среднеатлантическое время(UTC/GMT-1)</option>
            <option value="-2" <?=($user->time_pos == '-2' ? 'selected="selected"' : '')?>>Аргентина, Буэнос-Айрес(UTC/GMT-2)</option>
            <option value="-3" <?=($user->time_pos == '-3' ? 'selected="selected"' : '')?>>Канада(UTC/GMT-3)</option>
            <option value="-4" <?=($user->time_pos == '-4' ? 'selected="selected"' : '')?>>США - Нью-Йорк(UTC/GMT-4)</option>
            <option value="-5" <?=($user->time_pos == '-5' ? 'selected="selected"' : '')?>>Чикаго(UTC/GMT-5)</option>
            <option value="-6" <?=($user->time_pos == '-6' ? 'selected="selected"' : '')?>>Денвер(UTC/GMT-6)</option>
            <option value="-7" <?=($user->time_pos == '-7' ? 'selected="selected"' : '')?>>США, Лос-Анджелес(UTC/GMT-7)</option>
        </select><br/>
        Страна:
        <?php
        $query_country = "SELECT * FROM `country`";
        $result = $db->query(Database::SELECT, $query_country, TRUE);
        ?>
        <select name="country">
            <?php
            foreach($result as $val)
            {
                ?>
                <option value="<?=$val->id_country?>" <?=($user->country == $val->id_country ? 'selected="selected"' : '')?>><?=$val->name?></option>
                <?php
            }
            ?>
        </select><br/>
        Город:<input name="city" value="<?=(empty($user->city) ? '' : $user->city)?>" /><br/>
        Организация:<input name="organ" value="<?=(empty($user->organiz) ? '' : $user->organiz)?>" /><br/>
        <input value="Изменить" name="submit" type="submit" />
        <?=Form::close()?>
    </div>
</div>