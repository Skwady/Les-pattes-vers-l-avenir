<?php

namespace App\Repository;

class UsersRepository extends BaseRepository
{
    public function __construct()
    {
        $this->table = 'Users';
    }

    public function search($email)
    {
        return $this->req(
            "SELECT u.id, u.name, u.password, u.email, u.is_verified, u.id_role, r.role 
             FROM ". $this->table ." u
             JOIN Role r ON u.id_role = r.id 
             WHERE u.email = :email",
            ['email' => $email]
        )->fetch();
    }
}