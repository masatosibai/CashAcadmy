<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\contact;

class ContactController extends Controller
{
    public function contacts(Request $request)
    {
        if ($request->has('delete')) {
            DB::table('contacts')->where('id', $request->id)->update(["is_deleted" => 1]);
        }
        $allContact = contact::where("is_deleted", '=', 0)->paginate(5);
        return view("auth.admin.contacts", [ "previ" => $request->user()->role, "allcontact" => $allContact]);
    }
}
