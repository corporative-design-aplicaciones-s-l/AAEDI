<?php
return [
    'env' => getenv('APP_ENV') ?: 'dev',
    'debug' => true,
    'mail' => [
    'host'   => 'mail.aaedi.es',
    'port'   => 465, 
    'user'   => 'notificaciones@aaedi.es',
    'pass'   => '6.6DQDE?HhGdRkB7',
    'from'   => ['address' => 'notificaciones@aaedi.es', 'name' => 'AAEDI - Notificaciones'],
    'to'     => ['address' => 'max@dicopgroup.com', 'name' => 'AAEDI'],
    'secure' => 'ssl',              
  ],
];
