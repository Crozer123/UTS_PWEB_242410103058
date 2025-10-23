<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
class PageController extends Controller
{
    private $product = [ 
        'Acer' => [ 
            'id' => 1,
            'name' => 'Acer Nitro 5',
            'stok' => 50,
            'price' => 11000000,
            'status' => 'tersedia'
        ],
        'Asus' => [ 
            'id' => 2,
            'name' => 'Asus ROG',
            'stok' => 17,
            'price' => 2000000,
            'status' => 'tersedia'
        ],
        'Xiaomi' => [
            'id' => 3,
            'name' => 'Xiaomi Mi Notebook',
            'stok' => 35,
            'price' => 7500000,
            'status' => 'tersedia'
        ],
        'Lenovo' => [
            'id' => 4,
            'name' => 'Lenovo ideapad 5',
            'stok' => 25,
            'price' => 9600000,
            'status' => 'tersedia'
        ],
        'HP' => [ 
            'id' => 5,
            'name' => 'HP Pavilion',
            'stok' => 40,
            'price' => 9500000,
            'status' => 'tersedia'
        ]
    ];
    private $stats_data = [
        'totalProducts' => 5,
        'totalSales' => 120,
        'revenueToday' => 55000000,
        'bestSeller' => 'Acer Nitro 5'
    ];

    private $users = [
        'rizqi' => [
            'name' => 'Rizqi ramadhani',
            'email' => 'rizqi.@gmail.com',
            'status' => 'aktif',
            'jabatan' => 'CEO',
            'password' => '12345'
        ],
    ];
    public function login(Request $request){
        return view('login');
    }
public function dashboard(Request $request){
        $username_login = $request->input('username'); 
        $password_input = $request->input('password');
        $user_credentials = $this->users[$username_login] ?? null;
        $is_valid = false;
        if ($request->has('password')) {
            if ($user_credentials && $user_credentials['password'] === $password_input) {
                $is_valid = true;
            } else {
                 return Redirect()->route('login');
            }

        } else {
            if ($user_credentials) {
                $is_valid = true;
            }
        }
        if (!$is_valid) {
             return Redirect()->route('login');
        }
        $user_data = $user_credentials;
        return view('dashboard', [
            'username' => $username_login, 
            'data_user' => $user_data,     
            'stats' => $this->stats_data, 
        ]);
    }
    public function pengelolaan(Request $request){
        $username_login = $request->input('username');
        if (!$username_login) {
             return redirect()->route('login');
        }
        $data_list = $this->product; 
        return view('pengelolaan', ['products' => $data_list]); 
    }

    public function profil(Request $request){
        $username_login = $request->input('username');
        $user_data = $this->users[$username_login] ?? null;
        if (!$username_login) {
             return redirect()->route('login');
        }
        return view('profil', [
            'username' => $username_login,
            'data_user' => $user_data,
        ]);
    }
}