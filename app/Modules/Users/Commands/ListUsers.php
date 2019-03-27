<?php

namespace Upscale\Modules\Users\Commands;


use Upscale\Modules\Users\Repositories\UserRepository;

class ListUsers
{

    public function __invoke(UserRepository $repository)
    {
        return $repository->paginate(25);
    }
}
