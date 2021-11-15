<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\DB;
use Auth;
use Validator;

class ContactController extends Controller
{
    //Show the Data 
    public function index()
    {
        $id = Auth::id(); 
        $contact=DB::table('contacts')
                ->where('users_id', '=', $id)->paginate(4);
        return view('dashboard', ['contact' => $contact]);
    }
    //create view for Add
    public function create()
    {
        return view('user.add');
    }
    //Save Method for data
    public function store()
    {
        $id = Auth::id(); 
        contact::create([
            'users_id'=>$id,
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'address'=>request('address')
        ]);
        $contact=DB::table('contacts')
                ->where('users_id', '=', $id)->paginate(4);
        return view('dashboard', ['contact' => $contact]);
    }
    //Create Edit View 
    public function edit(contact $contact)
    {
        return view('user.update', ['contact' => $contact]);
    }
    //Saving Edit 
    public function update(contact $contact)
    {
        $contact->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'address'=>request('address')
        ]);
        return redirect('dashboard');
    }
   // using for delete data
    public function destroy(contact $contact)
    {
        $contact->delete();
        return redirect('dashboard');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('');
    }
}