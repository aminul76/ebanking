<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\designation;
use App\Category;
use Response;

class WriterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::where('role_id',2)->get();
                 $categories=Category::all();
       
        return view('writers.index',compact('users','categories'));

    }

    public function store(Request $request)
    {


        
        $this->validate($request,[
            
          
            'password' => 'required',
            'email' => 'required|unique:users'
        ]);

       

         $user=new User();
        
         $user->name_of_bank=$request->name_of_bank;
         $user->short_name=$request->short_name;
         $user->head_office_address=$request->head_office_address;
         $user->holding=$request->holding;
         $user->division=$request->division;
         $user->district=$request->district;
         $user->thana=$request->thana;

         $user->mobile_no=$request->mobile_no;

         $user->contact_mobile=$request->contact_mobile;
         $user->contact_email=$request->contact_email;
         $user->contact_designation=$request->contact_designation;
       
         $user->email=$request->email;
         $user->password=Hash::make($request->password);
         $user->role_id= 2;

         $user->save();
    
    
    
            
        return redirect('/admin/writer')->with('successMsg', 'Contact saved!');
    }
    public function create()
    {
        $divisions = DB::table('divisions')->get();
        $districts = DB::table('districts')->get();
        $upazilas = DB::table('upazilas')->get();
       return view('writers.create',compact('divisions','districts','upazilas'));
    }

    
        /* Dependent Table Start  */
        public function getDistrictsByDivision(Request $request){
            $data=$request->all();
            $districts=DB::table('districts')
            ->where('districts.division_id','=',$data['division'])
            ->select('id','bn_name')
            ->get();
            return Response::json($districts);
        }
    
        public function getThanaByDistrict(Request $request){
            $data=$request->all();
            $thana=DB::table('upazilas')
            ->where('upazilas.district_id','=',$data['districts'])
            ->select('id','bn_name')
            ->get();
            return Response::json($thana);
        }

    public function edit($id)
    {
        $divisions = DB::table('divisions')->get();
        $districts = DB::table('districts')->get();
        $upazilas = DB::table('upazilas')->get();
        $writers=User::find($id);
        return view('writers.edit',compact('writers','divisions','districts','upazilas'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'bangla_name' => 'required',
            
            'password' => 'required',
            'email' => 'required'
        ]);
        $user=User::findOrFail($id);
        
        $user->name_of_bank=$request->name_of_bank;
        $user->short_name=$request->short_name;
        $user->head_office_address=$request->head_office_address;
        $user->holding=$request->holding;
        $user->division=$request->division;
        $user->district=$request->district;
        $user->thana=$request->thana;

        $user->mobile_no=$request->mobile_no;

        $user->contact_mobile=$request->contact_mobile;
        $user->contact_email=$request->contact_email;
        $user->contact_designation=$request->contact_designation;
      
        $user->email=$request->email;
        if ($request->password !=null) {
            $user->password=Hash::make($request->password);

        }
        $user->role_id= 2;

        $user->update();
   
   
   
           
       return redirect('/admin/writer')->with('success', 'Contact saved!');
    }

    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
     
        return redirect()->route('writer.index')->with('successMsg', 'Contact Delete!');
    }

}
