<?php

namespace App\services;

use App\repository\AddAvisRepository;

class AddAvisService
{
    public function addAvis($data)
    {
        $message = $data['message'] ?? null;
        $imageUrls = []; // Initialisation du tableau d'images

        // Vérification si un message est fourni
        if (empty($message)) {
            echo json_encode(['status' => 'error', 'message' => 'Le message ne peut pas être vide']);
            exit();
        }

        // Gestion de l'image
        $images = new CloudinaryService();
        $img = $images->validateAndUploadImage($_FILES['image']);

        // Préparation des données à insérer
        $addAvis = new AddAvisRepository();
        $data = [
            'userId' => $_SESSION['id'],
            'message' => $message,
            'type' => 'text',
            'image' => $img, // URL de l'image (ou null si aucune image)
            'createdAt' => new \MongoDB\BSON\UTCDateTime(),
            'validated' => false, // Défini comme non validé par défaut
        ];

        // Insertion dans la base
        $documentId = $addAvis->publishMessage($data);

        // Retour JSON en fonction du succès ou de l'échec
        if ($documentId) {
            echo json_encode(["status" => "success", "redirect" => "/"]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erreur lors de la publication du message']);
        }
    }
}
