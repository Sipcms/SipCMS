<?php

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Model_Sipstat{
    
    public static function set_stat_auth()
    {
        $soft = Request::user_agent('browser');
        $ip = Request::$client_ip;
        $type = 'auth';
        $time = time();
        $info = Request::user_agent(array('browser', 'platform','version'));
        $query = "INSERT INTO `stat` SET
            `type` = 'auth',
            `ip` = '".Request::$client_ip."',
            `soft` = '[".$info['platform']."]  ".$info['browser']."(".$info['version'].")',
            `time` = '".Model_Sipfunction::get_time()."';
            ";
        $db = Database::instance();
        $db->query(Database::INSERT,$query);
        return true;
    }
    
}