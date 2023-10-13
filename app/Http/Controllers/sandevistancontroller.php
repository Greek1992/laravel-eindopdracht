<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sandevistanmodel;
use Illuminate\Support\Facades\DB;
//use DB;

class sandevistancontroller extends Controller
{
    //
    public function index()
    {
        $id = sandevistanmodel::all('id');
        $id1 = $id->map(function ($id)
        {
            return substr($id->id, 0);
        });

        $title = sandevistanmodel::all('title');
        $title1 = $title->map(function ($title)
        {
            return substr($title->title, 0);
        });

        $publisher = sandevistanmodel::all('publisher');
        $publisher1 = $publisher->map(function ($publisher)
        {
            return substr($publisher->publisher, 0);
        });

        return view('welcome', ['naamData' => $title1, 'idData' => $id1, 'publisherData' => $publisher1]);
    }

    public function edit()
    {
        $ids= $_GET['aidee'];
        $entry = sandevistanmodel::find($ids);

        return view('/uptodate', ['entry' => $entry, 'idee' => $ids]);
    }

    public function editreal()
    {
        $aidee3= $_GET['aidee1'];
        $title3= $_GET['title1'];
        $publisher3= $_GET['publisher1'];

        $entry = sandevistanmodel::find($aidee3);
        $entry = DB::table('sandevistan')
            ->where('id', $aidee3)
            ->update(['title'=>$title3, 'publisher'=>$publisher3]);

        $id = sandevistanmodel::all('id');
        $id1 = $id->map(function ($id)
        {
            return substr($id->id, 0);
        });

        $title = sandevistanmodel::all('title');
        $title1 = $title->map(function ($title)
        {
            return substr($title->title, 0);
        });

        $publisher = sandevistanmodel::all('publisher');
        $publisher1 = $publisher->map(function ($publisher)
        {
            return substr($publisher->publisher, 0);
        });

        return view('welcome', ['naamData' => $title1, 'idData' => $id1, 'publisherData' => $publisher1]);
    }

    public function delete()
    {
        $ids= $_GET['aidee'];
        DB::delete('DELETE FROM sandevistan WHERE id = ?', [$ids]);

        return view('delete');
    }

    public function maak()
    {
        return view('maak');
    }

    public function maak4real()
    {
        $title4= $_POST['title1'];
        $publisher4= $_POST['publisher1'];

        DB::table('sandevistan')->insert
        ([
            'title' => $title4,
            'publisher' => $publisher4,
        ]);

        $id = sandevistanmodel::all('id');
        $id1 = $id->map(function ($id)
        {
            return substr($id->id, 0);
        });

        $title = sandevistanmodel::all('title');
        $title1 = $title->map(function ($title)
        {
            return substr($title->title, 0);
        });

        $publisher = sandevistanmodel::all('publisher');
        $publisher1 = $publisher->map(function ($publisher)
        {
            return substr($publisher->publisher, 0);
        });

        return view('welcome', ['naamData' => $title1, 'idData' => $id1, 'publisherData' => $publisher1]);
    }
}
