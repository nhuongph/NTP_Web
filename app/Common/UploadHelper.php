<?php
namespace App\Common;

class UploadHelper {

    public function UploadFile($file, $destinationPath = "img/uploads/") {
    	
        $extension = $file->getClientOriginalExtension(); // getting image extension

        $fileName = uniqid().'.'.$extension; // rename image

        $file->move($destinationPath, $fileName); // uploading file to given path

        return array($extension,$fileName);
    }
}