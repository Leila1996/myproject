<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv; 
use App\Profile;
class ProfileController extends Controller
{
    //
    public function index($id){
    
    //ajouter $id
    //$cv = find ($id)   
   // $listexperience = Experience::all();
     $listcv =Cv::find($id);
 $listprofile = $listcv->profile;

///->with('listcv',Cv::all());

    return view('profile.index',['listprofile'=> $listprofile])->with('listcv',Cv::all());
 
 }


 public function create($id){
 		$listcv =Cv::find($id);

 	return view('profile.create',['listcv'=>$listcv])->with('listcv',Cv::all());
 
 }


 public function store(Request $request,$id1)
	 {
   //ajouter ;id

  $profile = new Profile();
  $profile->nom=$request->input('nom');
  $profile->prenom=$request->input('prenom');
  $profile->email=$request->input('email');
  $profile->tel=$request->input('tel');
  $profile->adress=$request->input('adress');
 


  $profile->cv_id=$request->cv_id;
    
  $profile->save();

session()->flash('success','votre experiences  à été bien enregistre!! :D');
 return redirect('cvs/'.$id1);




 }

public function edit($id1,$id){
		 $cv =Cv::find($id);
	$listprofile = Profile::find($id1);
     
	return view('profile.edit',['listprofile'=> $listprofile],[' cv'=>$cv]);
	


 }




 public function update(Request $request, $id,$id1){
  $formation= Profile::find($id1);
$profile->nom=$request->input('nom');
  $profile->prenom=$request->input('prenom');
  $profile->email=$request->input('email');
  $profile->tel=$request->input('tel');
  $profile->adress=$request->input('adress');
  
    return redirect('cvs/'.$profile->cv_id);

 }


public function show($id){
    
 return view('profile.show',['id'=>$id]);
 //supprimer un cv
 }


 public function destroy(Request $request, $id1){
 	//return $request->all();
	$listprofile = Profile::find($id1);
	 

    $this->authorize('delete',$listprofile);
    $listprofile->delete();
    return redirect('cvs/'.$id1);

 
 }







public function getProfiles($id){
$listcv=Cv::find($id);
return view('profile.create',['listcv'=>$listcv]);
}

















}
