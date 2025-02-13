<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\RegisterService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    protected $service;

    public function __construct(RegisterService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $appName = env('APP_NAME');
        return view('register.signup', ['appName' => $appName]);
    }

    public function showRegisterForm(Request $request)
    {
        $email = Session::get('email');
        $agree = Session::get('agree');

        return view('register.signup-register', ['email' => $email, 'agree' => $agree]);
    }

    public function register(Request $request)
    {
        Session::put('email', $request->email);
        Session::put('agree', $request->agree);
        
        // $validationResult = $this->validateRequest($request);

        // if ($validationResult !== true) {
        //     return resError($validationResult);
        // }

        return view('register.signup-register', ['email' => $request->email, 'agree' => $request->agree]);
    }

    public function store(Request $request)
    {
        $validationResult = $this->validateRequest($request);

        if ($validationResult !== true) {
            return resError($validationResult);
        }

        $saved = $this->service->insertData($request);

        if ($saved) {
            $message = 'Registrasi berhasil';
            return resSuccess($message, 'sukses-registrasi', $saved);
        } else {
            return resError('Registrasi gagal!');
        }
    }

    public function show()
    {
        $email = Session::get('email');
        $agree = Session::get('agree');
        
        return view('register.signup-sukses-register', ['email' => $email, 'agree' => $agree]);
    }

    private function validateRequest(Request $request)
    {
        $rules = [
            'email'     => 'required|email|unique:users,email',
            'firstname' => 'required',
            'phone'     => 'required|min:10',
            'password'  => 'required|min:8',
            'agree'     => 'required|boolean',
        ];

        $messages = [
            'email.required'     => 'Email harus diisi.',
            'email.email'        => 'Harap berikan alamat email yang valid.',
            'email.unique'       => 'Email ini sudah terdaftar.',
            'firstname.required' => 'Nama depan harus diisi.',
            'phone.required'     => 'No telepon harus diisi.',
            'phone.min'          => 'No telepon harus minimal 10 karakter.',
            'password.required'  => 'Password harus diisi.',
            'password.min'       => 'Password harus minimal 8 karakter.',
            'agree.required'     => 'Silahkan pilih persetujuan.',
            'agree.boolean'      => 'Persetujuan harus dalam format yang benar.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return $validator->errors()->first();
        }

        return true;
    }
}
