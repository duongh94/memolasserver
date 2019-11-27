<?php

namespace App\Http\Controllers\API\Mail;

use App\Mail\SendEmailInfoParent;
use App\Mail\SendEmailInfoStudent;
use App\Mail\SendEmailInfoTeacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function main(Request $request)
    {
        $data = $this->getParams($request);
        $dataRequest = $this->getDataRequestForRole($data);
        $send = $this->sendMailForRole($data, $dataRequest);
        Mail::to('memolas000@gmail.com')->send($send);
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

    /**
     * @param $data
     * @return array
     */
    public function getDataRequestForRole($data)
    {
        $dataRequest = [];
        switch ($data['type']) {
            case 1:
                $dataRequest = [
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'class' => $data['class'],
                    'club' => $data['club'],
                    'school' => $data['school'],
                    'number_book' => $data['number_book'],
                    'phone_contact' => $data['phone_contact'],
                ];
                break;
            case 2:
                $dataRequest = [
                    'name' => $data['name'],
                    'name_child' => $data['name_child'],
                    'class' => $data['class'],
                    'school' => $data['school'],
                    'email' => $data['email'],
                    'phone_contact' => $data['phone_contact'],
                    'number_book' => $data['number_book'],
                ];
                break;
            case 3:
                $dataRequest = [
                    'name' => $data['name'],
                    'subject' => $data['subject'],
                    'class' => $data['class'],
                    'school' => $data['school'],
                    'email' => $data['email'],
                    'phone_contact' => $data['phone_contact'],
                    'number_book' => $data['number_book'],
                ];
                break;
        }
        return $dataRequest;
    }

    /**
     * @param $data
     * @param $dataRequest
     * @return SendEmailInfoParent|SendEmailInfoStudent|SendEmailInfoTeacher
     */
    public function sendMailForRole($data, $dataRequest)
    {
        if ($data['type'] == 1) {
            $send = new SendEmailInfoStudent($dataRequest);
        } elseif ($data['type'] == 2) {
            $send = new SendEmailInfoParent($dataRequest);
        } else {
            $send = new SendEmailInfoTeacher($dataRequest);
        }
        return $send;
    }
}
