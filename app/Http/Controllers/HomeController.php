<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Spatie\GoogleCalendar\Event;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $urls = array(
            'https://cashacademy.microcms.io/api/v1/recommend-threemerit',
            'https://cashacademy.microcms.io/api/v1/four-features',
            'https://cashacademy.microcms.io/api/v1/free-counsel',
            'https://cashacademy.microcms.io/api/v1/free-counsel-steps',
            'https://cashacademy.microcms.io/api/v1/free-counsel-process',
            'https://cashacademy.microcms.io/api/v1/review-field',
            'https://cashacademy.microcms.io/api/v1/questionnaire-field',
            'https://cashacademy.microcms.io/api/v1/question-field',
        );

        $headers = array(
            "X-API-KEY :" . config('app.microCMS.apikey')
        );
        $mh = curl_multi_init();
        $chs = [];
        $ret = [];
        $result = [];
        foreach ($urls as $key => $url) {
            $chs[$key] = curl_init($url);
            curl_setopt($chs[$key], CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($chs[$key], CURLOPT_TIMEOUT, 60);
            curl_setopt($chs[$key], CURLOPT_HTTPHEADER, $headers);
            curl_multi_add_handle($mh, $chs[$key]);
        }
        $running = null;
        do {
            curl_multi_exec($mh, $running);
        } while ($running);
        foreach ($urls as $key => $url) {
            $ret[$key] = curl_multi_getcontent($chs[$key]);
            $result[$key] = json_decode($ret[$key], true);
            curl_multi_remove_handle($mh, $chs[$key]);
            curl_close($chs[$key]);
        }
        curl_multi_close($mh);
        $recommend_threemerit = $result[0]['contents'];
        $four_features_field =
            $result[1]['contents'];
        $learning_curriculum_example_field = $result[2]['contents'];
        $free_counsel_steps = $result[3]['contents'];
        $free_counsel_process = $result[4]['contents'];
        $review_field = $result[5]['contents'];
        $questionnaire_field  = $result[6]['contents'];
        $question_field = $result[7]['contents'];


        // cURLセッションを初期化
        // $ch = curl_init();

        // // オプションを設定
        // curl_setopt($ch, CURLOPT_URL, $url); // 取得するURLを指定
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 実行結果を文字列で返す
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // サーバー証明書の検証を行わない
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // // URLの情報を取得
        // $response =  curl_exec($ch);

        // // 取得結果を表示
        // $result = json_decode($response, true);

        // // セッションを終了
        // curl_close($ch);

        $thisWeekDays = array();
        $thisWeekDays[0] = "日時";
        $thisWeekYear = array();
        $thisWeekMonth = array();
        $thisWeekIndex = array();

        $nextWeekDays = array();
        $nextWeekDays[0] = "日時";
        $nextWeekYear = array();
        $nextWeekMonth = array();
        $nextWeekIndex = array();

        $now = Carbon::now('Asia/Tokyo');
        for ($j = 1; $j <= 14; $j++) {
            $now->addDays(1);
            if ($j <= 7) {
                $thisWeekDays[$j] = $now->day;
                $thisWeekMonth[$j] = $now->month;
                $thisWeekYear[$j] = $now->year;
                $thisWeekIndex[$now->day] = $j;
            } else {
                $nextWeekDays[$j] = $now->day;
                $nextWeekMonth[$j] = $now->month;
                $nextWeekYear[$j] = $now->year;
                $nextWeekIndex[$now->day] = $j;
            }
        }

        $thisWeek = array();
        $nextWeek = array();
        for ($i = 10; $i < 21; $i++) {
            for ($j = 1; $j <= 14; $j++) {
                if ($j <= 7) {
                    $thisWeek[$i][$j] = ["year" => $thisWeekYear[$j], "month" => $thisWeekMonth[$j], "day" => $thisWeekDays[$j], "hour" => $i, "is_resevation" => 0];
                }
                if ($j >= 8) {
                    $nextWeek[$i][$j] = ["year" => $nextWeekYear[$j], "month" => $nextWeekMonth[$j], "day" => $nextWeekDays[$j], "hour" => $i, "is_resevation" => 0];
                }
            }
        }
        // 開始日時
        $start_dt = new Carbon($thisWeekYear[1] . '-' . $thisWeekMonth[1] . '-' . $thisWeekDays[1]);
        //終了日時
        $end_dt = new Carbon($thisWeekYear[7] . '-' . $thisWeekMonth[7] . '-' . $thisWeekDays[7]);

        $start_dt->setTime(-9, 00, 00);
        $end_dt->setTime(14, 59, 59);
        $thisWeekEvents = Event::get($start_dt, $end_dt);

        if ($thisWeekEvents->count()) {
            foreach ($thisWeekEvents as $event) {
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
                        $thisWeek[$i][$thisWeekIndex[$day]]["is_resevation"] = 1;
                    }
                }
            }
        }

        // 開始日時
        $start_dt = new Carbon($nextWeekYear[8] . '-' . $nextWeekMonth[8] . '-' . $nextWeekDays[8]);
        //終了日時
        $end_dt = new Carbon($nextWeekYear[14] . '-' . $nextWeekMonth[14] . '-' . $nextWeekDays[14]);

        $start_dt->setTime(-9, 00, 00);
        $end_dt->setTime(14, 59, 59);
        $nextWeekEvents = Event::get($start_dt, $end_dt);
        if ($nextWeekEvents->count()) {
            foreach ($nextWeekEvents as $event) {
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
                        $nextWeek[$i][$nextWeekIndex[$day]]["is_resevation"] = 1;
                    }
                }
            }
        }
        return view("home", [
            "thisWeek" => $thisWeek,   "thisWeekDays" => $thisWeekDays, "thisWeekYear" => $thisWeekYear[1], "thisWeekMonth" => $thisWeekMonth[1], "nextWeek" => $nextWeek, "nextWeekDays" => $nextWeekDays, "nextWeekYear" => $nextWeekYear[8], "nextWeekMonth" => $nextWeekMonth[8], "recommend_threemerit" => $recommend_threemerit, "four_features_field" => $four_features_field,
            "learning_curriculum_example_field" => $learning_curriculum_example_field,
            "free_counsel_steps" => $free_counsel_steps,
            "free_counsel_process" => $free_counsel_process,
            "review_field" => $review_field,
            "questionnaire_field" => $questionnaire_field,
            "question_field" => $question_field,
        ]);
    }
}
