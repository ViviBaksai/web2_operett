<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{

    public function index()
    {
        return view('news', ["news" => News::all()->sortByDesc("created_at")]);
    }

    public function createNews(Request $request)
    {
        $request->validate([
            'content' => ['required', 'string'],
        ]);

        News::create([
            'content' => $request->content,
            'createdBy' => Auth::id()
        ]);

        return view('news', ["message" => "Sikeresen posztoltad a hírt!", "news" => News::all()->sortByDesc("created_at")]);
    }

    public function createComment(Request $request)
    {
        $request->validate([
            'content' => ['required', 'string'],
            'newsId' => ['required', 'numeric']
        ]);

        Comment::create([
            'content' => $request->content,
            'createdBy' => Auth::id(),
            'newsId' => $request->newsId
        ]);

        return view('news', ["message" => "Sikeresen posztoltad a kommentet!", "news" => News::all()->sortByDesc("created_at")]);
    }

}
