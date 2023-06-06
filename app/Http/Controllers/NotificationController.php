<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NotificationController extends Controller
{
  public function sendNotification(Request $request)
  {
    $client = new Client(); //GuzzleHttp\Client

    $url = 'https://onesignal.com/api/v1/notifications';

    $headers = [
      'Content-Type' => 'application/json',
      'Authorization' => 'Basic ' . env('ONESIGNAL_REST_API_KEY')
    ];

    $body = [
      'app_id' => env('ONESIGNAL_APP_ID'),
      'included_segments' => ["All"],
      'data' => ["foo" => "bar"],
      'contents' => ["en" => $request->input('message')]
    ];

    $response = $client->post($url, [
      'headers' => $headers,
      'body' => json_encode($body)
    ]);

    return $response->getBody()->getContents();
  }
}
