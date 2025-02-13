<?php

use Symfony\Component\HttpFoundation\Response;
use Jenssegers\Agent\Facades\Agent;

if (!function_exists('resJsonSuccess')) {
    function resJsonSuccess($message, $data = [], $status_code = Response::HTTP_OK)
    {
        return response()->json([
            "success" => true,
            "message" => $message,
            "data" => $data,
        ],$status_code);
    }
}

if (!function_exists('resJsonError')) {
    function resJsonError($message, $data = [], $status_code = Response::HTTP_BAD_REQUEST)
    {
        return response()->json([
            "success" => false,
            "status_code" => $status_code,
            "message" => $message,
            "data" => $data,
        ],$status_code);
    }
}

if (!function_exists('resSuccess')) {
    function resSuccess($message, $route, $data = [], $status_code = Response::HTTP_OK)
    {
        return redirect()->route($route)->with([
            "success" => $message,
            "message" => $message,
            "data" => $data,
        ]);
    }
}

if (!function_exists('resError')) {
    function resError($message, $data = [], $status_code = Response::HTTP_BAD_REQUEST)
    {
        return redirect()->back()->with([
            "error" => $message,
            "status_code" => $status_code,
            "message" => $message,
            "data" => $data,
        ]);
    }
}

if (!function_exists('getDeviceInfo')) {
    function getDeviceInfo() {

        $device = Agent::device();
        $platform = Agent::platform();
        $browser = Agent::browser();

        return [
            'device' => $device,
            'platform' => $platform,
            'browser' => $browser
        ];
    }
}
