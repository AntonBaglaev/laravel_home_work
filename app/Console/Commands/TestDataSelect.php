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
         // получаем все записи из БД
//        $employees = Employee::all();
//        foreach ($employees as $employee) {
//            echo $employee->first_name . ' ' . $employee->id . PHP_EOL;
//        }
//        return 0;

          // получаем пользователя с id = 2
//        $employees = Employee::find(2);
//        echo $employees['first_name'] . ' ' . $employees['id'] . PHP_EOL;
//        return 0;

          // получаем все строки таблициы с именем John
//        $employees = Employee::where('first_name', '=', 'John')->get();
//        foreach ($employees as $employee) {
//            echo $employee->first_name . ' ' . $employee->id . PHP_EOL;
//        }
//        return 0;

        // получаем все строки таблициы с именем John и возраст больше 27 лет
        // $employees = Employee::where('first_name', '=', 'John')
        //    ->where('age', '>', 27)->get();
        // foreach ($employees as $employee) {
        //    echo $employee->first_name . ' ' . $employee->id . PHP_EOL;
        // }
        // return 0;

        // сортируем по возрасту и ограничиваем вывод двумя строками
        // $employees = Employee::orderBy('age', 'ASC')->limit(2)->get();
        // foreach ($employees as $employee) {
        //        echo $employee->first_name . ' ' . $employee->id . ' ' . $employee->age . PHP_EOL;
        // }
        // return 0;

        // сортируем по возрасту и ограничиваем вывод двумя строками и получаем 2 результата начиная с 3 строки
        $employees = Employee::orderBy('age', 'ASC')->skip(2)->limit(2)->get();
        foreach ($employees as $employee) {
            echo $employee->first_name . ' ' . $employee->id . ' ' . $employee->age . PHP_EOL;
        }
        return 0;

    }
}
