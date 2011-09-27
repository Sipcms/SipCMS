<?php

if($_POST['oper'] == 'getCountry')
{
$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n<data>";
    for($i=0; $i<50; $i++)
    {
        $xml .= <<<XML
        <row>\n
            <name>Россия</name>\n
            <img>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAKnRFWHRDcmVhdGlvbiBUaW1lAERvIDEgQXByIDIwMDQgMTY6MDY6MjUgKzAxMDBMuQgUAAAAB3RJTUUH1AcHCB0YiJ+1wgAAAAlwSFlzAAAK8AAACvABQqw0mAAAAARnQU1BAACxjwv8YQUAAAG9SURBVHjanVPBahRBEK3q6Z2YEPEiOQkrXr1JIJ9hTnv2BwW/wkNYiIfAoOhFTxoSCEw229PTXb7XPbMrnjQNb6qmuupVdVW3Sl0qj1um6/X6znt/mFISMyvIOcs4jkIbdUr+z/pmswmr1eo1CH75tm39crlcYAmIhJIkwzBIjHEH/ocQClHXdRnB58AHP2fhhnOuSBJQ/o0/fbGWwBN/1GR52po4zaIOG0pyk4VHuWoSoUfIwKpI7LK0mnZ98+fvvT57BYJGJXstUsBh4LJoRQqQAzBU22230IlAfXeNFIcNqJwgbQVKlQEsEbaoVQ5aEeH7M9s8Bl94cHbUX0mTcThQ4chSHQgdbK7Z67aLF3/aX+lDIImKuYnEmB11JwATEDYNE8AowJkk3n/VLzPBxbd3ps/PahUsPTzAEc5bIG6rRGCxUY5ZLj+LvZkJ7vVYju0AwVPm2pp6BGHZCyDspQ5yp2F/hJH9yKmeq5xtgmMfgIa67IH/VFtQHH1/02/6j58sxLqR8BlLC7JkYOD15R7lZPvR43qUYdeCXwBvgZdTjn9ZDP7Oq0wCNEBOeC3/41Wy/C0f0xzw6Of8G3RCLz32+8jkAAAAAElFTkSuQmCC</img>\n
            <prefix>7</prefix>\n
        </row>\n
XML;
    }
    $xml .= '</data>';
    echo $xml;
}
if($_POST['oper'] == 'getPrice')
{
    /**
    $sql = "SELECT `user_id` FROM `devices` WHERE `username` = '".$_POST['mynumber']."'";
    $res = mysql_fetch_array(mysql_query($sql));
    
    $sql = "SELECT `tariff_id` FROM `users` WHERE `id` = '".$res['user_id']."'";
    $res = mysql_fetch_array(mysql_query($sql));
    
    $query = mysql_query("SELECT `id`,`destination_id` FROM `rates` WHERE `tariff_id` = '".$res['tariff_id']."'");
    $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
    while($req = mysql_fetch_array($query))
    {
        $query_2 = mysql_fetch_array(mysql_query("SELECT `rate` FROM `ratedetails` WHERE `rate_id` = '".$req['id']."'"));
        $dist = mysql_fetch_array(mysql_query("SELECT `prefix`,`subcode`, `direction_code`, `name` FROM `destinations` WHERE `id` = '".$req['destination_id']."'"));
        $flag = mysql_fetch_array(mysql_query("SELECT `flag` FROM `flags` WHERE `code` = '".$dist['direction_code']."'"));

$rub = round($query_2['rate'] * $stav,2);
$usd = round($query_2['rate'],2);
$xml .= <<<XML
    <row>
        <name>{$dist['name']}({$dist['subcode']})</name>
        <rub>{$rub}</rub>
        <dlr>{$usd}</dlr>
        <img>{$flag['flag']}</img>
        <prefix>{$dist['prefix']}</prefix>
    </row>\n
XML;
    }
    $xml .= '</data>';
    echo $xml;
    */
    $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n<data>\n";
    for($i=0; $i<50; $i++)
    {
        $xml .= <<<XML
        <row>
            <name>Россия</name>
            <rub>5</rub>
            <dlr>1.19</dlr>
            <img>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAKnRFWHRDcmVhdGlvbiBUaW1lAERvIDEgQXByIDIwMDQgMTY6MDY6MjUgKzAxMDBMuQgUAAAAB3RJTUUH1AcHCB0YiJ+1wgAAAAlwSFlzAAAK8AAACvABQqw0mAAAAARnQU1BAACxjwv8YQUAAAG9SURBVHjanVPBahRBEK3q6Z2YEPEiOQkrXr1JIJ9hTnv2BwW/wkNYiIfAoOhFTxoSCEw229PTXb7XPbMrnjQNb6qmuupVdVW3Sl0qj1um6/X6znt/mFISMyvIOcs4jkIbdUr+z/pmswmr1eo1CH75tm39crlcYAmIhJIkwzBIjHEH/ocQClHXdRnB58AHP2fhhnOuSBJQ/o0/fbGWwBN/1GR52po4zaIOG0pyk4VHuWoSoUfIwKpI7LK0mnZ98+fvvT57BYJGJXstUsBh4LJoRQqQAzBU22230IlAfXeNFIcNqJwgbQVKlQEsEbaoVQ5aEeH7M9s8Bl94cHbUX0mTcThQ4chSHQgdbK7Z67aLF3/aX+lDIImKuYnEmB11JwATEDYNE8AowJkk3n/VLzPBxbd3ps/PahUsPTzAEc5bIG6rRGCxUY5ZLj+LvZkJ7vVYju0AwVPm2pp6BGHZCyDspQ5yp2F/hJH9yKmeq5xtgmMfgIa67IH/VFtQHH1/02/6j58sxLqR8BlLC7JkYOD15R7lZPvR43qUYdeCXwBvgZdTjn9ZDP7Oq0wCNEBOeC3/41Wy/C0f0xzw6Of8G3RCLz32+8jkAAAAAElFTkSuQmCC</img>
        </row>
XML;
    }
    $xml .= '</data>';
    echo $xml;
}

