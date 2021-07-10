<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Spatie\GoogleCalendar\Event;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $url = "https://cashacademy.microcms.io/api/v1/cashacademy";

        $headers = array(
            "X-API-KEY :" . config('app.microCMS.apikey')
        );
        // cURLセッションを初期化
        $ch = curl_init();

        // オプションを設定
        curl_setopt($ch, CURLOPT_URL, $url); // 取得するURLを指定
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 実行結果を文字列で返す
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // サーバー証明書の検証を行わない
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // URLの情報を取得
        $response =  curl_exec($ch);

        // 取得結果を表示
        $result = json_decode($response, true);

        // セッションを終了
        curl_close($ch);


        $now = Carbon::now('Asia/Tokyo');
        $days = array();
        $days[0] = "日時";
        $year = array();
        $month = array();
        $index = array();

        $week = 0;
        if ($request->get('nextWeek') == "true") {
            $now->addDays(7);
            $week = 1;
        }

        for ($j = 1; $j <= 7; $j++) {
            $now->addDays(1);
            $days[$j] = $now->day;
            $month[$j] = $now->month;
            $year[$j] = $now->year;
            $index[$now->day] = $j;
        }

        $reservation = array();
        for ($i = 10; $i < 21; $i++) {
            for ($j = 1; $j <= 7; $j++) {
                $reservation[$i][$j] = ["year" => $year[$j], "month" => $month[$j], "day" => $days[$j], "hour" => $i, "is_resevation" => 0];
            }
        }

        // 開始日時
        $start_dt = new Carbon($year[1] . '-' . $month[1] . '-' . $days[1]);
        //終了日時
        $end_dt = new Carbon($year[7] . '-' . $month[7] . '-' . $days[7]);

        $start_dt->setTime(-9, 00, 00);
        $end_dt->setTime(14, 59, 59);
        $events = Event::get($start_dt, $end_dt);
        // dd($events);

        if ($events->count()) {
            foreach ($events as $event) {
                $start_day_time = $event->startDateTime;
                // dump($start_day_time->day);
                $day = $start_day_time->day;
                $startTimeHour = $start_day_time->hour;
                // dump($startTimeHour);
                $end_day_time = $event->endDateTime;
                $endTimeHour = $end_day_time->hour;
                $endTimeMinute = $end_day_time->minute;
                $endTimeSecond = $end_day_time->second;
                // dump($endTime);
                if ($endTimeMinute == 0 && $endTimeSecond == 0) {
                    $endTimeHour -= 1;
                }
                // dump($startTimeHour);
                // dump($endTimeHour);
                for ($i = $startTimeHour; $i <= $endTimeHour; $i++) {
                    if ($i >= 10 && $i <= 20) {
                        $reservation[$i][$index[$day]]["is_resevation"] = 1;
                    }
                }
            }
        }
        return view("home", ["startday" => $reservation, "microCMS" => $result["contents"], "days" => $days, "week" => $week, "year" => $year[1], "month" => $month[1]]);
    }
}
