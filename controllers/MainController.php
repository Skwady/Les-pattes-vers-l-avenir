<?php

namespace App\controllers;

use App\repository\AddAvisRepository;
use App\services\AddAvisService;

class MainController extends Controller
{
    public function index()
    {
        $avisRepository = new AddAvisRepository();
        $avis = $avisRepository->findAll('Avis');
        $this->render('main/index', ['avis' => $avis]);
    }

    public function addAvis($id)
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            $addAvis = new AddAvisService();
            $addAvis->addAvis($data);
        }
    }
}