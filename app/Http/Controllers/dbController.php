<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbController extends Controller
{
    public function select()
    {
        $news = DB::select('SELECT * FROM news' );
        return view('database.select', [
            'news' => $news
        ]);
    }
    public function details(int $id)
    {
        $newsDetails = DB::select('SELECT * FROM news WHERE id = :id', ['id' => $id]);
        return  view('database.details', [
            'newsDetails' => $newsDetails[0]
    ]);
    }
    public function insert(request $request)
    {
        DB::insert('INSERT INTO news(title, summary, content, created_at, updated_at) VALUES(?,?,?,?,?)',[
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
        return view('database.add');
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













