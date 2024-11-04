<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller {

    protected $employeesData = [
        [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'ivanov@gmail.com',
        ],
        [
            'name' => 'Petr',
            'surname' => 'Sidorov',
            'email' => 'sidorov@gmail.com',
        ],
    ];

    public function __invoke(){

        if (Employee::count() === 0) {

            foreach ($this->employeesData as $data) {
                $employee = new Employee();
                $employee->name = $data['name'];
                $employee->surname = $data['surname'];
                $employee->email = $data['email'];
                $employee->save();
            }
        }

        $employees = Employee::all();
        return view('employees', compact('employees'));
    }
}
