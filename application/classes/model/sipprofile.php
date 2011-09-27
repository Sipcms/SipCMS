<?php defined('SYSPATH') or die('No direct script access.');

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Model_Sipprofile{
    
    public function set_data($data)
    {
        $auth = Auth::instance();
        $user = ORM::factory('sipusers', array('id'=>$auth->get_user()));
        if(!$user->loaded())
        {
            return FALSE;
        }
        $user->fio = $data['fio'];
        $user->language = $data['lang'];
        $user->pol = $data['pol'];
        $user->data_ro = $data['data_rog'];
        $user->phone = $data['tel'];
        $user->time_pos = $data['GMT'];
        $user->country = $data['country'];
        $user->city = $data['city'];
        $user->organiz = $data['organ'];
        
        $user->save();
        return TRUE;
    }
    
    public function get_data()
    {
        $auth = Auth::instance();
        return ORM::factory('sipusers', array('id'=>$auth->get_user()));
    }
    
}
