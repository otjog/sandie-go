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
            $not_alias = 0;
            foreach($directions as $direction){
                if($direction->alias === $alias){
                    $not_alias = 1;

                    $contactType = '';
                    if(!$direction->phoneForm){
                        $contactType = '|email';
                    }
                    /**
                     * POST
                     */
                    if($request->isMethod('post')){

                        $messages = [
                            'required' => 'Поле :attribute обязательно к заполнению',
                            'email' => 'Поле :attribute должно соотвествовать email адресу',
                        ];

                        $this->validate($request, [
                            'orderAddress'      => 'required',
                            'orderDate'         => 'required|date|after:date',
                            'orderCountPeople'  => 'required|integer|min:1',
                            'orderName'         => 'required|max:255',
                            'orderContact'        => 'required'.$contactType,
                        ], $messages);

                        $data = $request->all();

                        Mail::send('site.email', ['data'=>$data], function($message) use ($data, $request){
                            $mail_admin = env('MAIL_ADMIN');

                            $message->from('fvirus@mail.ru', $data['orderName']);
                            $message->to($mail_admin);
                            if(0){
                                //todo сделать для тех, кто указывает емайл
                                $message->cc($data['orderContact']);
                            }
                            $message->subject('Order');
                            /**
                             * todo нужно сделать проверку отправки письма
                             */
                            $request->session()->flash('status', 'Ваш заказ принят! На ваш электронный адрес придет письмо с данными вашего заказа и инструкциями.');
                        });

                        $order = new Order;
                        /**
                         * todo сделать через форич
                         */
                        $order->direction   = $alias;
                        $order->name        = $data['orderName'];
                        if(!$direction->phoneForm){
                            $order->email       = $data['orderContact'];
                        }else{
                            $order->phone       = $data['orderContact'];
                        }
                        $order->address     = $data['orderAddress'];
                        $order->date        = $data['orderDate'];
                        $order->count       = $data['orderCountPeople'];

                        $order->save();

                        return view('site.success_page')->with(['order'=>$order, 'direction'=>$direction]);
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
