<?php

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Controller_Getconfig extends Controller{
    
    protected $_KEY = 'zEhCNdBcJKyqFoIiDP5eX0apoab3LsA2';


    public function action_index()
    {
        $sig = Arr::get($_POST,'sig',null); // Подпись
        $phone = Arr::get($_POST,'phone',null); // Номер телефона
        $uid = Arr::get($_POST,'uid',null); // ID пользователя
        
        $user = ORM::factory('sipusers',array('id' => $uid));
        if(!$user->loaded())
        {
            return false;
        }
        
        $num = Model_Sipstarsfon::get_number($user->email);
        if($num !== $phone)
        {
            return false;
        }
        $_sig = md5($user->id.$num.$this->_KEY);
        if($sig !== $_sig)
        {
            return false;
        }
        $password = Model_Sipstarsfon::get_password($user->email);
        echo <<<XML
<?xml version="1.0"?>
<config>
	<proxy>78.41.28.180</proxy>
	<phone>$num</phone>
	<username>$num</username>
	<password>$password</password>
	<server>78.41.28.180</server>
	<rtmpurl>rtmp://78.41.28.180/sip</rtmpurl>
	<isrv>http://sipcms.infcms.ru/phone/get_stat</isrv>
</config>
XML;
    }
    
    public function action_vk()
    {
        $sig = Arr::get($_POST,'sig',null); // Подпись
        $phone = Arr::get($_POST,'phone',null); // Номер телефона
        
        $_sig = md5($phone.$this->_KEY);
        if($sig !== $_sig)
        {
            return false;
        }
        $password = Model_Sipstarsfon::get_password('vkontakte');
        echo <<<XML
<?xml version="1.0"?>
<config>
	<proxy>78.41.28.180</proxy>
	<phone>$phone</phone>
	<username>$phone</username>
	<password>$password</password>
	<server>78.41.28.180</server>
	<rtmpurl>rtmp://78.41.28.180/sip</rtmpurl>
	<isrv>http://sipcms.infcms.ru/phone/get_stat</isrv>
</config>
XML;
    }
    
}