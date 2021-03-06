<?php

return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',

    'authKeyExpire' => 3600*24, // 1 days
    'accessTokenExpire' => 60*15, // 15 min

    'retained_authKeyExpire' => 3600*24*30, // 30 days
    'retained_accessTokenExpire' => 3600, // 1 hour

    'passwordResetTokenExpire' => 3600,

    'clients' => [
    	'public_web_abc123' => [
    		'info'     => 'id reserved to public website',
    		'reset_link' => 'http://localhost:8079/#!/account-recovery/'
    	],
    ]
];
