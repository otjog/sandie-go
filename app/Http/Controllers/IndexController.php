<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function execute(Request $request){

        /**
         * POST
         */
        if($request->isMethod('post')){

            $messages = [
                'required' => 'Вы должны выбрать направление!',
            ];

            $this->validate($request, [
                'orderDirection'    => 'required',
            ], $messages);

            $alias = $request->input('orderDirection');

            //todo как с маршрутом отправиить модель Direction, чтобы в этом контроллере проверить соответствие алиаса и отправить модель в другой контроллер
            return redirect()->route('order', ['alias'=>$alias]);
        }

        /**
         * GET
         */
        return view('site.main');
    }
}
