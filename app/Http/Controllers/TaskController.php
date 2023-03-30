<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $actors = Actor::query();

        if ($request->has('search')) {
            $actors->orWhere('first_name', 'like', '%' . $search . '%');
            $actors->orWhere('last_name', 'like', '%' . $search . '%');
        }

        return $this->getView('actor.main', [
            'actors'=> $actors->get(),
            'search'=> $search,
        ]);
    }
}
