<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Phone extends Controller{
    
    public function action_get_stat()
    {
        $oper = Arr::get($_POST,'oper',null);
        $id = Arr::get($_POST,'mynumber','');
        
        switch($oper)
        {
            case "getPrice":
                echo Model_Sipstarsfon::get_price($id);
                break;
            case "getCountry":
                echo Model_Sipstarsfon::get_country();
                break;
            case "getPhoneBook":
                echo Model_Sipstarsfon::get_phone_book($id);
                break;
            case "addPhoneBook":
                $phone = Arr::get($_POST,'phone',null);
                $name = Arr::get($_POST,'name',null);
                echo Model_Sipstarsfon::add_phone_book($id,$phone,$name);
                break;
            case "delPhoneBook":
                $uid = Arr::get($_POST,'uid',null);
                echo Model_Sipstarsfon::del_phone_book($id,$uid);
                break;
            case "updatePhoneBook":
                $uid = Arr::get($_POST,'uid',null);
                $phone = Arr::get($_POST,'phone',null);
                $name = Arr::get($_POST,'name',null);
                echo Model_Sipstarsfon::update_phone_book($id,$uid,$phone,$name);
                break;
            case "getAllHistory":   // Вся история
            case "getDayHistory":   // За день
            case "getWeekHistory":  // За неделю
            case "getMonthHistory": // За месяц
                $route = Arr::get($_POST,'route',null);
                echo Model_Sipstarsfon::get_history($id,$oper,$route);
                break;
            case "get_tariff":
                echo Model_Sipstarsfon::get_tariff($id,Arr::get($_POST,'phone',''));
                break;
        }
    }
    
}