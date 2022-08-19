<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        /*$name = 'テスト ユーザー';
        $email = '2022@omorisan.jp';

        Mail::send(new TestMail($name, $email));
/** */
$mail_name = 'user_name';
$mail_text = $mail_name.' 様、ご購入ありがとうございました';
$data = 'ordered_data';
$mail_to = '2022@omorisan.jp';
Mail::to($mail_to)->send( new TestMail($mail_name, $mail_text, $data) );
        return view('welcome');
    }
}
