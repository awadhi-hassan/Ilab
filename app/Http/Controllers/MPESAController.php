<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MPESAController extends Controller
{
    public function pay(Request $request)
    {
        $plan = $request->plan;
        $package = $request->packages;
        $variant = $request->variant;

        return view('pay', ['plan' => $plan,
                            'package' => $package,
                            'variant' => $variant,
                        ]);
    }

    public function getAccessToken()
    {
        $url = env('MPESA_ENV') == 0
        ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'
        : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $curl = curl_init($url);
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET')
            )
        );
        $response = json_decode(curl_exec($curl));
        curl_close($curl);

        // return $response;
        return $response->access_token;
    }

    public function makeHttp($url, $body)
    {
        $url = 'https://sandbox.safaricom.co.ke/mpesa/'.$url;

        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                    CURLOPT_URL => $url,
                    CURLOPT_HTTPHEADER => array('Content-Type:application/json','Authorization:Bearer '. $this->getAccessToken()),
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => json_encode($body)
                )
        );
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }

    public function registerURLS()
    {
        $body = array(
            'ShortCode' => env('MPESA_SHORTCODE'),
            'ResponseType' => 'Completed',
            'ConfirmationURL' => env('MPESA_TEST_URL') . '/api/confirmation',
            'ValidationURL' => env('MPESA_TEST_URL') . '/api/validation'
        );

        $url = '/c2b/v1/registerurl';

        $response = $this->makeHttp($url, $body);

        return $response;
    }

    public function stkPush(Request $request)
    {
        $timestamp = date('YmdHms');
        $password = base64_encode(env('MPESA_STK_SHORTCODE').env('MPESA_PASSKEY').$timestamp);

        $curl_post_data = array(
            'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $request->amount,
            'PartyA' => $request->phone,
            'PartyB' => env('MPESA_STK_SHORTCODE'),
            'PhoneNumber' => $request->phone,
            'CallBackURL' => env('MPESA_TEST_URL'). '/api/stkpush',
            'AccountReference' => $request->account,
            'TransactionDesc' => $request->account
          );

        $url = '/stkpush/v1/processrequest';

        $response = $this->makeHttp($url, $curl_post_data);

        return $response;
    }
}
