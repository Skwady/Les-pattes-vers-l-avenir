<?php

namespace App\controllers;

use App\models\MainModel;

class MainController extends Controller
{
    public function index()
    {
        $this->render('main/index');
    }
}