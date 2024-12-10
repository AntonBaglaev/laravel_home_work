<?php

namespace App\Http\Controllers;

use App\Forms\EmployeeForm;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class FormBuilderTestController extends Controller
{
    public function show(FormBuilder $formBuilder) {
        $form = $formBuilder->create(EmployeeForm::class, [
            'method' => 'POST',
            'url' => route('post_builder_test')
        ]);

        return view('show_form', compact('form'));
    }
}
