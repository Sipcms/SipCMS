<?php

/** * *************
 * Author: Fenix
 * Year: 2011
 */
class Model_Sipstarsfon{
    
    public function create_user($login,$password)
    {
        $db = Database::instance('starsfon');
        $query_addres = "INSERT INTO `addresses` SET `direction_id` = '1';";
        $result_addres = $db->query(Database::INSERT, $query_addres);
        $new_id_addres = $result_addres[0];
        
        
        $query_taxe = "INSERT INTO `taxes` SET
            `tax1_name` = 'Tax',
            `total_tax_name` = 'Tax',
            `compound_tax` = '1';";
        $result_taxe = $db->query(Database::INSERT,$query_taxe);
        $new_id_taxe = $result_taxe[0];
        
        $query_agree = "SELECT MAX(`agreement_number`) as `agreement_number_max` FROM `users`";
        $result_agree = $db->query(Database::SELECT,$query_agree);
        $agree = $result_agree[0]['agreement_number_max'];
        $new_agree = intval($agree + 1);
        $count_agree = mb_strlen($new_agree);
        
        switch($count_agree)
        {
            case "1":
                $res_agree = '000000000'.$new_agree;
                break;
            case "2":
                $res_agree = '00000000'.$new_agree;
                break;
            case "3":
                $res_agree = '0000000'.$new_agree;
                break;
            case "4":
                $res_agree = '000000'.$new_agree;
                break;
            case "5":
                $res_agree = '00000'.$new_agree;
                break;
            case "6":
                $res_agree = '0000'.$new_agree;
                break;
            case "7":
                $res_agree = '000'.$new_agree;
                break;
            case "8":
                $res_agree = '00'.$new_agree;
                break;
            case "9":
                $res_agree = '0'.$new_agree;
                break;
            case "10":
                $res_agree = $new_agree;
                break;
        }
        $query_users = "INSERT INTO `users` SET
            `username` = '".$login."',
            `password` = '".sha1($password)."',
            `usertype` = 'user',
            `calltime_normative` = '3',
            `balance` = '0',
            `lcr_id` = '3',
            `tariff_id` = '15',
            `show_billing_info` = '1',
            `primary_device_id` = '0',
            `credit` = '-1',
            `agreement_number` = '".$res_agree."',
            `agreement_date` = '".date("Y-m-d")."',
            `taxation_country` = '1',
            `address_id` = '".$new_id_addres."',
            `vouchers_disabled_till` = '2000-01-01 00:00:00',
            `cyberplat_active` = '1',
            `block_at` = '2009-01-01',
            `block_at_conditional` = '15',
            `tax_id` = '".$new_id_taxe."',
            `invoice_zero_calls` = '1';";
        
        $result_users = $db->query(Database::INSERT,$query_users);
        $new_id_users = $result_users[0];
        
        $query_dev_group = "INSERT INTO `devicegroups` SET
            `user_id` = '".$new_id_users."',
            `address_id` = '".$new_id_addres."',
            `name` = 'primary',
            `added` = '".date("Y-m-d H:i:s")."',
            `primary` = '1';";
        $result_dev_group = $db->query(Database::INSERT,$query_dev_group);
        $new_id_dev_group = $result_dev_group[0];
        
        
        $query_devi = "SELECT MAX(`name`) as `name_max`, MAX(`accountcode`) as `accountcode_max` FROM `devices` WHERE `context` = 'mor_local'";
        $result_devi = $db->query(Database::SELECT,$query_devi);
        $devi = $result_devi[0]['name_max'];
        $acc = $result_devi[0]['accountcode_max'];
        $new_devi = intval($devi + 1);
        $new_acc = intval($acc + 1);
        
        $query_dev = "INSERT INTO `devices` SET
            `name` = '".$new_devi."',
            `host` = 'dynamic',
            `secret` = '".$password."',
            `context` = 'mor_local',
            `port` = '5060',
            `accountcode` = '".$new_acc."',
            `callerid` = '<".$new_devi.">',
            `extension` = '".$new_devi."',
            `username` = '".$new_devi."',
            `device_type` = 'SIP',
            `user_id` = '".$new_id_users."',
            `works_not_logged` = '1',
            `transfer` = 'no',
            `disallow` = 'all',
            `allow` = 'alaw;ulaw;g729',
            `deny` = '0.0.0.0/0.0.0.0',
            `permit` = '0.0.0.0/0.0.0.0',
            `nat` = 'yes',
            `qualify` = '1000',
            `canreinvite` = 'no',
            `devicegroup_id` = '".$new_id_dev_group."',
            `dtmfmode` = 'rfc2833',
            `trustrpid` = 'no',
            `sendrpid` = 'no',
            `progressinband` = 'no',
            `videosupport` = 'no',
            `location_id` = '1',
            `description` = '".$login."',
            `pin` = '".$this->_generate_pin()."',
            `tell_rtime_when_left` = '60',
            `repeat_rtime_every` = '60',
            `t38pt_udptl` = 'no',
            `promiscredir` = 'no',
            `timeout` = '60',
            `faststart` = 'yes',
            `h245tunneling` = 'yes';";
        
        $result_dev = $db->query(Database::INSERT,$query_dev);
        $new_id_dev = $result_dev[0];
        
        
        $query_codec[0] = "INSERT INTO `devicecodecs` SET
            `device_id` = '".$new_id_dev."',
            `codec_id` = '1';";
        $query_codec[1] = "INSERT INTO `devicecodecs` SET
            `device_id` = '".$new_id_dev."',
            `codec_id` = '2';";
        $query_codec[2] = "INSERT INTO `devicecodecs` SET
            `device_id` = '".$new_id_dev."',
            `codec_id` = '5';";
        $result_codec = $db->query(Database::INSERT,$query_codec[0]);
        $result_codec = $db->query(Database::INSERT,$query_codec[1]);
        $result_codec = $db->query(Database::INSERT,$query_codec[2]);
        return array('id_addresses' => $new_id_addres, 'id_taxes' => $new_id_taxe, 'id_users' => $new_id_users,'id_dev_group' => $new_id_dev_group,'id_devices' => $new_id_dev);
    }
    
