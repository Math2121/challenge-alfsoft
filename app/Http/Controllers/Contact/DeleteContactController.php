<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\UseCase\DeleteContactUseCase;

class DeleteContactController extends Controller
{
    private $deleteContactUseCase;
    public function __construct()
    {
        $this->deleteContactUseCase = new DeleteContactUseCase();
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        //

        try {
            $this->deleteContactUseCase->execute($id);
            return redirect()->route('index')->with('success', 'Contact delete!');
        } catch (\Throwable $th) {
            return view('index')->with('error', 'Something going wrong!');
        }
    }
}
