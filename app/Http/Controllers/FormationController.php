<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv; 
use App\Formation;


class FormationController extends Controller
{
    //
public function index($id){
    
    //ajouter $id
    //$cv = find ($id)   
   // $listexperience = Experience::all();
    $listcv =Cv::find($id);
 $listformation = $listcv->formations;

///->with('listcv',Cv::all());

    return view('formation.index',['listformation'=> $listformation])->with('listcv',Cv::all());
 
 }



public function create($id){
 		$listcv =Cv::find($id);

 	return view('formation.create',['listcv'=>$listcv])->with('listcv',Cv::all());
 
 }




public function store(Request $request,$id1)
	 {
   //ajouter ;id

   $formation = new Formation();
 $formation->diplome=$request->input('diplome');
  $formation->domaine=$request->input('domaine');
  $formation->lieu=$request->input('lieu');
  $formation->debut=$request->input('debut');
    $formation->fin=$request->input('fin');
    $formation->cv_id=$request->cv_id;
    
     
 

   $formation->save();

session()->flash('success','votre experiences  à été bien enregistre!! :D');
 return redirect('formations/'.$id1);




 }



public function edit($id1,$id){
		 $cv =Cv::find($id);
	$listformation = Formation::find($id1);
     
	return view('formation.edit',['listformation'=> $listformation],['cv'=>$cv]);
	


 }


// modifier un cv
 public function update(Request $request, $id,$id1){
 $formation =Formation::find($id);
 $formation->diplome=$request->input('diplome');
 $formation->domaine=$request->input('domaine');
 $formation->lieu=$request->input('lieu');
 $formation->debut=$request->input('debut');
 $formation->fin=$request->input('fin');
     $formation->cv_id=$request->cv_id;

 $formation->save();
    
    return redirect('formations/'.$formation->cv_id);

 }


public function show($id){
    
 return view('formation.show',['id'=>$id]);
 //supprimer un cv
 }


 public function destroy(Request $request, $id1){
 	//return $request->all();
	$listformation = Formation::find($id1);
	 

    $this->authorize('delete',$listformation);
     $listformation->delete();
    return redirect('formations/'.$id1);

 
 }


public function getFormations($id){

$listcv=Cv::find($id);

 return view('formation.create',['listcv'=>$listcv]);
}















 






}
