<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Store;
use App\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $stores = Store::paginate(10);
        return view('admin.stores.index', compact('stores'));
    }

    public function create(){
        $users = User::all(['id', 'name']);
        return view('admin.stores.create', compact('users'));
    }

    public function store(Request $request){

    }
}
