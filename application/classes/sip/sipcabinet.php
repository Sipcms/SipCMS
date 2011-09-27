<?php
defined('SYSPATH') or die('No direct script access.');

class Sip_Sipcabinet extends Controller_Template {
    public $session;
    public $template = 'sipcms/main';
    public $auth;
    /**
     * Переменная для сохранения данных для шаблонов
     *
     * @var array Данные для шаблонов
     */
    public $data;
    public function before() {
        $this->session = Session::instance();
        $this->session->set('auth_redirect', $_SERVER['REQUEST_URI']);
        $this->auth = Auth::instance();
        $this->data = array();
        $this->data['auth'] = $this->auth;
        if(!$this->auth->logged_in())
            Request::initial ()->redirect();
        return parent::before();
    }
    
}

