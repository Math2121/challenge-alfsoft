<?php

namespace App\Http\UseCase;

use App\Models\Contact;

class CreateContactUseCase
{
    public function execute(array $data)
    {
        $contact = new Contact();

        $contact->create([
            'name' => $data['name'],
            'contact' => $data['contact'],
            'email' => $data['email'],
        ]);

    }
}
