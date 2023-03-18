<?php
namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;


class UserController extends Controller
{
    public function login(Request $request){
        $reVal = array();
        try{
            $validator = Validator::make($request->post(), [
                'username' => 'required|email',//required : ko duoc de trong, email : kieu du lieu phai la email
                'password' => 'required|string|min:6',
            ]);
            if ($validator->fails()) {
                throw new Exception($validator->errors());
            }
            //kiem tra thong tin dang nhap user co trong db
            $credenttials = array(
                'email' => $request->username,
                'password' => $request->password
            );
            if(!Auth::attempt($credenttials)){
                throw new Exception('Thông tin đăng nhập không chính xác');
            }
            $reVal = array(
                'username' => $request->username,
                'token' => 'Đang xử lý'
            );
            $reVal['error'] = 0;
            $array['message'] = 'Đăng nhập thành công.';
        }catch(Exception $e){
            $reVal['error'] = 1;
            $reVal['message'] = $e->getMessage();
        }
    	
        return response()->json($reVal, 200);
    }
}