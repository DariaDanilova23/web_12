<?php

namespace App\Http\Controllers;
use phpDocumentor\Reflection\Types\Nullable;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;

class emailController extends Controller
{
    public function checkEmail(Request $request)
    {
        $input = $request->only(['email']);

        $request_data = [
            'email' => 'required|email|unique:users,email',
        ];


        $validator = Validator::make($input, $request_data);

        if ($validator->fails()) {
            $errors = json_decode(json_encode($validator->errors()), 1);
            return response()->json([
                'success' => false,
                'message' => array_reduce($errors, 'array_merge', array()),
            ]);
        } else {
            return response()->json([
                'success' => true,
                'message' => '',
            ]);
        }
    }
}
