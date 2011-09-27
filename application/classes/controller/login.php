<?php

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Controller_Login extends Sip_Controller{
    
    public function action_index()
    {
        if($this->auth->logged_in())
        {
            Request::initial()->redirect('');
        }else{            
            $login = Arr::get($_POST, 'login', FALSE);
            $password = Arr::get($_POST, 'password', FALSE);
            if(isset($_POST['submit']))
            {
                if($this->auth->login($login, $password))
    {                   Model_Sipstat::set_stat_auth();		
                        $auth_redirect = $this->session->get('auth_redirect', '');
                        $this->session->delete('auth_redirect');

                        Request::initial()->redirect($auth_redirect);
                }
                else
                {
                        $this->data['error'] = 'Ошибка авторизации';
                }  
            }
            $this->template->head = View::factory('sipcms/head', $this->data);
            $this->template->content = View::factory('sipcms/login_body', $this->data);
            $this->template->foot = View::factory('sipcms/foot', $this->data);
        
        }
    }
    
    public function action_fpassword()
    {
        if(!$this->auth->logged_in())
        {
            $this->data['err'] = $this->session->get('nomail',FALSE);
            $this->template->head = View::factory('sipcms/head', $this->data);
            $this->template->content = View::factory('sipcms/fpassword_body', $this->data);
            $this->template->foot = View::factory('sipcms/foot', $this->data);
        }
    }
    
    public function action_fpassword_step2()
    {
        $reg = new Model_Sipreguser();
        if(!$this->auth->logged_in())
        {
            if(isset($_POST['submit_step1']))
            {                
                $mail = Arr::get($_POST,'mail',FALSE);
                
                if(!empty($mail))
                {
                    $reg->get_new_fpassword($mail);
                }else{
                    $this->session->set('nomail','Вы не ввели E-Mail');
                    Request::initial()->redirect('login/fpassword');
                    
                }
                
            }
            $this->template->head = View::factory('sipcms/head', $this->data);
            $this->template->content = View::factory('sipcms/fpassword_step2_body', $this->data);
            $this->template->foot = View::factory('sipcms/foot', $this->data);
        }
    }
    public function action_fpassword_step3()
    {
        $reg = new Model_Sipreguser();
        if(!$this->auth->logged_in())
        {
            if(isset($_POST['submit_step2']))
            {
                $code = Arr::get($_POST,'code',FALSE);
                if(!empty($code))
                {
                    if($reg->set_new_fpassword($code))
                    {
                        Request::initial()->redirect('login');
                    }else{
                        $this->data['err'] = 'Проверочный код введен не верно';
                    }
                }
            }
            $this->template->head = View::factory('sipcms/head', $this->data);
            $this->template->content = View::factory('sipcms/fpassword_step3_body', $this->data);
            $this->template->foot = View::factory('sipcms/foot', $this->data);
        }
    }
    
    public function action_fpassword_code()
    {
        $code = Request::initial()->param('id',NULL);
        if(!$this->auth->logged_in())
        {
            if(!empty($code))
            {
                $reg = new Model_Sipreguser();
                if($reg->set_new_fpassword($code))
                {
                    Request::initial()->redirect('login');
                }else{
                    $this->data['err'] = 'Проверочный код введен не верно';
                }
            }
        }
    }
    
}