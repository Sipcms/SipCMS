<?php

/** * *************
 * Author: Fenix
 * Year: 2011
 */

class Model_Sipreguser{
    
    public $errors = array();
    
    public function create_user($data = array())
    {
        $auth = Auth::instance();
        $user = new Model_Sipusers();
        $func = new Model_Sipfunction();
        $sf = new Model_Sipstarsfon();
        $password = $func->gen_password(8);
        if(!empty($data))
        {
            $user->username = $data['mail'];
            $user->email = $data['mail'];
            $user->password = $auth->hash_password($password);
            
            try{
                $user->save();
                
                // Узнаем id созданного пользователя
                $usert = ORM::factory('sipusers', array('email'=>$data['mail']));
                $userid = $usert->id;

                //Сохранение роли
                $addrole = new Model_Siproles();
                $addrole->user_id = $userid;
                $addrole->role_id = 1;
                $addrole->save();
                
                $sf->create_user($data['mail'],$password);
                $subject = 'Регистрация на сайте starsfon.ru';
                $message = <<<MAIL
                Спасибо за регистрацию на сайте starsfon.ru
                Ваш логин: {$data['mail']}
                Ваш пароль: $password
MAIL;
                $func->sendmail($data['mail'], 'support@starsfon.ru', $subject, $message);
                
                return true;
            }catch(ORM_Validation_Exception $e){
                $this->errors = $e->errors('validation');
                return false;
            }
        }
    }
    
    public function get_new_fpassword($mail)
    {
        $user =  ORM::factory('sipusers', array('email'=>$mail));
        $func = new Model_Sipfunction();
        $code = $func->gen_password(15);
        
        if(!$user->loaded())
        {
            return false;
        }
        $user->forget_password_key = $code;
        $user->forget_password_time = time();
        $user->save();
        
        $subject = 'Востановление пароля на сайте starsfon.ru';
        $message = View::factory('sipcms/_fpassword_body', array('code' => $code));
        $func->sendmail($mail, 'support@starsfon.ru', $subject, $message,TRUE);
        return true;
    }
    
    public function set_new_fpassword($code)
    {
        $user = ORM::factory('sipusers',array('forget_password_key'=>$code));
        $sf = new Model_Sipstarsfon();
        if(!$user->loaded())
        {
            return false;
        }
        
        $func = new Model_Sipfunction();
        $new_pass = $func->gen_password(8);
        
        $auth = Auth::instance();
        $user->password = $auth->hash_password($new_pass);
        $user->forget_password_key = NULL;
        $user->forget_password_time = NULL;
        
        $user->save();
        $mail = $user->email;
        $sf->set_new_fpassword($mail, $new_pass);
        $subject = 'Новый пароль на сайте starsfon.ru';
        $message = <<<MAIL
Ваш логин: $mail
Ваш новый пароль: $new_pass
MAIL;
        $func->sendmail($mail, 'support@starsfon.ru', $subject, $message);
        return true;
    }
    
    public function new_password($oldpass,$newpass,$renewpass)
    {
        $auth = Auth::instance();
        $id = $auth->get_user();
        $sf = new Model_Sipstarsfon();
        $func = new Model_Sipfunction();
        $user = ORM::factory('sipusers',array('id'=>$id));
        if(!$user->loaded())
        {
            return FALSE;
        }
        
        $hash_old = $auth->hash_password($oldpass);
        if($hash_old !== $user->password)
        {
            return FALSE;
        }
        if($newpass !== $renewpass)
        {
            return FALSE;
        }
        $user->password = $auth->hash_password($newpass);
        $user->save();
        
        $mail = $user->email;
        $sf->set_new_fpassword($mail, $newpass);
        $subject = 'Новый пароль на сайте starsfon.ru';
        $message = <<<MAIL
Ваш логин: $mail
Ваш новый пароль: $newpass
MAIL;
        $func->sendmail($mail, 'support@starsfon.ru', $subject, $message);
        return true;
    }
    
}