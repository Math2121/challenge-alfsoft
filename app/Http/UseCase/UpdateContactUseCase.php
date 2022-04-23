<?php

namespace App\Http\UseCase;

use App\Models\Contact;

class UpdateContactUseCase
{
    public function execute(array $data,string $id)
    {
        $restaurant =  Contact::find($id);
        $restaurant->update($data);

    }
}
