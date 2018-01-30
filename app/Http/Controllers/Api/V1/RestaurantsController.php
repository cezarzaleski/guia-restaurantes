<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\ApiControllerTrait;
use App\Restaurant;
use Laravel\Lumen\Routing\Controller as BaseController;

class RestaurantsController extends BaseController
{
    use ApiControllerTrait;

    /**
     * @var Restaurant
     */
    protected $model;
    /**
     * @var array
     */
    protected $rules = [
        'name' => 'required|min:3',
        'description' => 'required',
    ];
    /**
     * @var array
     */
    protected $messages = [
        'required' => ':attribute é obrigatório',
        'min' => ':attribute precisa de pelo menos :min caracteres'
    ];

    /**
     * RestaurantsController constructor.
     * @param $model
     */
    public function __construct(Restaurant $model)
    {
        $this->model = $model;
    }
}
