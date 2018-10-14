<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Winner;

class ContactController extends Controller
{
    /*
    * getアクセス ページ表示
    */
    public function index()
    {
        return view('contact.contactForm');
    }

    /**
     * postアクセス 情報登録
     */
    public function register(Request $request)
    {
        $winner = new Winner;

        $form = $request->all();
        unset($form['_token']);
        
        $winner->fill($form)->save();

        return view('contact.contactForm');
    }
}
