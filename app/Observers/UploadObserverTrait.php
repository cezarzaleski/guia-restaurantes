<?php

namespace App\Observers;

trait UploadObserverTrait
{
    protected function sendFile($model)
    {
        $field = $this->field;
        if ($model->field->isValid()) {
            $this->upload();
        }
    }
}
