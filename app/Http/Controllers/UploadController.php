<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        
    }
    // public function upload(Request $request){
    //     // return response($request);
    //     $validator = Validator::make($request->all(), [
    //         'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
    //     ]);
        
    //     if ($validator->fails()) {
    //         return sendCustomResponse($validator->messages()->first(), 'error', 500);
    //     }
    //     $uploadFolder = 'Logo';
    //     $image = $request->file('image');
    //     $image_uploaded_path = $image->store($uploadFolder, 'public');
    //     $uploadedImageResponse = array(
    //         "image_name" => basename($image_uploaded_path),
    //         "image_url" => Storage::disk('public')->url($image_uploaded_path),
    //         "mime" => $image->getClientMimeType()
    //     );
    //     return sendCustomResponse('File Uploaded Successfully', 'success', 200, $uploadedImageResponse);
    // }
    // public function upload(Request $request) {
    //     if(!$request->hasFile('img')) {
    //         return response()->json(['upload_file_not_found'], 400);
    //     }
    //     $file = $request->file('img');
    //     if(!$file->isValid()) {
    //         return response()->json(['invalid_file_upload'], 400);
    //     }
    //     $path = public_path() . '/uploads/images/store/';
    //     $file->move($path, $file->getClientOriginalName());
    //     return response()->json(compact('path'));
    //     return response($request);
    //  }
}