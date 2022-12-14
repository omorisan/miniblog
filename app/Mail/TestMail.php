<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->name = $name;
        //$this->email = $email;
        $this->name = 'テスト';
        $this->email = '2022@omorisan.jp';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->email)
            ->subject('テストタイトル')
            ->view('mail.mail')
            ->with([
                'name' => $this->name,
            ]);
    }
}
