<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Panel_Main extends Sip_Sipadmin {

	public function action_index()
	{
            $this->template->head = View::factory('sipcms/panel/head', $this->data);
            $this->template->content = View::factory('sipcms/panel/index_body', $this->data);
            $this->template->foot = View::factory('sipcms/panel/foot', $this->data);
	}

} // End Welcome
