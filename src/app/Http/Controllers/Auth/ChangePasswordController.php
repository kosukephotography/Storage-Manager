<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
        public function showChangePasswordForm()
        {
            return view('auth.passwords.change');
        }
        
        public function changePassword(ChangePasswordRequest $request)
        {
            $user = Auth::user();
            $user->password = bcrypt($request->get('password'));
            $user->save();
            
            return redirect('/mypage')->with('information', 'パスワードを変更しました。');
        }
}
