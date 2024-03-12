<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use \Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            // 名前のバリデーションルールはここに追加する必要がある
            // 'name' => ['required', 'max:20'],
            'name' => ['required','max:20'],
            'email' => ['required', 'email','unique:users'],
            'password' => ['required']
        ]);

        // バリデーションエラーが発生した場合はエラーメッセージを返す
        if ($validator->fails()) {
            return response()->json($validator->messages(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        // ユーザーを作成
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json('User registration completed', Response::HTTP_OK);
    }
};
