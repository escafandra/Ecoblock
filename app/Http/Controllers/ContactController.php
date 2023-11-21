<?php

namespace App\Http\Controllers;

use App\Actions\ContactStoreAction;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('contact');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        $contact = ContactStoreAction::execute($request);

        Mail::to('directorcomercial@ecoblock.com.co')->send(new ContactMail($contact));

        return redirect(route('contact'))->with('status', trans('contact.successful'));
    }
}
