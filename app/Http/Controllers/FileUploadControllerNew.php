<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadControllerNew extends Controller
{
    public function showForm() {
        return view('upload-form');
    }

    public function fileUpload(Request $request) {
        // загрузка нескольких файлов
        foreach ($request->upload_photo as $photo) {
            var_dump($photo);
        }



        // загрузка одного файла
//        if($request->hasFile('upload-photo')){
//            $file = $request->file('upload-photo');
//            echo $file->path();
//            echo '<br>';
//            echo $file->getClientOriginalName();
//            echo '<br>';
//            echo $file->getClientOriginalExtension();
//            $file->storeAs('images', $file->getClientOriginalName());
//        } else {
//            echo 'No file uploaded';
//        }
    }
}
