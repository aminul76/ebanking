<?php

namespace App\Http\Controllers\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\dps;
use DB;
use App\Exports\AuthorExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AuthorDpsImport;

class DpsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dps=dps::all(); 
        return view('author.dps.index',compact('dps'));  
    }
     
    public function create()
    {
        $dps=dps::all();
        return view('author.dps.create',compact('dps'));
       
    }

    public function export() 
    {
        return Excel::download(new AuthorExport, 'dps.xlsx');
    }

    public function import(Request $request) 
    {
        $import=Excel::import(new AuthorDpsImport, $request->file('import_file'));
         if ($import) {
                $notification=array(
                'messege'=>'Product Import Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);                      
            }else{
              return Redirect()->back();
             } 
          
    }
}
