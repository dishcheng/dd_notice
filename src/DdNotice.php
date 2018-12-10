<?php

namespace DishCheng\DdNotice;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: caicheng
 * Date: 2018-11-28
 * Time: 18:42
 */
class DdNotice extends Facade
{
    public static function send(array $params)
    {
        $client = new Client();
        try {
            if (config('dd_notice.notice_active')) {
                $res = $client->request('post', config('dd_notice.robot_webhook'),
                    [
                        'headers' =>
                            [
                                'Content-Type' => 'application/json;charset=utf-8',
                            ],
                        'body' => json_encode($params),
                    ]
                );
                return $res->getBody();
            }
        } catch (\GuzzleHttp\Exception\GuzzleException $exception) {
            \Log::error(json_encode($exception->getMessage()));
        }
    }
}