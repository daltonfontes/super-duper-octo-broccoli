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
        $this->$userRepository->create();
    }

    public function show()
    {
        $this->userRepository->update();

    }

    public function destroy()
    {
        $this->userRepository->delete();
    }


}
