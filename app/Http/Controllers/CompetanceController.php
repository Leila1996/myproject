<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Competance;

class CompetanceController extends Controller



{
    //


    //lister cv
public function index($id){
    
    //ajouter $id
    //$cv = find ($id)   
   // $listexperience = Experience::all();
     $listcv =Cv::find($id);
 $listcompetance = $listcv->competances;

///->with('listcv',Cv::all());

    return view('competance.index',['listcompetance'=>$listcompetance])->with('listcv',Cv::all());
 
 }



 public function create($id){
 		$listcv =Cv::find($id);

 	return view('competance.create',['listcv'=>$listcv])->with('listcv',Cv::all());
 
 }



public function store(Request $request,$id1)
	 {
   //ajouter ;id

   $competance = new Competance();
 $competance->competance=$request->input('competance');
  $competance->niveau=$request->input('niveau');
  
    $competance->cv_id=$request->cv_id;
    
     
 

  $competance->save();

session()->flash('success','votre competances  à été bien enregistre!! :D');
 return redirect('competances/'.$id1);




 }

public function edit($id1,$id){
		 $cv =Cv::find($id);
	 $listcompetance = Competance::find($id1);
     
	return view('competance.edit',['listcompetance'=> $listcompetance],['cv'=>$cv]);
                              }


  public function update(Request $request, $id,$id1){
$competance =Competance::find($id);
$competance->competance=$request->input('competance');
  $competance->niveau=$request->input('niveau');
  $competance->cv_id=$request->cv_id;
    
     
 

  $competance->save();
  
    return redirect('competances/'.$competance->cv_id);

                                                    }


  public function show($id){
    
 return view('competance.show',['id'=>$id]);
 //supprimer un cv
 }
 public function destroy(Request $request, $id1){
 	//return $request->all();
	$listcompetance =Competance::find($request->id);
	 

    $this->authorize('delete',$listcompetance);
     $listexperience->delete();
    return redirect('competances/'.$id1);
                                                 }


 public function getExperiences($id)
 {
 	//return $request->all();
 	$cv =Cv::find($id);

return view('competance.create')->with('listcv',$cv);

 
 }









}
