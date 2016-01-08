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


    public function index()
    {
        $categorys = $categoryss = Category::all();
        return view('admin.categorys.index', ["categorys" => $categorys,"categoryss" => $categoryss]);
    }


    public function store(Request $request)
    {
        $request->parent_id = empty($request->parent_id)?1:$request->parent_id;

        $messages = [
            'name.required' => '分类名不能为空',
        ];
        $this->validate($request, [
            'name' => 'required',
        ],$messages);

        Category::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);

        Session()->flash('status', 'category create was successful!');

        return redirect('/admin/categorys/');
    }

}
