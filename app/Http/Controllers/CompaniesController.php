<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\User;
use Illuminate\Support\Facades\Log;
use Mail;
use App\Mail\SendMail;


class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('companies.index')->with('companies',Company::all());
    }

    public function userCompanies()
    {
        $companies = Company::where('user_id', auth()->id())->get();
        return view('companies.myCompanies', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::all();
        $companies = Company::where('user_id', auth()->id())->get();

        $currentUser = auth()->user();


        // if ($users->count() ==0 ) {
             
        //     return redirect()->route('user.create') ;
            
        // }

        if($companies->count() == 1 && $currentUser->subscribed == 0){
            return view('subscribe');
        }
        $companies = Company::where('user_id', auth()->id())->get();
        return view('companies.create', compact('companies'))->with('users',$users);

            // return view('companies.create')->with('users',$users);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "content" => "required",
        ]);

        

        $company = Company::create([
            "title" => $request->title,
            "content" => $request->content,
            "user_id" => auth()->id()
        ]);



        $company->users()->attach($request->users);

        foreach($company->users as $user){
           
            
            $testMailData = [
                'title' => 'You Joined a new company',
                'body' => 'you joined a new f comapuny'
            ];
    
            Mail::to($user->email)->send(new SendMail($testMailData));

            Log::info($user->email);
        }






        $companies = Company::where('user_id', auth()->id())->get();
        return view('companies.myCompanies', compact('companies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit')->with('companies',$company)->with('users', User::all());
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
        $company = Company::find($id);


        $this->validate($request, [
            "title" => "required",
            "content" => "required",
            "users" => "required"
        ]);

        $company->title =  $request->title;
        $company->content =  $request->content;
        $company->users()->sync($request->users);
        $company->save();

        

        $companies = Company::where('user_id', auth()->id())->get();
        return view('companies.myCompanies', compact('companies'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
