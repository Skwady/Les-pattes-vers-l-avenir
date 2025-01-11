<?php

namespace App\controllers;

class PensionController extends Controller
{
    public function index()
    {
        $this->render('pension/index');
    }
}