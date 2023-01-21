<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;


class SmsServiceController extends Controller
{

    private $request_client;
    private $base_url;
    private $headers;

    public function __construct(Client $request_client)
    {
        $this->request_client = $request_client;
        $this->base_url = 'http://REST.GcATEWAY.SA/';
        $this->headers = [
            'Accept' =>  'application/json',
        ];
    }
    public function buildRequest($uri,$method,$data){
    $request=new Request($method,$this->base_url . $uri,$this->headers);
    $response=$this->request_client->send($request,[
        'json'=> $data
    ]);

    // dd($response);
    if($response->getStatusCode()==200) {
        $response=json_decode($response->getBody()->getContents(),true);
        return $response;
    }
    }
    public function sendOtp($data){
        $response=$this->buildRequest("api/Verify ",'POST', $data);
        return $response;
    }
    public function getPaymentStatus($data){

        $response=$this->buildRequest("v2/getPaymentStatus",'post',$data);
        // $response=$this->buildRequest(" ",'post',$data);

        return $response;
    }


}