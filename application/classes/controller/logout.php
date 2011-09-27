<?php

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Controller_Logout extends Sip_Controller{
    
    public function action_index()
    {
        $this->auth->logout();
        Request::initial()->redirect('');
    }
    
}