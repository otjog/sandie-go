<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function execute(Request $request){
        /**
         * POST
         */
        if($request->isMethod('post')){

            $data = $request->all();
            //todo сделать одну форму письма
            Mail::send('content.emailmsg', ['data'=>$data], function($message) use ($data, $request){
                $mail_admin = env('MAIL_ADMIN');

                $message->from($mail_admin, $data['contactName']);
                $message->to($mail_admin);
                $message->subject('Question');
                /**
                 * todo нужно сделать проверку отправки письма
                 */
                $request->session()->flash('status', 'Ваше сообщение отправлено, мы ответим вам в ближайщее время!');
            });

            return view('site.contact');
        }
        /**
         * GET
         */
        return view('site.contact');
    }
}
