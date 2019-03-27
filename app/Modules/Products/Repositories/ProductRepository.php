<?php

namespace Upscale\Modules\Products\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

class ProductRepository extends BaseRepository
{
    use CacheableRepository;

    protected $fieldSearchable = [
        'title' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "\\Upscale\\Modules\\Products\\Models\\Product";
    }

    public function validator()
    {
        return "\\Upscale\\Modules\\Products\\Validators\\ProductValidator";
    }

    public function presenter()
    {
        return "Upscale\\Modules\\Products\\Presenters\\ProductPresenter";
    }

    public function boot()
    {
        parent::boot();

        $this->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
    }
}
