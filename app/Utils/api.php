<?php

function responseSuccess($code, $msg, $data)
{
    return response()->json([
        'success' => true,
        'code' => $code,
        'message' => $msg,
        'data' => $data
    ]);
}


function responseError($code, $msg, $err)
{
    return response()->json([
        'success' => false,
        'code' => $code,
        'message' => $msg,
        'error' => $err
    ]);
}
