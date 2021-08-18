<?php

function responseSuccess($data)
{
    return response()->json([
        'success' => true,
        'code' => 200,
        'message' => 'Ok',
        'data' => (object)$data
    ]);
}


function responseCreate()
{
    return response()->json([
        'success' => true,
        'code' => 201,
        'message' => "บันทึกข้อมูลสำเร็จ",
        'data' => (object)[]
    ], 201);
}


function responseNoContent()
{
    return response()->json([
        'success' => false,
        'code' => 204,
        'message' => "ไม่พบข้อมูล",
        'data' => (object)[]
    ], 204);
}


function responseError($err)
{
    return response()->json([
        'success' => false,
        'code' => 500,
        'message' => "Something went wrong!",
        'error' => $err
    ], 500);
}
