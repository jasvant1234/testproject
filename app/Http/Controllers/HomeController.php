<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    return view('home');
    }
    public function user()
    {
        $users = User::all();
        return view('users',compact('users'));
    }
    public function user_edit($id)
    {
         echo "ok";
    }
    public function user_delete($id)
    {
        echo "ok";
    }

    public function status(Request $request){

        $user = User::find($request->id);
        $user->status = $request->status;
        $user->save();
       // return response()->json(['success'=>'Status change successfully.']);
    }
    public function myprofile()
    {
        return view('my_profile');
    }
    public function profile_update(Request $request,$id)
    {
        $name ="jasvant";
        $input = $request->all();
        $data = User::find($id);

        if ($request->hasFile("profile_image")) {
            $img = $request->file("profile_image");
            if (Storage::exists('public/profile_image' . $data->profile_image)) {
                Storage::delete('public/profile_image' . $data->profile_image);
            }
            $img->store('public/profile_image');
            $input['profile_image'] = $img->hashName();
        }
        $data->update($input);
        return redirect()->route('myprofile')->with(['success'=>'Profile UpdateSuccessfully']);
    }

}
