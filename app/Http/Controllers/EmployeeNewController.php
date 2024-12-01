<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeNew;
use Illuminate\Support\Facades\Redirect;

class EmployeeNewController extends Controller {

    public function show($id = null) {
        return View('employee_new', ['employee' => $id ? EmployeeNew::where('id', $id)->first() : null]);
    }

    public function store(Request $request) {
        $employee = new EmployeeNew($request->all());

//        $employee->first_name = $request->input('first_name');
//        $employee->last_name = $request->input('last_name');
//        $employee->department = $request->input('department');

        // если данные в виде массива то преобразуем в строку с помощью функции serialize()
        $employee->department = serialize($request->input('department'));

        $employee->save();

        return Redirect::route('show_employee', ['id' => $employee->id]);
    }

}
