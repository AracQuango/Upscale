<?php

namespace Upscale\Modules\Users\Transformers;

use Upscale\Modules\Users\Models\User;
use League\Fractal\TransformerAbstract;

/**
 * Class UserTransformer.
 *
 * @package namespace Upscale\Transformers;
 */
class UserTransformer extends TransformerAbstract
{
    /**
     * Transform the User entity.
     *
     * @param \Upscale\Entities\User $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'id'         => (int) $model->id,
            'first_name' => $model->first_name,
            'last_name'  => $model->last_name,
            'full_name'  => "{$model->first_name} {$model->last_name}",
            'email'      => $model->email,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
