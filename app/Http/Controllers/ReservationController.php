<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactSendmail;
use Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use App\Models\Contact;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $inputs = $request->all();
        $action = $request->input('action');
        if ($action == "selected_day_hour") {
            $request->session()->put('year', $inputs['year']);
            $request->session()->put('month', $inputs['month']);
            $request->session()->put('day', $inputs['day']);
            $request->session()->put('time', $inputs['time']);
        }
        return view("contact.index", ["inputs" => $inputs]);
    }

    public function confirm(Request $request)
    {
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        // $validatedData = FacadesValidator::make($inputs, [
        //     'familyName' => 'required|string|max:100',
        //     'firstName' => 'required|string|max:100',
        //     'email' => 'required|email|max:255|regex:/^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/',
        //     'telNumber' => 'required|max:255|regex:/^[0-9]+$/',
        // ], ["email.regex" => "emailの形式を確認してください", "telNumber.regex" => "半角数字のみで入力してください。"]);

        // if ($validatedData->fails()) {
        //     return redirect('/contact')
        //         ->withErrors($validatedData)
        //         ->withInput();
        // }
        return view("contact.confirm", ["inputs" => $inputs]);
    }

    public function send(Request $request)
    {

        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');

        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        // actionの値で分岐
        if ($action !== 'submit') {
            return redirect('/contact')
                ->withInput();
        } else {

            // //google calendarへ登録
            // $event = new Event;
            // $dt = new Carbon();
            // $dt->setTimezone('Asia/Tokyo');
            // $dt->setDateTime($inputs["year"], $inputs["month"], $inputs["day"], $inputs["time"], 0, 0);
            // $event->name = $inputs["familyName"] . " " . $inputs["firstName"] . "様のカウンセリング";
            // $event->startDateTime = $dt;
            // $event->endDateTime = $dt->addHour();
            // $event->save();

            // //データーベースに登録
            // if (!Contact::where('email', '=', $inputs['email'])->exists()) {
            //     //同じemailがなければすべて登録
            //     $param = [
            //         'family_name' => $inputs["familyName"],
            //         'first_name' => $inputs["firstName"],
            //         'email' => $inputs["email"],
            //         'phone_number' => $inputs["telNumber"],
            //         "is_deleted" => 0,
            //     ];
            //     DB::table('contacts')->insert($param);
            // } else {
            //     //同じemailがあればその他の項目を更新
            //     $param = [
            //         'family_name' => $inputs["familyName"],
            //         'first_name' => $inputs["firstName"],
            //         'phone_number' => $inputs["telNumber"],
            //         "is_deleted" => 0,
            //     ];
            //     DB::table('contacts')->where("email", $inputs['email'])->update($param);
            // }

            // //Slack通知
            // $st = $inputs["familyName"] . " " . $inputs["firstName"] . "様" . "\n" . $inputs["email"] . "\n" . $inputs["telNumber"] .
            //     $inputs["year"] . "年" . $inputs["month"] . "月" . $inputs["day"] . "日" . $inputs["time"] . "時";
            // \Slack::send($st);

            // //入力されたメールアドレスにメールを送信（本番用）
            // Mail::to($inputs['email'])->send(new ContactSendmail($inputs));

            // //再送信を防ぐためにトークンを再発行
            // $request->session()->regenerateToken();

            //送信完了ページのviewを表示
            return view('contact.thanks');
        }
    }
}
