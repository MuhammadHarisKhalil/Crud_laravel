<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactApi extends Controller
{
    //
    function addcontact(Request $req)
    {
       $contact= new contact;
       $contact->first_name=$req->firstname;
       $contact->last_name=$req->lastname;
       $contact->users_id=$req->userid;
       $contact->address=$req->address;
       $result=$contact->save();
       if($result==1){

        return ["Result"=>"Data Submitted"];
        

       }
       else{
        return ["Result"=>"Data not Submitted"];
       }
    }

    function getcontact()
    {
        $id = 4;
        return   $contact=DB::table('contacts')
                ->where('users_id', '=', $id)->get();
    }
    function updatecontact(Request $req)
    {
        $contact=contact::find($req->id);
        $contact->first_name=$req->firstname;
        $contact->last_name=$req->lastname;
        $contact->address=$req->address;
        $result=$contact->save();
       if($result==1){

        return ["Result"=>"Data Update"];
        

       }
       else{
        return ["Result"=>"Data not update"];
       }
    }
    function deletecontact(Request $req)
    {
        $contact = contact::find($req->id);
        $result=$contact->delete();
        if($result==1){

            return ["Result"=>"Data Delete"];
            
    
           }
           else{
            return ["Result"=>"Data not Delete"];
           }
    }
}
