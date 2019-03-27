<?php

namespace Upscale\Modules\Users\Models;

use Illuminate\Support\Str;

class User extends BaseUser
{

    /**
     * An array holding all values that should be treated like passwords (e.g. hashed, etc.)
     */
    public static $passwordAttributes  = [
        'password',
    ];


    /**
     * @inheritdoc
     */
    public $autoHashPasswordAttributes = true;


    /**
     * @inheritdoc
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'api_token',
    ];


    /**
     * Generates a new Bearer authentication token for a user. Also saves it to the user.
     *
     * @return string
     */
    public function generateApiKey(){
        do {
            $this->api_token = Str::random(60);
        } while ($this->where('api_token', $this->api_token)->exists());
        $this->save();

        return $this->api_token;
    }

}