    private function _generate_pin()
    {
        $arr = array(
            '0',
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9'
        );
        $pin = '';
        for($i=0; $i<6; $i++)
        {
            $pin .= $arr[mt_rand(0,count($arr)-1)];
        }
        return $pin;
    }
    
    public function set_new_fpassword($mail,$pass)
    {
        $db = Database::instance('starsfon');
        $query_1 = "UPDATE `users` SET `password` = '".sha1($pass)."' WHERE `username` = '".$mail."' LIMIT 1";
        $query_2 = "UPDATE `devices` SET `secret` = '".$pass."' WHERE `description` = '".$mail."' LIMIT 1";
        
        $db->query(Database::UPDATE, $query_1);
        $db->query(Database::UPDATE, $query_2);
        
        return TRUE;
    }
    
    public static function get_number($login)
    {
        $db = Database::instance('starsfon');
        $query = "SELECT `name` FROM `devices` WHERE `description` = '".$login."' LIMIT 1";
        $result = $db->query(Database::SELECT,$query);
        return $result[0]['name'];
    }
    
    public static function get_balanc($login)
    {
        $db = Database::instance('starsfon');
        $query = "SELECT `balance` FROM `users` WHERE `username` = '".$login."' LIMIT 1";
        $result = $db->query(Database::SELECT,$query);
        return $result[0]['balance'];
    }
    
    public static function get_price($num)
    {
        
        $num = abs(intval($num));
        $stav = 30;
        $db = Database::instance('starsfon');
        
        $query = "SELECT `user_id` FROM `devices` WHERE `username` = '".$num."' LIMIT 1";
        $res = $db->query(Database::SELECT,$query);
        
        $query = "SELECT `tariff_id` FROM `users` WHERE `id` = '".$res[0]['user_id']."' LIMIT 1";
        $res = $db->query(Database::SELECT,$query);
        
        $query = "SELECT `id`,`destination_id` FROM `rates` WHERE `tariff_id` = '".$res[0]['tariff_id']."'";
        $res = $db->query(Database::SELECT,$query,TRUE);
        $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
        foreach($res as $k=>$req)
        {
            $query_2 = $db->query(Database::SELECT,"SELECT `rate` FROM `ratedetails` WHERE `rate_id` = '".$req->id."'");
            $dist = $db->query(Database::SELECT,"SELECT `prefix`, `direction_code`, `ru_name` FROM `destinations` WHERE `id` = '".$req->destination_id."'");
            $flag = $db->query(Database::SELECT,"SELECT `flag` FROM `flags` WHERE `code` = '".$dist[0]['direction_code']."'");
            
            $rub = round($query_2[0]['rate'] * $stav,2);
            $usd = round($query_2[0]['rate'],2);
$xml .= <<<XML
    <row>
        <name>{$dist[0]['ru_name']}</name>
        <rub>{$rub}</rub>
        <dlr>{$usd}</dlr>
        <img>{$flag[0]['flag']}</img>
    </row>\n
XML;
        }
        $xml .= '</data>';
        return $xml;
    }
    
