<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessUserCreation;
use Illuminate\Http\Request;

class GenerateDummyController extends Controller
{
    public function generateData(Request $request)
    {
        $this->validate($request, [
            'number' => 'required|integer'
        ]);
        $createUsers = new ProcessUserCreation($request->number);
        $this->dispatch($createUsers);
        return back()->with('success', "Your job is submitted. You will be notified when the task is completed.");
    }
}
