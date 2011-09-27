<?php defined('SYSPATH') or die('No direct script access.');

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Controller_Ajax extends Controller{
    
    public function action_set_themes()
    {
        $theme = Arr::get($_POST,'themes',null);
        $auth = Auth::instance();
        $user = ORM::factory('sipusers', array('id'=>$auth->get_user()));
        if(!$user->loaded())
        {
            return FALSE;
        }
        $user->themes = $theme;
        $user->save();
        return true;
    }
    
}
