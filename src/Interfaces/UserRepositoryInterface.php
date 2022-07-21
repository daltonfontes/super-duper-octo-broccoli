<?php
namespace App\Interfaces;

interface UserRepositoryInterface 
{
    
    public function createUser(array $attributes);
    public function getUserById(int $id);
    public function deleteUser(int $id);
    public function updateUser(int $id, array $attributes);
    
}