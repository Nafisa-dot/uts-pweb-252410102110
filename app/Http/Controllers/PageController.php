<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username', 'Cinephile');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Cinephile');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Cinephile');
        
        $items = [
            [
                'judul' => '20th Century Girl',
                'pemeran' => 'Kim Yoo-Jung, Byeon Woo-Seok, Park Jung-Woo, Roh Yoon-Seo',
                'genre' => 'Romance, Drama',
                'poster' => 'https://i.pinimg.com/1200x/62/c5/52/62c552bb9c6460ed443bd63e6ae2e1a3.jpg'
            ],
            [
                'judul' => 'Hope 2013',
                'pemeran' => 'Sol Kyung-Gu, Uhm Ji-Won, Lee Re',
                'genre' => 'Drama, True Story',
                'poster' => 'https://i.pinimg.com/736x/a1/67/45/a16745aee2e70160c8c9c482ea3923fb.jpg'
            ],
            [
                'judul' => 'Even If This Love Disappears Tonight',
                'pemeran' => 'Choo Young-woo, Shin Si-ah',
                'genre' => 'Romance, Drama, Youth',
                'poster' => 'https://i.pinimg.com/736x/b8/02/4a/b8024a02e834fc55fb32e93ef66c30cf.jpg'
            ],
            [
                'judul' => 'The Witch 1 : The Subversion',
                'pemeran' => 'Kim Da-mi, Choi Woo-shik, Park Hee-soon, Jo Min-Su',
                'genre' => 'Fiction, Action, Horror',
                'poster' => 'https://i.pinimg.com/1200x/07/31/ef/0731efa4a09f50efb9db783dd579e89c.jpg'
            ],
            [
                'judul' => 'Enola Holmes 1',
                'pemeran' => 'Millie Bobby Brown, Henry Cavill, Sam Claflin, Helena Bonham Carter, Louis Partridge',
                'genre' => 'Action, Mystery, Crime, Drama, Adventure',
                'poster' => 'https://i.pinimg.com/1200x/64/ca/de/64cade087236bcb248696bbf20ea4171.jpg'
            ],
        ];

        return view('pengelolaan', compact('items', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Cinephile');
        return view('profile', compact('username'));
    }
}