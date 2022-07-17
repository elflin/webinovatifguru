<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Firebase\FirebaseController;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Firebase\Auth\Token\Exception\InvalidToken;
use Kreait\Firebase\Exception\Auth\RevokedIdToken;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    protected $auth, $database;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

        // firebase
        $factory = (new Factory)
            ->withServiceAccount(__DIR__ . '/credentials/firebase_credentials.json')
            ->withDatabaseUri('https://inovatif-guru-default-rtdb.firebaseio.com');

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        // authenticate firebase
        try {
            $newUser = $this->auth->createUserWithEmailAndPassword($data['email'], $data['password']);
        } catch (\Throwable $e) {
            switch ($e->getMessage()) {
                case 'The email address is already in use by another account.':
                    return redirect()->back()->with('alert', 'Email sudah digunakan.');
                    break;
                case 'A password must be a string with at least 6 characters.':
                    return redirect()->back()->with('alert', 'Kata sandi minimal 6 karakter.');
                    break;
                default:
                    return redirect()->back()->with('alert', $e->getMessage());
                    break;
            }
        }

        return User::create([
            'id' => $newUser->uid,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

            // data diri
            'usia' => $data['usia'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'jumlah_anak' => $data['jumlah_anak'],
            'asal_sekolah' => $data['asal_sekolah'],
            'lama_mengajar' => $data['lama_mengajar'],
            'jenjang_mengajar' => $data['jenjang_mengajar'],
            'pendidikan' => $data['pendidikan'],
            'isIlmuPendidikan' => $data['isIlmuPendidikan'],
            'isAdmin' => $data['isAdmin']
        ]);
    }
}
