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
use App\Offre;
class OffreController extends Controller
{
    //

 

    public function index(){
  
  
    $listoffre = Offre::all();
      return view('offre.index',['listoffre'=>$listoffre])->with('listoffre',Offre::all());


	
	//Cv::where('user_id',Auth::user()->id)->get();

 }







 public function create(){
 	return view('offre.create');
 
 }

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


$offre = new Offre();
$offre->intitule=$request->input('intitule');
$offre->type=$request->input('type');

//if($request->hasFile('photo')){
 //$cv->photo=$request->photo->store('photo');
                               //}

 $offre->save();

session()->flash('success','Le offre à été bien enregistre!!');
 return redirect('offres');


 }
 public function edit($id){
  $offre =Offre::find($id);
  $this->authorize('update',$offre);
	return view('offre.edit',['offre'=>$offre]);
 
                          }

 public function update(Request $request, $id){
 	$offre =Offre::find($id);
   //if($request->hasFile('photo')){
        //Storage::delete($cv->photo);
 //$cv->photo=$request->photo->store('photo');
                              //  }
 	$offre->intitule=$request->input('intitule');
$offre->type=$request->input('type');

 $offre->save();
  return redirect('offres');

 
                                               }


  public function show($id){
    
    return view('offre.show',['id'=>$id]);

 }
 public function destroy(Request $request, $id){
 	//return $request->all();
 	$offre =Offre::find($id);
      $this->authorize('delete',$offre);
     $offre->delete();
      return redirect('offres');
 }

















}
