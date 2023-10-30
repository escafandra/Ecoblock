<?php

namespace App\Http\Controllers;

use App\Actions\ContactStoreAction;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('contact');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        ContactStoreAction::execute($request);

        return redirect(route('contact'))->with('status', trans('contact.successful'));
    }
}
