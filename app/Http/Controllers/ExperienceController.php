<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;

use App\Cv;

class ExperienceController extends Controller
{
    //




    //lister cv
public function index($id){
    
    //ajouter $id
    //$cv = find ($id)   
   // $listexperience = Experience::all();
     $listcv =Cv::find($id);
 $listexperience = $listcv->experiences;
 

///->with('listcv',Cv::all());

    return view('experience.index',['listexperience'=>$listexperience])->with('listcv',Cv::all());
 
 }


///afficher la formular de creation de cv
 public function create($id){
 		$listcv =Cv::find($id);

 	return view('experience.create',['listcv'=>$listcv])->with('listcv',Cv::all());
 
 }
//enregister un cv
 public function store(Request $request,$id1)
	 {
   //ajouter ;id

   $experience = new Experience();
 $experience->intituler=$request->input('intituler');
  $experience->lieu=$request->input('lieu');
  $experience->debut=$request->input('debut');
    $experience->fin=$request->input('fin');
    $experience->cv_id=$request->cv_id;
    
     
 

  $experience->save();

session()->flash('success','votre experiences  à été bien enregistre!! :D');
 return redirect('experiences/'.$id1);




 }
/// recuperer un cv puit le metter un  le fonmrulaire
public function edit($id1,$id){
		 $cv =Cv::find($id);
	 $listexperience = Experience::find($id1);
     
	return view('experience.edit',['listexperience'=> $listexperience],[' cv'=>$cv]);
	


 }
/// modifier un cv
 public function update(Request $request, $id,$id1){
$experience =Experience::find($id);
 $experience->intituler=$request->input('intituler');
  $experience->lieu=$request->input('lieu');
  $experience->debut=$request->input('debut');
    $experience->fin=$request->input('fin');
    $experience->cv_id=$request->cv_id;
    
     
     $experience->save();
    return redirect('experiences/'.$experience->cv_id);

 }
 public function show($id){
    
 return view('experience.show',['id'=>$id]);
 //supprimer un cv
 }


 public function destroy(Request $request, $id){
  //return $request->all();

    $experience =Experience::find($id);
    $this->authorize('delete',$experience);
     $cv->delete();
      return redirect('experiences/'.$experience->id);
 }


 public function getExperiences($id){
 	//return $request->all();
 	$cv =Cv::find($id);

return view('experience.create')->with('listcv',$cv);

 
 }






 


}
