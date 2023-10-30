<?php

namespace App\Actions;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactStoreAction
{
    public static function execute(Request $request): Contact
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();

        return $contact;
    }
}
