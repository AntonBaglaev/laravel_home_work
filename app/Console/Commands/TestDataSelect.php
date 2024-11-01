<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class TestDataSelect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:data-select';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle() {
//        $employees = Employee::all();  // получаем все записи из БД
//        foreach ($employees as $employee) {
//            echo $employee->first_name . ' ' . $employee->id . PHP_EOL;
//        }
//        return 0;

//        $employees = Employee::find(2);  // получаем пользователя с id = 2
//        echo $employees['first_name'] . ' ' . $employees['id'] . PHP_EOL;
//        return 0;

//        $employees = Employee::where('first_name', '=', 'John')->get();  // получаем все строки таблициы с именем John
//        foreach ($employees as $employee) {
//            echo $employee->first_name . ' ' . $employee->id . PHP_EOL;
//        }
//        return 0;

        $employees = Employee::where('first_name', '=', 'John')  // получаем все строки таблициы с именем John и возраст больше 27 лет
            ->where('age', '>', 27)->get();
        foreach ($employees as $employee) {
            echo $employee->first_name . ' ' . $employee->id . PHP_EOL;
        }
        return 0;

    }
}
