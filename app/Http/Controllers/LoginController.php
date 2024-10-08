<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
     /**
     * Instantiate a new LoginRegisterController instance.
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except([
    //         'logout', 'dashboard'
    //     ]);
    // }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('signup.register');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required',
            'user_type' => 'required|in:admin,merchant',
        ]);

        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->role = $request->user_type;

        $newUser->save();

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();


        if ($newUser->role == 'admin' || $newUser->role == 'merchant'  ) {
            return redirect()->route('login')
                ->withSuccess('You have successfully registered Pleace login');
        } else {
            return redirect()->back()
                ->withSuccess('Something went wrong pleace try again');
        }
    }


    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('signup.login');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'admin' || auth()->user()->role == 'merchant') {
                return redirect()->route('dashboard')
                    ->withSuccess('You have successfully logged in!');
            }
        }

        else {

            return back()->withErrors(['email' => 'Your provided credentials do not match in our records.'])->onlyInput('email');
        }
    }


    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        return redirect()->route('login')->withErrors([ 'email' => 'Please login to access the dashboard.', ])->onlyInput('email');
    }

    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');
    }


    public function update_user(Request $request){

        if(!empty($request->new_password) &&  !empty($request->confirm_pass)){

            $request->validate([
                'new_password' => 'required',
                'confirm_password' => 'required|confirmed',
            ]);

            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }
        }

        $user = User::find(auth()->user()->id);
        $user->name = $request->user_name;
        $user->email = $request->user_email;
        //$user->phone = $request->user_phone;
        $user->save();
        return redirect()->route('my_account')->withSuccess('User account details updated!');

    }


    public function member_list(Request $request)
    {
        $members = User::where('user_type','0')->get();
        return view('admin.pages.member.list', compact('members'));

    }



    public function redirectToGoogle()
    {

        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {

        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::where('email', $googleUser->email)->first();
        if(!$user)
        {
            $user = User::create(['name' => $googleUser->name, 'email' => $googleUser->email, 'password' => \Hash::make(rand(100000,999999)),'role'=>'admin']);
        }

        Auth::login($user);
        return redirect('/dashboard');
    }

//handle user register and login feature
public function handleAuth(Request $request)
{
    $action = $request->input('action');

    if ($action == 'login') {

        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
            'remember' => 'boolean',
        ]);


        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('home')->withSuccess('You are logged in!');
        }

        return back()->withErrors(['name' => 'Invalid credentials.']);

    } elseif ($action == 'register') {

        $request->validate([
            'register_username' => 'required',
            'email' => 'required',
            'register_password' => 'required',
        ]);
    ;

        User::create([
            'name' => $request->input('register_username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('register_password')),
            'role' => 'user',
        ]);

        return redirect()->route('trendora')->withSuccess('Registration successful! You can now log in.');
    }

    return back()->withErrors(['action' => 'Invalid action.']);
}


}
