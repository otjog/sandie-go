<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Direction;
use Mail;

class OrderController extends Controller
{
    public function execute(Request $request, $alias){
        if(isset($alias)){
            $directions = Direction::all();
            $not_alias = false;
            foreach($directions as $direction){
                if($direction->alias === $alias){
                    $not_alias = true;

                    $contactType = false;
                    if(!$direction->phoneForm){
                        $contactType = '|email';
                    }

                    /**
                     * POST
                     */
                    if($request->isMethod('post')){

                        $order = new Order;
                        /**
                         * todo сделать через форич
                         */
                        $order->direction   = $alias;
                        $order->name        = $request->orderName;
                        if(!$direction->phoneForm){
                            $order->email       = $request->orderEmail;
                        }else{
                            $order->phone       = $request->orderPhone;
                        }
                        $order->address     = $request->orderAddress;
                        $order->date        = $request->orderDate;
                        $order->count       = $request->orderCountPeople;
                        $order->save();

                        Mail::send('content.email', ['direction'=>$direction, 'order'=>$order], function($message) use ($order, $request, $contactType){
                            $mail_admin = env('MAIL_ADMIN');

                            $message->from($mail_admin, $order['name']);
                            $message->to($mail_admin);
                            if($contactType){
                                $message->cc($order['email']);
                            }
                            $message->subject('Order');
                            /**
                             * todo нужно сделать проверку отправки письма
                             */
                            $request->session()->flash('status', 'Ваш заказ принят! На ваш электронный адрес придет письмо с данными вашего заказа и инструкциями.');
                        });

                        return view('site.success')->with(['order'=>$order, 'direction'=>$direction]);
                    }
                    /**
                     * GET
                     */
                    return view('site.order')->with(['direction'=>$direction]);
                }
            }
            if(!$not_alias){
                abort(404);
            }
            //todo объединить эти 2 аборта
        }else{
            abort(404);
        }
    }
}
