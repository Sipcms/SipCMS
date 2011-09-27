<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Sip_Controller {

	public function action_index()
	{
            $this->template->head = View::factory('sipcms/head', $this->data);
            $this->template->content = View::factory('sipcms/index_body', $this->data);
            $this->template->foot = View::factory('sipcms/foot', $this->data);
	}

} // End Welcome
