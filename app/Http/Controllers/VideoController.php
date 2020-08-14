<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;

class VideoController extends Controller
{
    public function daftarvideo(){
		$vid = Video::get();
		return view('daftarvideo',['videos' => $vid]);
    }
    
    //proses upload video
    public function proses_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|mimetypes:video/mp4,video/x-matroska,video/x-msvideo,video/webm,video/x-flv,video/mpeg',
            'judul' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        /** 
        // nama file
        echo 'File Name: ' . $file->getClientOriginalName();
        echo '<br>';

        // ekstensi file
        echo 'File Extension: ' . $file->getClientOriginalExtension();
        echo '<br>';

        // real path
        echo 'File Real Path: ' . $file->getRealPath();
        echo '<br>';

        // ukuran file
        echo 'File Size: ' . $file->getSize();
        echo '<br>';

        // tipe mime
        echo 'File Mime Type: ' . $file->getMimeType();
        */
        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'uploaded_files';

        // upload file
        $file->move($tujuan_upload, $nama_file);

        Video::create([
            'file' => $nama_file,
            'judul' => $request->judul,
        ]);
        
        echo "<h1 style='text-align:center'>Video sukses diunggah</h1>";
        
        return view('form_unggah');
    }
}
