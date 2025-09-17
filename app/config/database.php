<?php
return [
  'default' => 'dev',
  'connections' => [
    'dev' => [
      'driver' => 'mysql', 'host' => '127.0.0.1', 'port' => 3306,
      'database' => 'miapp_dev', 'username' => 'root', 'password' => 'secret',
      'charset' => 'utf8mb4',
    ],
    'prod' => [
      'driver' => 'mysql', 'host' => '10.0.0.5', 'port' => 3306,
      'database' => 'miapp', 'username' => 'miusuario', 'password' => 'supersecreto',
      'charset' => 'utf8mb4',
    ],
  ],
];
