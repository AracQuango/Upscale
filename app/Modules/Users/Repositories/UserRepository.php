<?php

namespace Upscale\Modules\users\repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

class UserRepository extends BaseRepository
{
    use CacheableRepository;

    protected $fieldSearchable = [
        'first_name' => 'like',
        'last_name' => 'like',
        'email',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "\\Upscale\\Modules\\Users\\Models\\User";
    }

    public function validator()
    {
        return "\\Upscale\\Modules\\Users\\Validators\\UserValidator";
    }

    public function presenter()
    {
        return "Upscale\\Modules\\Users\\Presenters\\UserPresenter";
    }

    public function boot()
    {
        parent::boot();

        $this->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
    }
}
