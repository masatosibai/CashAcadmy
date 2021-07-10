<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class UserController extends Controller
{
    public function users(Request $request)
    {
        $inputs = $request->all();
        if ($request->has('create')) {
            $validatedData = FacadesValidator::make($inputs, [
                'new_family_name' => 'required|string|max:100',
                'new_first_name' => 'required|string|max:100',
                'new_email' => 'required|email|max:255|regex:/^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/',
                'new_password' => 'required|digits_between:8,255|regex:/^[0-9]+$/'
            ], ["new_password.digits_between" => "８文字以上２５５文字以内に設定してください"]);

            if ($validatedData->fails()) {
                return redirect('/admin/users')
                    ->withErrors($validatedData)
                    ->withInput();
            } else {

                $param = [
                    'family_name' => $inputs["new_family_name"],
                    'first_name' => $inputs["new_first_name"],
                    'email' => $inputs["new_email"],
                    'password' => Hash::make($inputs["new_password"]),
                    "role" => 2,
                    "is_deleted" => 0,
                ];
                DB::table('users')->insert($param);
            }
        }
        if ($request->has('update')) {
            $validatedData = FacadesValidator::make($inputs, [
                'update_family_name' => 'required|string|max:100',
                'update_first_name' => 'required|string|max:100',
                'update_email' => 'required|email|max:255|regex:/^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/',
            ]);

            if ($validatedData->fails()) {
                return redirect('/admin/users')
                    ->withErrors($validatedData)
                    ->withInput();
            } else {

                $param = [
                    'family_name' => $inputs["update_family_name"],
                    'first_name' => $inputs["update_first_name"],
                    'email' => $inputs["update_email"],
                ];
                DB::table('users')->where('id', $request->id)->update($param);
            }
        }
        if ($request->has('delete')) {
            DB::table('users')->where('id', $request->id)->update(["is_deleted" => 1]);
        }
        $alluser = User::where("is_deleted", "=", 0)->paginate(5);
        return view("auth.admin.users", ["previ" => $request->user()->role, "alluser" => $alluser,  "content_title_contact" => "問い合わせ一覧"]);
    }
}
