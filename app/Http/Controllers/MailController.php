<?php

namespace App\Http\Controllers;

use App\Mail\MyEmail;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'fileToUpload' => 'required|file|max:2048',
        ]);
        $file = $request->file('fileToUpload');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->store('uploads');


        $savedFile = File::create([
            'name' => $fileName,
            'path' => $filePath,
        ]);
        $adminEmail = 'ikrammir714@gmail.com';
        Mail::to($adminEmail)->send(new MyEmail($savedFile));
        return "File uploaded successfully.";
    }
}
