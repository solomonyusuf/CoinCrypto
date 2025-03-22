<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Storage;
  
  class EditorController extends Controller
  {

      public function uploadImage(Request $request)
      {
        if($request->hasFile('upload')) {
          $filenamewithextension = $request->file('upload')->getClientOriginalName();
          $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
          $extension = $request->file('upload')->getClientOriginalExtension();
          $filenametostore = $filename.'_blog_image_'.time().'.'.$extension;
          $logo = asset('uploads/'.time().$filenametostore);
          //Upload the file
          $request->file('upload')->move(public_path('uploads'), $logo);

          $CKEditorFuncNum = $request->input('CKEditorFuncNum');
          $temp = $logo;

          return response()->json([
            'temp' => $temp,
            'uploaded' => 1, // ✅ REQUIRED for CKEditor 5
            'fileName' => $filenametostore
        ]);
      }
    }
    //  public function uploadImage(Request $request)
    //   {
    //     if($request->hasFile('upload')) {
    //       $filenamewithextension = $request->file('upload')->getClientOriginalName();
    //       $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    //       $extension = $request->file('upload')->getClientOriginalExtension();
    //       $filenametostore = $filename.'_blog_image_'.time().'.'.$extension;
    //       $logo = asset('uploads/'.time().$filenametostore);
    //       //Upload the file
    //       $request->file('upload')->move(public_path('uploads'), $logo);

    //       $CKEditorFuncNum = $request->input('CKEditorFuncNum');
    //       $temp = $logo;

    //       $msg = 'Image added successfully';
    //       $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$temp', '$msg')</script>";

    //       @header('Content-type: text/html; charset=utf-8');
    //       echo $re;
    //   }
    // }
  }
  
?>
