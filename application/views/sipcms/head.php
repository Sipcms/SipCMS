<?php
if(Auth::instance()->logged_in())
{
    echo View::factory('sipcms/head_auth');
}else{
    echo View::factory('sipcms/head_noauth');
}
?>