<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormContactRequest;
use App\Http\UseCase\CreateContactUseCase;
use Exception;
use Illuminate\Http\Request;

class CreateContactController extends Controller
{
    private $createContactUseCase;
    public function __construct()
    {
        $this->createContactUseCase = new CreateContactUseCase();
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(FormContactRequest $request)
    {
        //
        try {

            $this->createContactUseCase->execute($request->all());
            return redirect()->route('index')->with('success', 'Contact create with success');
        } catch (Exception $e) {

            return redirect()->back();
        }
    }
}
