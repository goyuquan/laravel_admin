<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __construct()
    {

    }


    public function index($id = 1)
    {
        $categorys = Category::all();
        return view('admin.categorys.index', ["Category" => $categorys]);
    }


    public function store(Request $request)
    {
        // return $request->category;
        $messages = [
            'title.required' => '标题不能为空',
            'category.required' => '选择分类',
            'title.unique' => '标题不能重复',
            'title.max' => '标题不能大于:max位',
            'title.min' => '标题不能小于:min位',
            'content.required' => '内容不能为空',
            'published_at.required' => '发布时间不能为空',
        ];
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'category' => 'required',
            'photo' => 'max:1024',
            'content' => 'required',
            'published_at' => 'required',
        ],$messages);

        $request->user()->articles()->create([
            'title' => $request->title,
            'thumbnail' => $request->thumbnail,
            'category' => $request->category,
            'content' => $request->content,
            'published_at' => $request->published_at,
        ]);

        Session()->flash('status', 'Article create was successful!');

        return redirect('/articles');
    }
    
}
