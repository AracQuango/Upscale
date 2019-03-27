<?php

namespace Upscale\Modules\Products\Transformers;

use Upscale\Modules\Products\Models\Product;
use League\Fractal\TransformerAbstract;

/**
 * Class UserTransformer.
 *
 * @package namespace Upscale\Transformers;
 */
class ProductTransformer extends TransformerAbstract
{
    /**
     * Transform the Product entity.
     *
     * @param Product $model
     * @return array
     */
    public function transform(Product $model)
    {
        return [
            'id'          => (int) $model->id,
            'title'       => $model->name,
            'slug'        => $model->slug,
            'sku'         => $model->sku,
            'info'        => $model->info,
            'price'       => $model->price,
            'options'     => $model->options,
            'excerpt'     => (double) $model->excerpt,
            'description' => $model->description,
            'keywords'    => $model->meta_keywords,
            'deleted_at'  => $model->deleted_at,
            'created_at'  => $model->created_at,
            'updated_at'  => $model->updated_at,
        ];
    }
}
