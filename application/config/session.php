<?php

return array(
    'native' => array(
        'name' => 'sip_session',
        'lifetime' => 43200,
    ),
    'cookie' => array(
        'name' => 'sip_cookie',
        'encrypted' => TRUE,
        'lifetime' => 43200,
    ),
    'database' => array(
        'name' => 'sip_cookie',
        'encrypted' => TRUE,
        'lifetime' => 43200,
        'group' => 'default',
        'table' => 'sessions',
        'columns' => array(
            'session_id'  => 'session_id',
            'last_active' => 'last_active',
            'contents'    => 'contents'
        ),
        'gc' => 500,
    ),
);
?>
