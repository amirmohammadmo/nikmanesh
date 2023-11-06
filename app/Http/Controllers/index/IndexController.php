<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use App\Models\Consultants;
use App\Models\Consultantstime;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function PHPUnit\Framework\isNull;

class IndexController extends Controller
{
    public function index(){
        $consultants=Consultants::all();
        return View('index.in',compact('consultants'));

    }
    public function res(Request $request){
       // $consultants=Consultants::all();
        $time=Time::all();
        $result=Consultantstime::where('consultan_id','=',$request->input('consultant'))->where('date','=',$request->input('date'))->get();







       $consultants=Consultants::find($request->input('consultant'));
      //dd($result->where('time_id','!=',1)->count());
       $date=$request->input('date');
        return View('index.impor',compact(['time','result','consultants','date']));
    }

}
