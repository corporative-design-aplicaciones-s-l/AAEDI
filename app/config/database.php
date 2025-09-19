<?php
return [
  'default' => 'dev',
  'connections' => [
    'dev' => [
      'driver' => 'mysql', 'host' => '188.164.194.246', 'port' => 3306,
      'database' => 'aaedi_main', 'username' => 'aaedi_admin', 'password' => 'Wa,IcuaSm2$pE]K~',
      'charset' => 'utf8mb4',
    ],
    'prod' => [
      'driver' => 'mysql', 'host' => 'localhost', 'port' => 3306,
      'database' => 'miapp', 'username' => 'aaedi_admin', 'password' => 'Wa,IcuaSm2$pE]K~',
      'charset' => 'utf8mb4',
    ],
  ],
];
