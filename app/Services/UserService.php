<?php

namespace App\Services;

use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Interfaces\UserRepositoryInterface as URI;
/**
 * Class UserService
 *
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
   
    protected $userRepository;
    public function __construct(URI $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function paginate()
    {
        $users= $this->userRepository->getAllPaginate();
        return $users;  
    }
}
