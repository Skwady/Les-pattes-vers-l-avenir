<?php

namespace App\repository;

class AddAvisRepository extends BaseMongo
{
    /**
     * Récupère les activités d'un utilisateur.
     *
     * @param string $userId ID de l'utilisateur.
     * @param int $limit Limite des activités à récupérer.
     * @return array Liste des activités.
     */
    public function getUserAvis(string $userId): array
    {
        return $this->findBy('Avis', ['userId' => $userId]);
    }

    /**
     * Publier un message dans le fil d'actualité.
     *
     * @param string $userId ID de l'utilisateur.
     * @param string $message Contenu du message.
     * @return string ID du message publié.
     */
    public function publishMessage($data): string
    {
        return $this->create('Avis', $data);
    }
}
