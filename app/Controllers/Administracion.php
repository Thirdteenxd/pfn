<?php
namespace App\Controllers;
class Administracion extends BaseController
{
    public function index()
    {
        echo view('navbar').view('Administracion/dashboard');
    }
}