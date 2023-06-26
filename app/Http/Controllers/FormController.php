<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('forms.index', compact('forms'));
    }

    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $form = Form::create($request->all());
        return redirect()->route('forms.index')->with('success', 'Ur message has been recorded');
    }
}
?>