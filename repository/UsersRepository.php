<?php

namespace App\repository;

class UsersRepository extends BaseRepository
{
    public function __construct()
    {
        $this->table = 'Users';
    }

    public function search($email)
    {
        return $this->req(
            "SELECT u.id, u.name, u.password, u.email, u.isVerified, u.idRole, r.role 
             FROM ". $this->table ." u
             JOIN Roles r ON u.idRole = r.id 
             WHERE u.email = :email",
            ['email' => $email]
        )->fetch();
    }
}