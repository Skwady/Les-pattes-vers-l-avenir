<?php

namespace App\services;

use App\Models\UsersModel;
use App\Repository\UsersRepository;

class RegisterService
{
    public function register($data)
    {
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo json_encode(["status" => "error", "message" => "Email invalide."]);
            exit();
        }

        if ($data['password'] !== $data['confirmPassword']) {
            http_response_code(400);
            echo json_encode(["status" => "error", "message" => "Les mots de passe ne correspondent pas."]);
            exit();
        } else {
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        // Génération du token de confirmation
        $token = bin2hex(random_bytes(32));

        $data = [
            'name' => $data['name'],
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'password' => $password,
            'isVerified' => 0,
            'token' => $token,
            'idRole' => 2,
        ];
        // Hydrater et enregistrer l'utilisateur avec le token
        $UsersModel = new UsersModel();
        $UsersModel->hydrate($data);
        if ($UsersModel = (new UsersRepository())->create($data)) {
            // Envoi de l'email de confirmation
            $this->sendConfirmationEmail($data['email'], $token);

            http_response_code(200);
            echo json_encode(["status" => "success", "message" => "Un email de confirmation a été envoyé."]);
            exit();
        } else {
            http_response_code(500);
            echo json_encode(["status" => "error", "message" => "Erreur lors de la création de l'utilisateur."]);
            exit();
        }
    }

    public function sendConfirmationEmail($email, $token)
    {
            // Contenu de l'email
            $to = $email;
            $Subject = 'Confirmation de votre inscription';
            $confirmationLink = "https://lespattesverslavenir-da7b8d143482.herokuapp.com/register/confirm/" . $token;
            $Body = "Bonjour,<br>
                <br>
                Merci pour votre inscription.<br>
                Veuillez cliquer sur le lien ci-dessous pour confirmer votre adresse email :<br>
                <br>
                <a href='$confirmationLink'>Confirmer mon email</a>";

            $emailService = new EmailService();
            $emailService->sendEmail($to, $Subject, $Body);
    }
}