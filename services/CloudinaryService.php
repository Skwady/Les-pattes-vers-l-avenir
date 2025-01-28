<?php

namespace App\services;

use Cloudinary\Cloudinary;

class CloudinaryService
{
    private $cloudinary;

    /**
     * Initializes the CloudinaryService instance.
     *
     * Sets up the Cloudinary connection using environment variables.
     */
    public function __construct()
    {
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => $_ENV['CLOUDINARY_CLOUD_NAME'],
                'api_key'    => $_ENV['CLOUDINARY_API_KEY'],
                'api_secret' => $_ENV['CLOUDINARY_API_SECRET']
            ]
        ]);
    }

    /**
     * Uploads a file to Cloudinary.
     *
     * @param string $file The file to upload.
     * @return string|false Returns the secure URL of the uploaded image, or false on failure.
     */
    public function uploadFile($file)
    {
        try {
            $result = $this->cloudinary->uploadApi()->upload($file, [
                "folder" => "Refuge/"
            ]);
            return $result['secure_url'];
        } catch (\Exception $e) {
            error_log("Cloudinary upload error: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Deletes a file from Cloudinary by its URL.
     *
     * @param string $url The URL of the file to delete.
     * @return bool Returns true if the file was deleted, false otherwise.
     */
    public function deleteFile($url)
    {
        try {
            $publicId = $this->extractPublicIdFromUrl($url);
            if ($publicId) {
                $result = $this->cloudinary->uploadApi()->destroy($publicId);
                return $result['result'] === 'ok';
            }
            error_log("Public ID introuvable pour l'URL : $url");
            return false;
        } catch (\Exception $e) {
            error_log("Cloudinary delete error: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Extracts the public ID from a Cloudinary URL.
     *
     * @param string $url The Cloudinary URL.
     * @return string|null The extracted public ID, or null if invalid.
     */
    public function extractPublicIdFromUrl(string $url): ?string
    {
        try {
            $parsedUrl = parse_url($url);
            if (!isset($parsedUrl['path'])) {
                throw new \InvalidArgumentException("URL invalide : aucune information de chemin trouvée.");
            }

            $path = $parsedUrl['path']; // Extraction du chemin
            $pathParts = explode('/', $path);
            $lastPart = end($pathParts); // Dernière partie du chemin
            $fileParts = pathinfo($lastPart); // Analyse pour séparer extension et nom

            return $fileParts['filename'] ?? null;
        } catch (\Exception $e) {
            error_log("Erreur lors de l'extraction du public_id : " . $e->getMessage());
            return null;
        }
    }

    /**
     * Validates and uploads an image file to Cloudinary.
     *
     * @param array $image The uploaded image file ($_FILES array).
     * @return string|false The secure URL of the uploaded image, or false on failure.
     */
    public function validateAndUploadImage(array $image)
    {
        if (isset($image) && $image['error'] === UPLOAD_ERR_OK) {
            $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];

            if (in_array($image['type'], $allowedTypes)) {
                return $this->uploadFile($image['tmp_name']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Type de fichier non autorisé']);
                return false;
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Le fichier ne peut pas être vide ou contient des erreurs']);
            return false;
        }
    }
}
