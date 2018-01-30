<?php

namespace App\Observers;


use App\Restaurant;

class RestaurantObserver
{
    use UploadObserverTrait;

    protected $field = 'photo';

    public function creating(Restaurant $model)
    {
        $this->sendFile($model);

    }

    public function deleting(Restaurant $model)
    {

    }

    public function updating(Restaurant $model)
    {

    }
}
