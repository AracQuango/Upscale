<?php

namespace Upscale\Modules\Users\Commands;

use Upscale\Modules\Users\Models\User;
use Upscale\Modules\users\repositories\UserRepository;
use Upscale\Modules\Users\Requests\Authentication\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class LoginUser
{

    private $repository;

    /**
     * LoginUser constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Gets called once the class is invoked.
     * This will actually checks for validity of the given details and returns a user including their API token.
     *
     * @param LoginRequest $request
     * @param Response $response
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(LoginRequest $request, Response $response)
    {
        if(User::where('email', $request->input('email'))->exists()){
            $user = User::where('email', $request->get('email'))->first();
            $auth = Hash::check($request->get('password'), $user->password);
            if($user && $auth){
                $user->generateApiKey();

                return Response::json($user, 200);
            }
        }

        return Response::json(["general" => [_("_user.validation.login.unrecognized")]], 401);
    }
}
