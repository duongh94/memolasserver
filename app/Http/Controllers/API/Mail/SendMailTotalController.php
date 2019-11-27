<?php

namespace App\Http\Controllers\API\Mail;

use App\Mail\SendEmailTotal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SendMailTotalController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function main(Request $request)
    {
        $params = $this->getParams($request);
        Mail::to('memolas000@gmail.com')->send(new SendEmailTotal($params));
        return response()->json([], 200);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getParams(Request $request)
    {
        return $request->all();
    }
}
