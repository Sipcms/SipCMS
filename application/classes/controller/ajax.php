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
    
    public function action_convert_currency()
    {
        $in = Arr::get($_POST,'in',null);
        $out = Arr::get($_POST,'out',null);
        $new_val = Model_Sipstarsfon::convert_currency($out);
        echo json_encode(array('newval' => $new_val,'in_' => $in, 'out' => $out));
    }
    
    public function action_get_balance()
    {
        $auth = Auth::instance();
        $user = ORM::factory('sipusers', array('id'=>$auth->get_user()));
        if(!$user->loaded())
        {
            return FALSE;
        }
        echo Model_Sipstarsfon::get_balanc($user->email);
    }


    public function action_test()
    {
        echo json_encode(array('status' => 'Прошло'));
    }
    
    public function action_check_mail()
    {
        $text = Arr::get($_POST,'mail',null);
        $return = array();
        $valid = Valid::email($text);
        
        $user = ORM::factory('sipusers',array('email' => $text));
        if($user->loaded())
        {
            $return['status'] = false; 
            $return['text'][] = 'Пользователь с данным E-Mail уже существует'; 
        }
        
        if(!$valid)
        {
            $return['status'] = false; 
            $return['text'][] = 'Не правельно введен E-Mail'; 
        }
        if($valid && !$user->loaded())
        {
            $return['status'] = true; 
            unset($return['text']); 
        }
        
        echo json_encode($return);
        
    }
    
    public function action_registr()
    {
        $return = array();
        if(isset($_POST['submit']))
        {
            $reg_arr = array(
                'mail' => Arr::get($_POST,'mail',false),
            );
            $reg = new Model_Sipreguser();
            if($reg->create_user($reg_arr))
            {
                $return['status'] = TRUE;
                //Request::initial()->redirect();
            }else{
                $return['status'] = FALSE;
                $return['error'] = $reg->errors;
            }
            
        }
        echo json_encode($return);
    }
    
}