    public static function get_country()
    {
        $db = Database::instance('starsfon');
        $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n<data>";
        $query = "SELECT * FROM `prefix`";
        $res = $db->query(Database::SELECT,$query,TRUE);
        
        foreach($res as $v)
        {
$xml .= <<<XML
<row>\n
    <name>{$v->ru_name}</name>\n
    <img>{$v->flag}</img>\n
    <prefix>{$v->prefix}</prefix>\n
</row>\n
XML;
        }
        $xml .= '</data>';
        return $xml;
    }
    
    public static function get_phone_book($num)
    {
        $num = abs(intval($num));
        $db = Database::instance('starsfon');
        $query = "SELECT * FROM `phonebook` WHERE `onwer` = '".$num."'";
        $res = $db->query(Database::SELECT,$query,TRUE);
        $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
        foreach($res as $v)
        {
$xml .= <<<XML
<row>
    <id>{$v->id}</id>
    <name>{$v->name}</name>
    <ph>{$v->phone}</ph>
</row>
XML;
        }
        $xml .= '</data>';
        return $xml;
    }
    
    public static function add_phone_book($num,$phone,$name)
    {
        $num = abs(intval($num));
        $db = Database::instance('starsfon');
        $query = "INSERT INTO `phonebook` SET
            `onwer` = '".$num."',
            `name` = '".$name."',
            `phone` = '".$phone."';";
        $db->query(Database::INSERT,$query);
        
        return self::get_phone_book($num);
    }
    
    public static function del_phone_book($num,$uid)
    {
        $num = abs(intval($num));
        $uid = abs(intval($uid));
        $db = Database::instance('starsfon');
        $query = "DELETE FROM `phonebook` WHERE `id` = '".$uid."' AND `onwer` = '".$num."' LIMIT 1";
        $db->query(Database::DELETE,$query);
        
        return self::get_phone_book($num);
    }
    
    public static function update_phone_book($num,$uid,$phone,$name)
    {
        $num = abs(intval($num));
        $uid = abs(intval($uid));
        $db = Database::instance('starsfon');
        $query = "UPDATE `phonebook` SET `name` = '".$name."', `phone` = '".$phone."' WHERE `id` = '".$uid."' LIMIT 1";
        $db->query(Database::UPDATE,$query);
        
        return self::get_phone_book($num);
    }
    
    public static function get_history($num,$oper,$route)
    {
        $num = abs(intval($num));
        $db = Database::instance('starsfon');
        switch($route)
        {
            case "getAllRoute":
                return self::get_all_route($oper,$num);
                break;
            case "getInRoute":
                return self::get_in_route($oper,$num);
                break;
            case "getOutRoute":
                return self::get_out_route($oper,$num);
                break;
            case "getMissRoute":
                return self::get_miss_route($oper,$num);
                break;
        }
    }
    
