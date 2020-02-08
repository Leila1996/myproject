<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Experience;
use App\Formation;
use App\Competance;
use App\Profile;
use App\Cv;
use App\Http\Requests\cvRequest;
use Auth;

class CvController extends Controller
{
    //
    public function __construct(){
    	
  return $this->middleware('auth');



    }
//lister cv
public function index(){
  if (Auth::user()->is_admin) {
    # code..
    $listcv = Cv::all();

  }
  else{
    $listcv = Auth::user()->cvs;
      return view('cv.index',['listcv'=>$listcv])->with('listcv',Cv::all());

  }
	
	//Cv::where('user_id',Auth::user()->id)->get();

 }

public function index1(){
  if (Auth::user()->is_admin) {
    # code..
    $listcv = Cv::all();

  }
  else{
    $listcv = Auth::user()->cvs;
  }
  
  //Cv::where('user_id',Auth::user()->id)->get();
  return view('cv.index1',['listcv'=>$listcv]);
 
 }


///afficher la formular de creation de cv
 public function create(){
 	return view('cv.create');
 
 }
//enregister un cv
 public function store(cvRequest $request)
	 {
  // $request->validate([
    //'presentation' => 'required|max:100|max:3',
   // 'titre' => 'required',
//]);
 //$validatedData = $request->validate([
        //'name' => 'required|min:3',
   //   'presentation' => 'required', 

   // ]);


$cv = new Cv();
$cv->titre=$request->input('titre');
$cv->presentation=$request->input('presentation');
$cv->user_id= Auth::user()->id;
if($request->hasFile('photo')){
 $cv->photo=$request->photo->store('photo');
                               }
 // $cvname= time().'.'.$cv1->getCilentOriginalExtension();
//$cvpath=
 //}

 $cv->save();

session()->flash('success','Le cv à été bien enregistre!!');
 return redirect('cvs');


 }
/// recuperer un cv puit le metter un  le fonmrulaire
public function edit($id){
	$cv =Cv::find($id);
  $this->authorize('update',$cv);
	return view('cv.edit',['cv'=>$cv]);
 
 }
/// modifier un cv
 public function update(cvRequest $request, $id){
 	$cv =Cv::find($id);
   if($request->hasFile('photo')){
        Storage::delete($cv->photo);
 $cv->photo=$request->photo->store('photo');
                                  }
 	$cv->titre=$request->input('titre');
  $cv->presentation=$request->input('presentation');

 $cv->save();
  return redirect('cvs');

 
 }
 public function show($id){
    $listcv3 =Cv::find($id);
   
   $listformation = $listcv3->formations;
   $listcv =Cv::find($id);
 $listexperience = $listcv->experiences;
    $listcv1 =Cv::find($id);

 $listcompetance= $listcv1->competances;

 
    return view('cv.show',['id'=>$id,'listcv'=>$listcv],['listexperience'=>$listexperience,'listcompetance'=>$listcompetance,'listformation'=>$listformation]);

 }
 //supprimer un cv
 public function destroy(Request $request, $id){
 	//return $request->all();
 	$cv =Cv::find($id);
    $this->authorize('delete',$cv);
     $cv->delete();
      return redirect('cvs');
 }


public function getExperiences($id){

$listcv=Cv::find($id);

 return view('experience.create',['listcv'=>$listcv]);
}





public function getFormations($id){

$listcv=Cv::find($id);

 return view('formation.create',['listcv'=>$listcv]);
}






public function getCompetances($id){

$listcv=Cv::find($id);
return view('competance.create',['listcv'=>$listcv]);
}



public function getProfiles($id){
$listcv=Cv::find($id);
  return view('profile.create',['listcv'=>$listcv]);
}




 public function editExperiences($id){

   $experience =Experience::find($id);
  
  return view('experience.edit',['$experience'=> $experience]);
 
}

public function changeForm(){

   $user =Auth::user();
  
  return view('cv.change',['user'=>$user]);
 
}

public function change(Request $request){
  
 
  $user =Auth::user();


  $user->password =bcrypt($request->get('password'));
   $user->name =$request->get('name');
    $user->email =$request->get('email');
 
      $user->tel =$request->get('tel');
       
        $user->civilite =$request->get('civilite');
          $user->niveau =$request->get('niveau');

            $user->profession =$request->get('profession');
        if(request()->has('photo')){
          $photo=request()->file('photo');
          $photoname=time() .'.'.$photo->getClientOriginalExtension();
          $photopath =public_path('/photo/');
          $photo->move($photopath,$photoname);
           $user->photo ='/photo/'.$photoname;


         }


  $user->save();

  
  return redirect('cvs/');

  
  
 
}


   

}
