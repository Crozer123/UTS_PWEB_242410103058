<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
use Illuminate\Routing\Controller as BaseController;

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
        'Lenovo' => [
            'id' => 3,
            'name' => 'Lenovo ideapad 5',
            'stok' => 25,
            'price' => 960000,
            'status' => 'tersedia'
        ]
    ];
    private $stats_data = [
        'totalProducts' => 3,
        'totalSales' => 120,
        'revenueToday' => 55000000,
        'bestSeller' => 'Acer Nitro 5'
    ];

    private $users = [
        'rizqi' => [
            'name' => 'Rizqi ramadhani',
            'email' => 'rizqi.@gmail.com',
            'status' => 'aktif',
            'jabatan' => 'CEO'
        ]
    ];

    public function login(Request $request){
        return view('login');
    }

    public function dashboard(Request $request){
        $username_login = $request->query('username') ?? session()->get('logged_user');
        
        if ($request->has('username') && $username_login) {
            Session::put('logged_user', $username_login);
        }
        
        if (!$username_login) {
             return redirect()->route('login')->with('error', 'Sesi Anda telah berakhir. Mohon login.');
        }

        $user_data = $this->users[$username_login] ?? null;
        
        return view('dashboard', [
            'username' => $username_login, 
            'data_user' => $user_data,     
            'stats' => $this->stats_data, 
        ]);
    }
    public function pengelolaan(){
        $username_login = session()->get('logged_user');
        if (!$username_login) {
             return redirect()->route('login')->with('error', 'Akses ditolak.');
        }
        $data_list = $this->product; 
        return view('pengelolaan', ['products' => $data_list]); 
    }
    public function profil(){
        $username_login = session()->get('logged_user');
        if (!$username_login) {
             return redirect()->route('login')->with('error', 'Akses ditolak.');
        }
        $user_data = $this->users[$username_login] ?? null;
        
        return view('profil', [
            'username' => $username_login,
            'data_user' => $user_data,
        ]);
    }
}
