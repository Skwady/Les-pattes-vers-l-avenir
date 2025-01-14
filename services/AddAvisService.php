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

        $images = new CloudinaryService();
        $img = $images->validateAndUploadImage($_FILES['image']);

        $addAvis = new AddAvisRepository();
        $data = [
            'userId' => $_SESSION['id'],
            'message' => $message,
            'type' => 'text',
            'image' => $img, // Tableau des URLs des images (vide si aucune image)
            'createdAt' => new \MongoDB\BSON\UTCDateTime(),
        ];

        $documentId = $addAvis->publishMessage($data);

        if ($documentId) {
            echo json_encode(["status" => "success", "redirect" => "/"]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erreur lors de la publication du message']);
        }
    }
}