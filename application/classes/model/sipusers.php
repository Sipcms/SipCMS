<?php defined('SYSPATH') or die('No direct script access.');

class Model_Sipusers extends ORM {
    
    protected $_table_name = 'users';
    
    public function username_unique($username)
    {
        $db = Database::instance();

        if ($this->id)
        {
            $query =
                'SELECT id
                FROM users
                WHERE id != '.$this->id.' AND email = '.$db->escape($username);
        }
        else
        {
            $query =
                'SELECT id
                FROM users
                WHERE email = '.$db->escape($username);
        }

        $result = $db->query(Database::SELECT, $query, FALSE)->as_array();
        if (count($result) > 0)
        {
                return FALSE;
        }
        else
        {
                return TRUE;
        }   
    }
    public function rules()
    {
            return array(
                'email' => array(
                    array('not_empty'),
                    array('email'),
                    array(array($this, 'username_unique')),
                ),
            );
    }
    
}