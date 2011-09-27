<?php

/** * *************
 * Author: Fenix
 * Year: 2011
 */

class Model_Sipfunction{
    
    public function gen_password($length)
    {
        $arr = array(
            'a','b','c','d','e','f',
            'g','h','i','j','k','l',
            'm','n','o','p','r','s',
            't','u','v','x','y','z',
            'A','B','C','D','E','F',
            'G','H','I','J','K','L',
            'M','N','O','P','R','S',
            'T','U','V','X','Y','Z',
            '1','2','3','4','5','6',
            '7','8','9','0'
        );
        
        $pass = '';
        for($i=0; $i<$length; $i++)
        {
            $pass .= $arr[mt_rand(0, count($arr) - 1)];
        }
        
        return $pass;
    }
    
    public function sendmail($to, $from, $subject, $message, $html = FALSE)
    {
        try
        {
                $count = Email::send($to, $from, $subject, $message, $html);
                return TRUE;
        }
        catch (Exception $e)
        {
                echo $e->getMessage();
                return FALSE;
        }
    }
    
    public static function get_time()
    {
        $auth = Auth::instance();
        $id = $auth->get_user();
        $user = ORM::factory('sipusers',array('id'=>$id));
        if(!$user->loaded())
        {
            $sdvig = '+4';
        }else{
            $sdvig = !empty($user->time_pos) ? $user->time_pos : '+4';
        }
        $time = time();
        if(mb_substr($sdvig,0,1) == "+")
        {
            $sdvig = str_replace("+", '', $sdvig);
            $new_time = time() + (Date::HOUR * $sdvig);
        }elseif(mb_substr($sdvig,0,1) == "-")
        {
            $sdvig = str_replace("-", '', $sdvig);
            $new_time = time() - (Date::HOUR * $sdvig);
        }
        return $new_time;
        
        
    }
    
}
