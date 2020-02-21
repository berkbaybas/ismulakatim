<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Interview;
use App\Http\Resources\Interview as InterviewResource;


class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interview = Interview::orderBy('id','desc')->paginate(35);

        return InterviewResource::collection($interview);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interview = $request -> isMethod('put') ? Interview::findOrFail
        ($request->interview_id) : new Interview;

        $interview->id = $request->input('interview_id');
        $interview->company_name = $request->input('company_name');
        $interview->company_interview = $request->input('company_interview');
        $interview->company_offer = $request->input('company_offer');


        if($interview->save()){
            return new InterviewResource($interview);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get interview
        $interview = Interview::findorFail($id);

        return new InterviewResource($interview);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //get interview
         $interview = Interview::findorFail($id);

         if($interview->delete()){
            return new InterviewResource($interview);
         }

    }
}
