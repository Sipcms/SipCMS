<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Registration extends Sip_Controller {
    
    
    public function before() {
        parent::before();
        if($this->auth->logged_in())
        {
            Request::initial()->redirect();
        }
    }

    public function action_index()
    {
        if(isset($_POST['submit']))
        {
            $reg_arr = array(
                'mail' => Arr::get($_POST,'mail',false),
            );
            $reg = new Model_Sipreguser();
            if($reg->create_user($reg_arr))
            {
                $this->data['regok'] = TRUE;
                Request::initial()->redirect();
            }else{
                $this->data['reger'] = $reg->errors;
            }
            
        }
        $this->template->head = View::factory('sipcms/head', $this->data);
        $this->template->content = View::factory('sipcms/registration_body', $this->data);
        $this->template->foot = View::factory('sipcms/foot', $this->data);
    }


} // End Welcome
