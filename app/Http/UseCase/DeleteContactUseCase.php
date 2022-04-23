<?php

namespace App\Http\UseCase;

use App\Models\Contact;

class DeleteContactUseCase
{
    public function execute(string $id)
    {
        $contacts = Contact::where('id', $id)->delete();

    }
}
