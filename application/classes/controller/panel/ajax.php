<?php defined('SYSPATH') or die('No direct script access.');

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Controller_Panel_Ajax extends Controller{
    
    public function action_hash_url()
    {
        $url = Arr::get($_POST,'url',null);
        
        switch($url)
        {
            case"/panel/news":
                $view = View::factory('sipcms/panel/news_body');
                break;
            default:
                $view = View::factory('sipcms/panel/index_body');
                break;
        }
        
        echo $view;
    }
    
    public function action_news_publication()
    {
        $val = Arr::get($_POST,'val',null);
        echo print_r($val,TRUE);
    }
    
    public function action_news_nopublication()
    {
        $val = Arr::get($_POST,'val',null);
        echo print_r($val,TRUE);
    }
    
}
