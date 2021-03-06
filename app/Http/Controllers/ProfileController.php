<?php

namespace App\Http\Controllers;
use Auth;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles=Profile::all();


        return view('profiles.index',compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'headline'=>'required',
            'summary'=>'required'

        ]);
        // validate the data

        // store in the database
        $userProfile = new Profile;
        $userProfile->user_id=Auth::user()->id;
        $userProfile->first_name = $request->first_name;
        $userProfile->last_name=$request->last_name;
        $userProfile->email=$request->email;
        $userProfile->headline=$request->headline;
        $userProfile->summary=$request->summary;
        $userProfile->save();
        return redirect()->route('profiles.index')->with('success','profiles created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profilesInformation=Profile::find($id);
        return view('profiles.show')->with('profileInfo',$profilesInformation);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profilesInformation=Profile::find($id);
        return view('profiles.edit')->with('profileInfo',$profilesInformation);
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

        $request->validate([
             'First_name'=>'required',
                'Last_name'=>'required',
                'Email'=>'required',
                'Summary'=>'required',
                'Headline'=>'required'
            ]);
        $profileUpdate=Profile::find($id);
        $profileUpdate->user_id=Auth::user()->id;
        $profileUpdate->first_name=$request->First_name;
        $profileUpdate->last_name=$request->Last_name;
        $profileUpdate->email=$request->Email;
        $profileUpdate->headline=$request->Headline;
        $profileUpdate->summary=$request->Summary;
        $profileUpdate->save();
        return redirect()->route('profiles.index')->with('success','Profile Updated Successfully');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $profileDelete=Profile::find($id);
       $profileDelete->delete();
       return redirect()->route('profiles.index')->with('Success','Profile Deleted');

    }
}
