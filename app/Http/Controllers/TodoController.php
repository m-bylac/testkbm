<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TodoController;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        return view('/');
    }
    public function post(Request $request)
    {
        $contact = new Contact;
        $form = $request->all();
        unset($form['_token_']);
        $contact->fill($form)->save();
        return redirect('/todo');
    }
    public function add()
    {
        return view('create');
    }
    public function create(Request $request)
    {
        $param = [
            'txt' => $request->txt,
        ];
        DB::insert('insert into authors (txt)', $param);
        return redirect('/todo/create');
    }
    public function update(Request $request)
    {
        $param = [
            'txt' => $request->txt,
        ];
        DB::update('update authors set txt =:txt', $param);
        return redirect('/todo/update');
    }
    public function remove(Request $request)
    {
        $param = ['txt' => $request->txt];
        DB::delete('delete from authors where txt =:txt', $param);
        return redirect('/todo/delete');
    }
}