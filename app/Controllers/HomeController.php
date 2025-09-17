<?php
namespace App\Controllers;

use App\Core\DB;

class HomeController {
  public function index(): void {
    require VIEW_PATH . '/home.php';
  }
}
