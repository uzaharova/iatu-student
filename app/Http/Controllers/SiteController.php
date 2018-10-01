<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;

class SiteController extends Controller
{
    public function index()
    {
        // TODO data for site
        return view('frontend.index', []);
    }

    public function userLogin()
    {
        return view('frontend.user_login');
    }

    public function userRegister()
    {
        return view('frontend.user_register');
    }

    public function user_create(Request $request)
    {
        if (empty($request->email)) {
            return;
        }

        $user_data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'user_type' => 'C',
            'created_at' => now(),
            'updated_at' => now()
        ];

        User::create($user_data);

        return;
    }

    public function contact_us()
    {
        return view('frontend.contact_us');
    }

    public function send_contact_us(Request $request)
    {
        $contact = $request->all();

        $site_data = [];
        dd(Mail::send('email.contact', ['email' => $contact['email'], 'description' => $contact['description']],
            function ($message) use ($contact) {
                $message->from(config('mail.username'), 'Contact us');
                $message->to($contact['email'], '')
                    ->subject('Contact us');
            }
        ));
    }
}
