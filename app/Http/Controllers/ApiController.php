<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function view(Appeal $appeal)
    {
        return $appeal;
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'sometimes|max:255',
            'file' => 'sometimes|file|max:10240'
        ]);

        $appeal = new Appeal;
        $appeal->fill($request->all());
        $appeal->status = Appeal::STATUS_NEW;
        $appeal->save();
        return $appeal;
    }
}