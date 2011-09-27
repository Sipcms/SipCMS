<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Panel_News extends Sip_Sipadmin
{
    public function action_index()
    {
        $this->template->content = View::factory('sipcms/panel/news_body', $this->data);
    }
    
    public function action_add_news()
    {
        $this->template->content = View::factory('sipcms/panel/news_add', $this->data);
    }
    
    public function action_publication()
    {
        
    }
}