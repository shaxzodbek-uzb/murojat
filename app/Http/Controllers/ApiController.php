<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\Category;
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
            'category_id' => 'required|exists:categories,id',
            'fullname' => 'nullable|max:255',
            'description' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'nullable|max:255',
            'file' => 'nullable|file|max:10240'
        ]);

        $appeal = new Appeal;
        $appeal->fill($request->all());
        $appeal->status = Appeal::STATUS_NEW;
        $appeal->save();
        return response()->json([
            'appeal' => $appeal
        ]);
    }
    public function categories()
    {
        return response()->json([
            'categories' => Category::all()
        ]);
    }
}