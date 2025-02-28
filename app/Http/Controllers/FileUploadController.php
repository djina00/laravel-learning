<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as HandleFile;

class FileUploadController extends Controller
{
    function index(){
        // $file = File::find(5);
        // HandleFile::delete(public_path($file->file_path));
        // $file->delete();

        $files = File::all();
        return view('file-upload', ['files' => $files]);
    }
    function store(Request $request){

        $request->validate([
            'file' => ['required', 'image']
            //'file' => ['required', 'file', 'mimes:zip,pdf,csv', 'max:3000']
        ]);

        //local files
        //$file = Storage::disk('local')->put('/', $request->file('file'));
       // $file = $request->file('file')->store('/', 'local');

       //public files- files are not automaticly accessible in main public folder 
       //but we can make it acessible - php artisan storage:link (linking public folder inside storage folder and main public folder)
        //but some hosting servers doesn`t give a permission for php artisan storage:link!!!!!!!
        //solution is to directly upload files inside main public folder THIS IS SAFER TO TO
        //decond solution is to create our own disk - in config->filesystems i made disk -> dir_public
        
        // $file = $request->file('file');
        // $customName = 'laravel_' . Str::uuid();
        // $ext = $file->getClientOriginalExtension(); //built in method getClientOriginalExtension
        // $fileName = $customName. '.' . $ext;
       // $path = $file->storeAs('/', $fileName, 'dir_public');

    
       $file = $request->file('file')->store('/', 'dir_public');
       $fileStore = new File();
       $fileStore->file_path ='/uploads/' .  $file;
       $fileStore->save();

       //return redirect()->back();
       return redirect()->route('home');
    }

    function download(){
        //return Storage::disk('local')->download('3DPyToC15GSYYIXxI1sYWTZwGg5YcDTrmNsqnhQn.png');
    }
}
