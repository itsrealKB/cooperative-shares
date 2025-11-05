<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function register(Request $request)
    {
        try{
            $user = User::create([
                'role' => 'user',
                'email' => $request->email,
                'password' => $request->password,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Your Account Has Been Created Successfully!',
            ],200);
        }
        catch(\Exception $e){

            return response()->json([
                'status' => false,
                'message' => $e,
            ],200);
        }
    }

    public function login(Request $request)
    {
        $credentails = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentails))
        {
            $user = Auth::user();

            return response()->json([
                'status' => true,
                'message' => null,
                'url' => route($user->role.'.dashboard')
            ],200);

        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'The provided credentials do not match our records',
                'url' => null
            ],200);
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function profileView()
    {
        $user = Auth::user();

        return view('screens.user.profile', compact('user'));
    }

    public function profileStore(ProfileFormRequest $request)
    {
        $user = Auth::user();

        try {

            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'description' => $request->description,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Your Profile Information Has Been Saved Successfully!'
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => $e,
            ]);
        }
    }
}
