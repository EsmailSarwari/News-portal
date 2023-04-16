<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class dbController extends Controller
{
    public function select()
    {
        $news = DB::select('SELECT * FROM news ORDER BY id DESC ' );
        return view('database.select', [
            'news' => $news
        ]);
    }
    public function details(request $request, $id)
    {
        Log::info('harber goruntulendi',[
            'id' => $id,
            'clientIp' => $request->getClientIp()
        ]);
        $newsDetails = DB::select('SELECT * FROM news WHERE id = :id', ['id' => $id]);
        return  view('database.details', [
            'newsDetails' => $newsDetails[0]
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

        DB::insert('INSERT INTO news(category_id, title, summary, content, created_at, updated_at) VALUES(?,?,?,?,?,?)',[
            $request->post('category_id'),
            $request->post('title'),
            $request->post('summary'),
            $request->post('content'),
            Carbon::now()->format('Y-m-d H:i:s'),
            Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        return response()->redirectTo('db/add');
    }
    public function add()
    {
        $categories = DB::select('SELECT * FROM categories');
        return view('database.add', [
            'categories' => $categories
        ]);
    }
    public function delete(int $id)
    {
        DB::delete('DELETE FROM news WHERE id= :id', ['id' => $id]);
        return response()->redirectTo('db/select');
    }

    public function edit(int $id)
    {
        $editNews = DB::select('SELECT * FROM news WHERE id = :id', ['id' => $id]);
        return view('database.edit', [
            'editNews' => $editNews[0]
        ]);
    }

    public function update(request $request, int $id)
    {
        Log::info($id. "ID numarili guncellendi");
        DB::update('UPDATE news SET  title = :title, summary = :summary, content = :content, updated_at = :updated_at WHERE id = :id ', [
            'title' => $request->get('title'),
            'summary' => $request->get('summary'),
            'content' => $request->get('content'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'id' => $id
        ]);
        return response()->redirectTo('db/details/'. $id);
    }
}









