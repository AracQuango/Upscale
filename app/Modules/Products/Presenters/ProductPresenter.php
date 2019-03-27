<?php

namespace Upscale\Modules\Products\Presenters;

use Upscale\Modules\Products\Transformers\ProductTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ProductPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return ProductTransformer
     */
    public function getTransformer()
    {
        return new ProductTransformer;
    }
}
