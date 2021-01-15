<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Passport\Client;
use Carbon\Carbon;
// use GuzzleHttp\Client;
class LoginController extends Controller
{
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] ='lkkjn';
            return response()->json([
              'success' => true,
              'token' => $success,
              'user' => $user
          ]);
        } else {
          return response()->json([
            'success' => false,
            'message' => 'Invalid Email or Password',
        ], 401);
        }
    }
     
}