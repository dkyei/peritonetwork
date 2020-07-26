<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skillsFormController extends Controller
{
    //
    public function createForm(Request $request) {
        return view('skills');
    }

    // Store Contact Form data
    public function skillsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'experience' => 'required',
            'skills' => 'required',
            'years' => 'required',
            'sex'=>'required',
            'link' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->all());

        //
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
