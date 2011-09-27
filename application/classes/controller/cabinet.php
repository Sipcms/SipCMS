<?php

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Controller_Cabinet extends Sip_Sipcabinet{
    
    public function action_index()
    {
        
    }
    
    public function action_change_password()
    {
        if(isset($_POST['submit']))
        {
            $oldpass = Arr::get($_POST,'oldpass',NULL);
            $newpass = Arr::get($_POST,'newpass',NULL);
            $renewpass = Arr::get($_POST,'renewpass',NULL);
            $reg = new Model_Sipreguser();
            $reg->new_password($oldpass, $newpass, $renewpass);
            Request::initial()->redirect();
        }else{
            $this->template->head = View::factory('sipcms/head', $this->data);
            $this->template->content = View::factory('sipcms/change_password_body', $this->data);
            $this->template->foot = View::factory('sipcms/foot', $this->data);
        }
    }
    
    public function action_change_information()
    {
        $profile = new Model_Sipprofile();
        $this->data['user'] = $profile->get_data();
        if(isset($_POST['submit']))
        {
            
            $arr['fio'] = Arr::get($_POST,'fio',NULL);
            $arr['lang'] = Arr::get($_POST,'lang',NULL);
            $arr['pol'] = Arr::get($_POST,'pol',NULL);
            $arr['data_rog'] = Arr::get($_POST,'data_rog',NULL);
            $arr['tel'] = Arr::get($_POST,'tel',NULL);
            $arr['GMT'] = Arr::get($_POST,'GMT',NULL);
            $arr['country'] = Arr::get($_POST,'country',NULL);
            $arr['city'] = Arr::get($_POST,'city',NULL);
            $arr['organ'] = Arr::get($_POST,'organ',NULL);
            $profile->set_data($arr);
            $this->data['user'] = $profile->get_data();
        }
        
        $this->template->head = View::factory('sipcms/head', $this->data);
        $this->template->content = View::factory('sipcms/change_information_body', $this->data);
        $this->template->foot = View::factory('sipcms/foot', $this->data);
    }
    
}