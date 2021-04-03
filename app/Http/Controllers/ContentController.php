<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Log;
use Storage;
use Str;

class ContentController extends Controller
{
    /**
     * Liệt kê danh sách tin tức.
     */
    public function list(Request $request)
    {
        $list = Content::where('type', 1)
            ->where('status', 2)
            ->orderBy('published_date', 'desc')
            ->get();

        return view('newsList', compact('list'));
    }

    /**
     * Lấy ra dữ liệu của một nội dung, bao gồm cả trường content.
     */
    public function getOne(Content $content)
    {
        $content->makeVisible(['content']);
        return view('newsDetail', compact('content'));
    }

    public function getTermsOfService()
    {
        $content = Content::where('slug', 'dieu-khoan-su-dung')
            ->first();
        $content->makeVisible(['content']);
        return view('newsDetail', compact('content'));
    }
}
