<?php
/**
 * Created by PhpStorm.
 * User: ralgo
 * Date: 04/11/2018
 * Time: 18:03
 */

namespace App\Traits;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait ApiResponse
{
    function successResponse($data, $code = 200)
    {
        return response()->json($data, $code);
    }

    function errorResponse($message, $code)
    {
        return response()->json(['error' => ['message' => $message, 'code' => $code]], $code);
    }

    function showAll(Collection $collection, $code = 200)
    {
        return $this->successResponse(['data' => $collection], $code);
    }

    function showOne(Model $instance, $code = 200)
    {
        return $this->successResponse(['data' => $instance], $code);
    }

    function showMessage($message, $code = 200)
    {
        return $this->successResponse($message, $code);
    }

}