if($_POST['oper'] == 'getPhoneBook')
{
    $my_num = $_POST['mynumber'];
    $sql = mysql_query("SELECT * FROM `phonebook` WHERE `onwer` = '".$my_num."'");
    $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
    while($res = mysql_fetch_array($sql))
    {
$xml .= <<<XML
    <row>
        <id>{$res['id']}</id>
        <name>{$res['name']}</name>
        <ph>{$res['phone']}</ph>
    </row>
XML;
    }
    $xml .= '</data>';
    
    echo $xml;
}

if($_POST['oper'] == 'addPhoneBook')
{
    $my_num = $_POST['mynumber'];
    $new_num = $_POST['phone'];
    $new_name = $_POST['name'];
    
    mysql_query("INSERT INTO `phonebook` SET 
    `onwer` = '".$my_num."',
    `name` = '".$new_name."',
    `phone` = '".$new_num."'");
    
    $sql = mysql_query("SELECT * FROM `phonebook` WHERE `onwer` = '".$my_num."'");
    $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
    while($res = mysql_fetch_array($sql))
    {
$xml .= <<<XML
    <row>
        <id>{$res['id']}</id>
        <name>{$res['name']}</name>
        <ph>{$res['phone']}</ph>
    </row>
XML;
    }
    $xml .= '</data>';
    
    echo $xml;
}
if($_POST['oper'] == 'delPhoneBook')
{
    $id = $_POST['uid'];
    
    mysql_query("DELETE FROM `phonebook` WHERE `id` = '".$id."'  LIMIT 1");
    
    $sql = mysql_query("SELECT * FROM `phonebook` WHERE `onwer` = '".$my_num."'");
    $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
    while($res = mysql_fetch_array($sql))
    {
$xml .= <<<XML
    <row>
        <id>{$res['id']}</id>
        <name>{$res['name']}</name>
        <ph>{$res['phone']}</ph>
    </row>
XML;
    }
    $xml .= '</data>';
    
    echo $xml;
}

if($_POST['oper'] == 'updatePhoneBook')
{
     $new_name = $_POST['name'];
     $new_num = $_POST['phone'];
     $id = $_POST['uid'];
     mysql_query("UPDATE `phonebook` SET `name` = '".$new_name."', `phone` = '".$new_num."' WHERE `id` = '".$id."' LIMIT 1");
     
     $sql = mysql_query("SELECT * FROM `phonebook` WHERE `onwer` = '".$my_num."'");
    $xml = '<?xml version="1.0" encoding="UTF-8" ?>'."\n<data>\n";
    while($res = mysql_fetch_array($sql))
    {
$xml .= <<<XML
    <row>
        <id>{$res['id']}</id>
        <name>{$res['name']}</name>
        <ph>{$res['phone']}</ph>
    </row>
XML;
    }
    $xml .= '</data>';
    
    echo $xml;
}

if($_POST['oper'] == 'getAllHistory')
{
    $my_num = $_POST['mynumber'];
    $datefrom = (empty($_POST['datefrom']) ? strtotime(date("d.m.Y 00:00:00")) : $_POST['datefrom']);
    $dateto = (empty($_POST['dateto']) ? strtotime(date("d.m.Y 23:59:59")) : $_POST['dateto']);
    
    $arr = array();

    $sql = mysql_query("SELECT DATE_FORMAT(`calldate`,'%d/%m/%y') AS `calldate_1`, DATE_FORMAT(`calldate`,'%H:%i') AS `calldate_2`, `dst`, `billsec` FROM `cdr`  WHERE `src`='".$my_num."' AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."') ORDER BY `calldate` DESC");
    while($res = mysql_fetch_array($sql))
    {
        if(!preg_match('#^1#is',$res['dst']))
            continue;
        $arr[$res['calldate']] = array(
            'calldate_1' => $res['calldate_1'],
            'calldate_2' => $res['calldate_2'],
            'dst' => $res['dst'],
            'billsec' => parse_time($res['billsec']),
            'rate' => '0',
            'price' => '0'
        );
    }
    $sql = mysql_query("SELECT DATE_FORMAT(`calldate`,'%d/%m/%y') AS `calldate_1`, DATE_FORMAT(`calldate`,'%H:%i') AS `calldate_2`, `dst`, `calldate`, `billsec`, `user_rate`, `user_price` FROM `calls` WHERE `src` = '".$my_num."' AND `calldate` BETWEEN FROM_UNIXTIME('".$datefrom."') AND FROM_UNIXTIME('".$dateto."')");
    
    while($res = mysql_fetch_array($sql))
    {
        $arr[$res['calldate']] = array(
            'calldate_1' => $res['calldate_1'],
            'calldate_2' => $res['calldate_2'],
            'dst' => $res['dst'],
            'billsec' => parse_time($res['billsec']),
            'rate' => round($res['user_rate'],2),
            'price' => round($res['user_price'],2)
        );
    }
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
    echo $xml;
}

function parse_time($sec)
{
    $sec = abs((int)$sec);
    return date("i:s",$sec);
}

?>
