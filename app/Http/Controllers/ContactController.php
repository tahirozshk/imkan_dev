<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(\App\Http\Requests\ContactFormRequest $request)
    {
        // \App\Models\Contact::create($request->validated());

        return back()->with('success', 'Mesajınız başarıyla iletildi. En kısa sürede size dönüş yapacağız.');
    }
}
