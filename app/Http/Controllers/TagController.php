<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show ($id) {
        $show = Tag::find($id);
        $articles = article::all();
        return view('pages.afficheShow', compact('show', 'articles'));
    }
}
