<?php

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Controller_Getconfig extends Sip_Controller{
    
    protected $_KEY = '';


    public function action_index()
    {
        $this->template->head = View::factory('sipcms/head', $this->data);
            $this->template->content = View::factory('sipcms/login_body', $this->data);
            $this->template->foot = View::factory('sipcms/foot', $this->data);
    }
    
}