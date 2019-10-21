<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ArticlesController extends Controller
{
    public function index()
    {
      $articles = Content::where('type', 'articles')->orderBy('created_at', 'desc')->get();
      $news = Content::where('type', 'news')->orderBy('created_at', 'desc')->get();

      return view('articles', ['articles' => $articles, 'news' => $news]);
    }

    public function contentDetails($content)
    {
      $titles = str_replace('-', ' ', $content);
      $details = Content::where('title', $titles)->first();

      return view('articledetails', ['content' => $details]);
    }
}
