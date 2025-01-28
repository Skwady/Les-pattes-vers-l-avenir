<?php

namespace App\controllers;

use App\repository\UsersRepository;
use App\repository\AdoptingRepository;

class AdminController extends Controller
{
    public function view($id)
    {
        if ($_SESSION['role'] === 'Admin') {
            $adoptingRepository = new AdoptingRepository();
            $adopting = $adoptingRepository->findAdoptingWithAnimals($id);
            $this->render('admin/view', [
                'adopting' => $adopting
            ]);
        } else {
            http_response_code(404);
        }
    }
    public function viewAdopting()
    {
        if ($_SESSION['role'] === 'Admin') {
            $adoptingRepository = new AdoptingRepository();
            $adopting = $adoptingRepository->findAll();
            $this->render('admin/adopting', [
                'adopting' => $adopting
            ]);
        } else {
            http_response_code(404);
        }
    }

    public function viewUsers()
    {
        $UserRepository = new UsersRepository();
        $users = $UserRepository->findAll();
        if($_SESSION['role'] === 'Admin'){ 
            $this->render('admin/users', [
                'users' => $users
            ]);
        }else{
            http_response_code(404);
        }
        
    }

    public function deleteUser($id)
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $UserRepository = new UsersRepository();
            $UserRepository->delete($id);

            echo json_encode(['success' => true]);
        }
    }
}