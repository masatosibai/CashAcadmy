<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $title;
    private $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->firstName = $inputs['firstName'];
        $this->familyName = $inputs['familyName'];
        $this->reservation = $inputs['year'] . "年" . $inputs['month'] . "月" . $inputs['day'] . "日" . $inputs['time'] . "時";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('無料カウンセリングのお問い合わせありがとうございます')
            ->view('contact.mail')
            ->with([
                'firstName' => $this->firstName,
                'familyName' => $this->familyName,
                'reservation' => $this->reservation,
            ]);
    }
}
