<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class dbController extends Controller
{
    public function select()
    {
        $news = News::orderBy('id', 'DESC')->get();

        return view('database.select', [
            'news' => $news
        ]);
    }

    public function category(request $request, int $id)
    {
        $news = Category::findOrFail($id)->news()->orderBy('id', 'DESC')->get();

        return view('database.select', [
            'news' => $news,
            'category_id' => $id
        ]);
    }

    public function details(request $request, $id)
    {
        Log::info('harber goruntulendi',[
            'id' => $id,
            'clientIp' => $request->getClientIp()
        ]);

        $newsDetails = News::findOrFail($id);

        return  view('database.details', [
            'newsDetails' => $newsDetails
    ]);

    }
    public function insert(request $request)
    {
        $validator = validator::make($request->all(), [
            'title' => 'required|min:5|max:255|unique:news,title',
            'summary' => 'required',
            'content' => 'required',
            'category_id' => 'numeric|exists:categories,id'
        ]);

        if ($validator->fails()){
            return redirect('/db/add')->withInput()->withErrors($validator);
        };

        $news = new News();
        $news->category_id = $request->post('category_id');
        $news->title = $request->post('title');
        $news->summary = $request->post('summary');
        $news->content = $request->post('content');
        $news->save();

        return response()->redirectTo('db/add');
    }
    public function add()
    {
        $categories = Category::orderBy('order')->get();

        return view('database.add', [
            'categories' => $categories
        ]);
    }
    public function delete(int $id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return response()->redirectTo('db/select');
    }

    public function edit(int $id)
    {
        $editNews = News::findOrFail($id);
        $categories = Category::orderBy('order')->get();

        return view('database.edit', [
            'editNews' => $editNews,
            'categories' => $categories
        ]);
    }

    public function update(request $request, int $id)
    {
        Log::info($id. "ID numarili guncellendi");

        $news = News::findOrFail($id);
        $news->category_id = $request->post('category_id');
        $news->title = $request->post('title');
        $news->summary = $request->post('summary');
        $news->content  = $request->post('content');
        $news->save();

        return response()->redirectTo('db/details/'. $id);
    }
}









