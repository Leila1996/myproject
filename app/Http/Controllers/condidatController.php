<?php

namespace App\Http\Controllers;
use App\Condidat;

use Illuminate\Http\Request;

class condidatController extends Controller
{
    //

public function articles(){
 echo"affichage des articles";
 }



   public function viewCondidat()
	{
    $condidat=Condidat::all();
  $arr=array('condidat'=>$condidat);


	 	return view('condidat.view',$arr);

}

public function newCondidat()
	 {
	$newCondidat = new Condidat();
$newCondidat->email="stylo";
 $newCondidat->lieu="stylo à bille de haute qualité....";
 $newCondidat->avatar="sliela ldjlf";
 $newCondidat->save();

}

public function listCondidat(){

$articles = Condidat::all();
print_r($articles);
}
public function AddCondidat(Request $request)
	 {

   
    	# code...
   

      	$condidat= new Condidat();
      	$condidat->email=$request->input('email');
         $condidat->lieu=$request->input('lieu');
      	 $condidat->avatar=$request->input('avatar');
      	 $condidat->save();
         return redirect('cvs');
	 }

public function create(){

       return view('condidat.add');

}



}
