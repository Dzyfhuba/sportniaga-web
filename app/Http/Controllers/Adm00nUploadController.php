<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Adm00nUploadController extends Controller
{
    public function upload(){
        $item = Item::orderBy('id')->paginate(5);
        return view('pages.adm00n.mainpage', ['item' => $item]);
    }

    public function upload_process(Request $request){
    	$this->validate($request, [
    		'file' => 'required|file|image|mimes:jpeg,jpg,png|max:2048',
    		'club' => 'required',
    		'type' => 'required',
    		'year' => 'required',
    		'gk' => 'required',
    		'size' => 'required',
    		'material' => 'required',
            'price' => 'required',
    	]);

    	$file = $request->file('file');
    	$nama_file = time()."_".$request->club."_".$request->year."_".$request->type;
    	$tujuan_upload = 'data_file';
    	$file->move($tujuan_upload,$nama_file);

    	Item::create([
    		'file' => $nama_file,
    		'club' => $request->club,
    		'type' => $request->type,
    		'year' => $request->year,
    		'gk' => $request->gk,
    		'size' => $request->size,
    		'material' => ucwords($request->material),
            'price' => $request->price,
    	]);

    	return redirect()->back();
    }

    public function delete($id){
    	$item = Item::find($id);
        File::delete('data_file/'.$item->file);
    	$item->delete();
    	return redirect('/adm00n');
    }
}
