<?php

namespace App\Http\Controllers;

use App\Http\Requests\Step1Request;
use App\Http\Requests\Step2Request;
use App\Http\Requests\Step3Request;
use App\Models\StepUI;
use Illuminate\Http\Request;

class StepUIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public static function super_index()
    {
        $stepUI=StepUI::where('completed',null)->first();
        if($stepUI==null)
           $step=0;
        else if($stepUI->question1!=null||$stepUI->question2!=null||$stepUI->question4!=null||$stepUI->question5!=null||$stepUI->question6!=null)
        $step=4;
        else if($stepUI->zip_code!=null||$stepUI->email!=null)
        $step=3;
        else if($stepUI->address!=null||$stepUI->city!=null)
           $step=2;
        else if($stepUI->first_name!=null||$stepUI->last_name!=null)
           $step=1;
        
       
        
            
        return array(
            "step"=>$step,
            "stepUI" => $stepUI,
            "stepUIs" => StepUI::where('completed','!=',null)->get(),
          );

    }

    public  function index()
    {

        $data=$this->super_index();
        $stepUI=$this->super_index()['stepUI'];
        if($stepUI==null)
        return view('step1',$data);
        else if($stepUI->address==null||$stepUI->city==null)
        return view('step2',$data);
        else if($stepUI->zip_code==null||$stepUI->email==null)
        return view('step3',$data);
        else if($stepUI->question1==null||$stepUI->question2==null||$stepUI->question4==null||$stepUI->question5==null||$stepUI->question6==null)
        return view('step4',$data);
        else
        return view('step1',$data);

        

    }
    public function index1()
    {
        $data=$this->super_index();
        return view('step1',$data);


    }

    public function index2()
    {

      
        $data=$this->super_index();
        $stepUI=$this->super_index()['stepUI'];
        if($stepUI==null)
        return view('step1',$data);
        else 
        return view('step2',$data);
    
    }
    public function index3()
    {

        $data=$this->super_index();
        $stepUI=$this->super_index()['stepUI'];
        if($stepUI==null)
        return view('step1',$data);
        else if($stepUI->address==null||$stepUI->city==null)
        return view('step2',$data);
        else 
        return view('step3',$data);
    }
    public function index4()
    {
        $data=$this->super_index();
        $stepUI=$this->super_index()['stepUI'];
        if($stepUI==null)
        return view('step1',$data);
        else if($stepUI->address==null||$stepUI->city==null)
        return view('step2',$data);
        else if($stepUI->zip_code==null||$stepUI->email==null)
        return view('step3',$data);
        else 
        return view('step4',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function store1(Step1Request $request)
    {
       
        $this->storeStepUI($request);
        return redirect('/index2');
    }
    public function store2(Step2Request $request)
    {
        $this->storeStepUI($request);
        return redirect('/index3');
    }
    public function store3(Step3Request $request)
    {
        // dd($request);
        $this->storeStepUI($request);
        return redirect('/index4');
    }
         public function store4(Request $request)
    {
        $this->storeStepUI($request);
        return redirect('/');
    }   


    public function storeStepUI($request)
    {
        $stepUI=$this->super_index()['stepUI'];
      
        if($stepUI==null)
        StepUI::create($request->all());
        else
        $stepUI->update($request->all());

        
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StepUI  $stepUI
     * @return \Illuminate\Http\Response
     */
    public function show(StepUI $stepUI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StepUI  $stepUI
     * @return \Illuminate\Http\Response
     */
    public function edit(StepUI $stepUI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StepUI  $stepUI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StepUI $stepUI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StepUI  $stepUI
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StepUI::find($id)->delete();
        return redirect()->back();
    }
}