    public static function get_miss_route($history,$num)
    {
        $query = "SELECT 
            DATE_FORMAT(`calldate`,'%d/%m/%y') AS `calldate_1`, 
            DATE_FORMAT(`calldate`,'%H:%i') AS `calldate_2`, 
            `src`, 
            `billsec` 
                FROM 
            `cdr`  
                WHERE 
            `dst`='".$num."' AND `disposition` = 'NO ANSWER' ";
        if($history == 'getDayHistory')
        {
            // История за день
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getWeekHistory')
        {
            // История за неделю
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::WEEK);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getMonthHistory')
        {
            // История за месяц
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::MONTH);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getAllHistory')
        {
            $query .= " ";
        }
        $query .= " ORDER BY `calldate` DESC";
        $res = $db->query(Database::SELECT,$query,TRUE);
        foreach($res as $v)
        {
            if(!preg_match('#^1#is',$v->dst))
                continue;
            $arr[$v->calldate] = array(
                'calldate_1' => $v->calldate_1,
                'calldate_2' => $v->calldate_2,
                'dst' => $v->src,
                'billsec' => self::parse_time($v->billsec),
                'rate' => '0',
                'price' => '0'
            );
        }
        
        if(!empty($arr))
        {
            rsort($arr);
            $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
        foreach($arr as $val)
        {
$xml .= <<<XML
<row>
    <cdt>{$val['calldate_1']}</cdt>
    <ctm>{$val['calldate_2']}</ctm>
    <nmb>{$val['dst']}</nmb>
    <dur>{$val['billsec']}</dur>
    <tp>{$val['rate']}</tp>
    <sum>{$val['price']}</sum>
</row>
XML;
        }
            $xml .= '</data>';
            unset($arr);
            return $xml;
        }else{
            return false;
        }
    }
    
    public static function get_out_route($history,$num)
    {
        $query = "SELECT 
            DATE_FORMAT(`calldate`,'%d/%m/%y') AS `calldate_1`, 
            DATE_FORMAT(`calldate`,'%H:%i') AS `calldate_2`, 
            `dst`, 
            `billsec` 
                FROM 
            `cdr`  
                WHERE 
            `src`='".$num."' AND `disposition` = 'ANSWERED' ";
        if($history == 'getDayHistory')
        {
            // История за день
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getWeekHistory')
        {
            // История за неделю
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::WEEK);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getMonthHistory')
        {
            // История за месяц
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::MONTH);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getAllHistory')
        {
            $query .= " ";
        }
        $query .= " ORDER BY `calldate` DESC";
        $res = $db->query(Database::SELECT,$query,TRUE);
        foreach($res as $v)
        {
            if(!preg_match('#^1#is',$v->dst))
                continue;
            $arr[$v->calldate] = array(
                'calldate_1' => $v->calldate_1,
                'calldate_2' => $v->calldate_2,
                'dst' => $v->dst,
                'billsec' => self::parse_time($v->billsec),
                'rate' => '0',
                'price' => '0'
            );
        }
        
        $query = "SELECT 
            DATE_FORMAT(`calldate`,'%d/%m/%y') AS `calldate_1`, 
            DATE_FORMAT(`calldate`,'%H:%i') AS `calldate_2`, 
            `dst`, 
            `calldate`, 
            `billsec`, 
            `user_rate`, 
            `user_price` 
                FROM 
            `calls` 
                WHERE 
            `src` = '".$num."'  AND `disposition` = 'ANSWERED'  ";
        if($history == 'getDayHistory')
        {
            // История за день
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getWeekHistory')
        {
            // История за неделю
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::WEEK);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getMonthHistory')
        {
            // История за месяц
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::MONTH);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getAllHistory')
        {
            $query .= " ";
        }
        $res = $db->query(Database::SELECT,$query,TRUE);
        foreach($res as $v)
        {
            $arr[$v->calldate] = array(
                'calldate_1' => $v->calldate_1,
                'calldate_2' => $v->calldate_2,
                'dst' => $v->dst,
                'billsec' => self::parse_time($v->billsec),
                'rate' => round($v->user_rate,2),
                'price' => round($v->user_price,2)
            );
        }
        
        if(!empty($arr))
        {
            rsort($arr);
            $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
        foreach($arr as $val)
        {
$xml .= <<<XML
<row>
    <cdt>{$val['calldate_1']}</cdt>
    <ctm>{$val['calldate_2']}</ctm>
    <nmb>{$val['dst']}</nmb>
    <dur>{$val['billsec']}</dur>
    <tp>{$val['rate']}</tp>
    <sum>{$val['price']}</sum>
</row>
XML;
        }
            $xml .= '</data>';
            unset($arr);
            return $xml;
        }else{
            return false;
        }
    }    
    
    public static function get_in_route($history,$num)
    {
        $query = "SELECT 
            DATE_FORMAT(`calldate`,'%d/%m/%y') AS `calldate_1`, 
            DATE_FORMAT(`calldate`,'%H:%i') AS `calldate_2`, 
            `src`, 
            `billsec` 
                FROM 
            `cdr`  
                WHERE 
            `dst`='".$num."' AND `disposition` = 'ANSWERED' ";
        if($history == 'getDayHistory')
        {
            // История за день
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getWeekHistory')
        {
            // История за неделю
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::WEEK);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getMonthHistory')
        {
            // История за месяц
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::MONTH);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getAllHistory')
        {
            $query .= " ";
        }
        $query .= " ORDER BY `calldate` DESC";
        $res = $db->query(Database::SELECT,$query,TRUE);
        foreach($res as $v)
        {
            if(!preg_match('#^1#is',$v->dst))
                continue;
            $arr[$v->calldate] = array(
                'calldate_1' => $v->calldate_1,
                'calldate_2' => $v->calldate_2,
                'dst' => $v->src,
                'billsec' => self::parse_time($v->billsec),
                'rate' => '0',
                'price' => '0'
            );
        }
        
        if(!empty($arr))
        {
            rsort($arr);
            $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
        foreach($arr as $val)
        {
$xml .= <<<XML
<row>
    <cdt>{$val['calldate_1']}</cdt>
    <ctm>{$val['calldate_2']}</ctm>
    <nmb>{$val['dst']}</nmb>
    <dur>{$val['billsec']}</dur>
    <tp>{$val['rate']}</tp>
    <sum>{$val['price']}</sum>
</row>
XML;
        }
            $xml .= '</data>';
            unset($arr);
            return $xml;
        }else{
            return false;
        }
    }
    
    public static function get_all_route($history,$num)
    {
        $query = "SELECT 
            DATE_FORMAT(`calldate`,'%d/%m/%y') AS `calldate_1`, 
            DATE_FORMAT(`calldate`,'%H:%i') AS `calldate_2`, 
            `dst`, 
            `billsec` 
                FROM 
            `cdr`  
                WHERE 
            `src`='".$num."' ";
        if($history == 'getDayHistory')
        {
            // История за день
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getWeekHistory')
        {
            // История за неделю
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::WEEK);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getMonthHistory')
        {
            // История за месяц
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::MONTH);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getAllHistory')
        {
            $query .= " ";
        }
        $query .= " ORDER BY `calldate` DESC";
        $res = $db->query(Database::SELECT,$query,TRUE);
        foreach($res as $v)
        {
            if(!preg_match('#^1#is',$v->dst))
                continue;
            $arr[$v->calldate] = array(
                'calldate_1' => $v->calldate_1,
                'calldate_2' => $v->calldate_2,
                'dst' => $v->dst,
                'billsec' => self::parse_time($v->billsec),
                'rate' => '0',
                'price' => '0'
            );
        }
        $query = "SELECT 
            DATE_FORMAT(`calldate`,'%d/%m/%y') AS `calldate_1`, 
            DATE_FORMAT(`calldate`,'%H:%i') AS `calldate_2`, 
            `dst`, 
            `calldate`, 
            `billsec`, 
            `user_rate`, 
            `user_price` 
                FROM 
            `calls` 
                WHERE 
            `src` = '".$num."'";
        if($history == 'getDayHistory')
        {
            // История за день
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getWeekHistory')
        {
            // История за неделю
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::WEEK);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getMonthHistory')
        {
            // История за месяц
            $datefrom = strtotime(date("d.m.Y 00:00:00"));
            $datefrom = intval($datefrom - Date::MONTH);
            $dateto = strtotime(date("d.m.Y 23:59:59"));
            $query .= " AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ";
        }elseif($history == 'getAllHistory')
        {
            $query .= " ";
        }
        $res = $db->query(Database::SELECT,$query,TRUE);
        foreach($res as $v)
        {
            $arr[$v->calldate] = array(
                'calldate_1' => $v->calldate_1,
                'calldate_2' => $v->calldate_2,
                'dst' => $v->dst,
                'billsec' => self::parse_time($v->billsec),
                'rate' => round($v->user_rate,2),
                'price' => round($v->user_price,2)
            );
        }
        if(!empty($arr))
        {
            rsort($arr);
            $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
        foreach($arr as $val)
        {
$xml .= <<<XML
<row>
    <cdt>{$val['calldate_1']}</cdt>
    <ctm>{$val['calldate_2']}</ctm>
    <nmb>{$val['dst']}</nmb>
    <dur>{$val['billsec']}</dur>
    <tp>{$val['rate']}</tp>
    <sum>{$val['price']}</sum>
</row>
XML;
        }
            $xml .= '</data>';
            unset($arr);
            return $xml;
        }else{
            return false;
        }
    }
    
    public static function parse_time($sec)
    {
        $sec = abs((int)$sec);
        return date("i:s",$sec);
    }
}