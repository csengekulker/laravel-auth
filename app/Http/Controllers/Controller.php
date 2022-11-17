<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // BaseController

    public function sendError($error, $errorMessage = [], $code = 404) {
        $response = [
            "success" => false,
            "message" => $error,
            "data" => !empty( $errorMessage) ? $errorMessage : null
        ];
    }
}
