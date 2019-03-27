<?php

namespace Upscale\Modules\Users\Presenters;

use Upscale\Modules\Users\Transformers\UserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserPresenter.
 *
 * @package namespace Upscale\Presenters;
 */
class UserPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return UserTransformer
     */
    public function getTransformer()
    {
        return new UserTransformer;
    }
}
