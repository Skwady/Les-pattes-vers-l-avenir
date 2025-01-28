<?php

namespace App\controllers;

use App\repository\UsersRepository;
use App\repository\AdoptingRepository;
use App\repository\AddAvisRepository;

class AdminController extends Controller
{
    public function index()
    {
        // Vérifie si l'utilisateur est un admin
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'Admin') {
            header("Location: /");
            exit();
        }

        $avisRepository = new AddAvisRepository();
        $pendingAvis = $avisRepository->findBy('Avis',['validated' => false]);
        $allAvis = $avisRepository->findBy('Avis',['validated' => true]);

        $usersRepository = new UsersRepository();
        $users = $usersRepository->findAll();

        $this->render('admin/avis', [
            'avis' => $pendingAvis,
            'allAvis' => $allAvis,
            'users' => $users
        ]);
    }

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
        if($_SERVER['REQUEST_METHOD'] === 'DELETE'){

            $UserRepository = new UsersRepository();
            $UserRepository->delete($id);

            echo json_encode(["status" => "success" , "message" => "Utilisateur supprimé"]);
        }
    }

    public function validateAvis($id)
    {
        if($_SERVER['REQUEST_METHOD'] === 'PUT'){
            $avisRepository = new AddAvisRepository();
            $update = $avisRepository->update('Avis', ['_id' => new \MongoDB\BSON\ObjectId($id)], ['validated' => true]);

            echo json_encode(["status" => "success" , "message" => "Avis validé"]);
        }
    }

    public function deleteAvis($id)
    {
        $avisRepository = new AddAvisRepository();
        $avisRepository->delete('Avis', ['_id' => new \MongoDB\BSON\ObjectId($id)]);

        echo json_encode(["status" => "success" , "message" => "Avis supprimé"]);
    }
}