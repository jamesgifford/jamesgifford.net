<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class PagesController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        return view('index');
    }

    /**
     * 
     */
    public function contact(Request $request)
    {
        $post = $request->all();
        $content = $_POST['content'];

        if (isset($_POST['email'])) {
            Mail::send('emails/contact', ['content' => $content], function ($message) use ($post) {
                $message->from($post['email'], $post['name']);
                $message->to(env('MAIL_TO'))->subject('Contact Form Submission');
            });
        }

        return redirect('');
    }
}


