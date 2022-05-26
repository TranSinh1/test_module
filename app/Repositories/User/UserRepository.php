<?php
namespace App\Repositories\User;

use App\Repositories\EloquentRepository;

class UserRepository extends EloquentRepository implements UserRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\User::class;
    }

    public function TestI() {
        echo "TestI";
    }
}