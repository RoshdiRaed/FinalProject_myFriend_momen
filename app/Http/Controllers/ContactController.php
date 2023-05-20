<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function Create()
    {
        return view('contact');
    }
    public function index()

    {
        $n = DB::table('imge')->get();
        return view('contact', compact('n'));
    }

    public function Insert(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        DB::table('contact_')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,

        ]);
        return response('Done');
    }
    public function imgee()
    {
        return view('imge');
    }

    public function Insertimge(Request $request)
    {
        $request->validate([
            'imge' => 'required',
        ]);

        $image = $request->file('imge');
        $filename = rand() . $image->getClientOriginalName();
        $image->move(public_path('imge'), $filename);

        DB::table('imge')->insert([
            'name' => $request->input('name'),
            'body' => $request->input('body'),
            'imge' => $filename
        ]);

        return response('Done');
    }
}
