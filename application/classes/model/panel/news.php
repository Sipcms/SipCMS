<?php

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Model_Panel_News extends ORM{
    
    protected $_table_name = 'news';
    
    public static function publication($id)
    {
        $db = Database::instance();
        if(is_array($id))
        {
            foreach($id as $v)
            {
                $db->query(Database::UPDATE,"UPDATE `news` SET `state` = '1' WHERE `id` = '$v' AND `state` = '0' LIMIT 1");
            }
        }
    }
    
    public function rules()
    {
            return array(
                'state' => array(
                    array('not_empty'),
                    array('digit'),
                ),
            );
    }
}