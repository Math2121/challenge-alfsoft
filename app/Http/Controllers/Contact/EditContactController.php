<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormContactRequest;
use App\Http\UseCase\UpdateContactUseCase;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class EditContactController extends Controller
{
    private $editContactUseCase;
    public function __construct()
    {
        $this->editContactUseCase = new UpdateContactUseCase();
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(FormContactRequest $request, $id)
    {
        //

        try {
            $this->editContactUseCase->execute($request->all(),$id);
            return redirect()->route('index')->with('success', 'Contact edited!');
        } catch (Exception $e) {
            dd($e);
            return redirect()->route('index')->with('error', 'Something going wrong!');
        }
    }
}
