<?php
namespace Codespace\SuperDuperOctoBroccoli\Controller;

use Codespace\SuperDuperOctoBroccoli\Interfaces\UserRepositoryInterface;

class UserController
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) 
    {

        $this->userRepository = $userRepository;
    }

    public function store()
    {
        $this->$userRepository->createUser();
    }

    public function show()
    {
        $this->userRepository->getUserById();

    }

    public function update()
    {
        $this->userRepository->updateUser();
    }

    public function destroy()
    {
        $this->userRepository->deleteUser();
    }


}
