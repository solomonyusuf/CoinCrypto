<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Storage;
  
  class EditorController extends Controller
  {

      public function uploadImage(Request $request)
      {
        if($request->hasFile('upload')) {
             
            //Upload the file
            $path = $request->file('upload')->store('uploads', 'public');
            

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/storage/'.$path);

            $msg = 'Image added successfully';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
  }
  
?>
