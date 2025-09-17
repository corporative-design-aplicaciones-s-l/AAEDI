<?php
namespace App\Controllers;

use App\Core\DB;
use App\Core\View;

class BasicRoutesController
{
  public function home(): void
  {
    View::render('base/home', [
      'title' => 'Inicio — AAEDI',
      'bodyClass' => 'home'
    ]);
  }
  public function filosofia(): void
  {
    View::render('base/filosofia', [
      'title' => 'Filosofía — AAEDI',
      'bodyClass' => 'filosofia'
    ]);
  }

  public function miembros(): void
  {
    View::render('base/miembros', [
      'title' => 'Filosofía — AAEDI',
      'bodyClass' => 'filosofia'
    ]);
  }

  public function junta(): void
  {
    View::render('base/junta', [
      'title' => 'Junta de Gobierno — AAEDI',
      'bodyClass' => 'junta'
    ]);
  }
  public function asociarse(): void
  {
    View::render('base/asociarse', [
      'title' => 'Asociarse — AAEDI',
      'bodyClass' => 'asociarse'
    ]);
  }
  public function formaciones(): void
  {
    View::render('base/formaciones', [
      'title' => 'Formaciones — AAEDI',
      'bodyClass' => 'formaciones'
    ]);
  }
  public function servicios(): void
  {
    View::render('base/servicios', [
      'title' => 'Servicios — AAEDI',
      'bodyClass' => 'servicios'
    ]);
  }  
  
  public function contacto(): void
  {
    View::render('base/contacto', [
      'title' => 'Contacto — AAEDI',
      'bodyClass' => 'contacto'
    ]);
  }




}
