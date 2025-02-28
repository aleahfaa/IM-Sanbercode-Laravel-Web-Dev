<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|min:5|max:500',
            'body' => 'required|max:1000'
        ],
        [
            'required' => 'inputan :attribute harus diisi',
            'min' => 'inputan :attribute minimal :min karakter',
            'max' => 'inputan :attribute minimal :max karakter',
        ]);
        DB::table('session')->insert([
            'title' => $request->input('name'),
            'body' => $request->input('body'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('/post');
    }
    public function index() {
        $post = DB::table('session')->get();
        // dd($post);
        return view('post.read', ['post' => $post]);
    }
    public function show($id) {
      $post = DB::table('session')->find(id);
      dd($post);
      return view('post.detail', ['post' => $post]);
    }
    public function edit($id) {
        $post = DB::table('session')->find(id);
        dd($post);
        return view('post.edit', ['post' => $post]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required|min:5|max:500',
            'body' => 'required|max:1000'
        ],
        [
            'required' => 'inputan :attribute harus diisi',
            'min' => 'inputan :attribute minimal :min karakter',
            'max' => 'inputan :attribute minimal :max karakter',
        ]);
        DB::table('session')
            -> where ('id', $id)
            ->update([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
            ]);
        return redirect('/post');
    }
    public function destroy($id) {
        DB::table('post')->where('id', $id)->delete();
        return redirect('/post');
    }
}
