<?php
namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Model\User;

class UserRepository implements UserRepositoryInterface
{
    public function createUser(array $attributes)
    {
        User::create($attributes);
    }

    public function getUserById(int $id)
    {
        User::find($id);
    }

    public function deleteUser(int $id)
    {
        User::destroy($id);
    }

    public function updateUser(int $id, array $attributes)
    {
        User::find($id)->update($attributes);
    }
}
