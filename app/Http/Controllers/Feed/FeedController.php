<?php

namespace App\Http\Controllers\Feed;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest; // Import the correct request class

class FeedController extends Controller
{
    public function store(PostRequest $request) // Use the correct class name
    {
        $request->validated();

        auth()->user()->feeds->create([
            'content' => $request->content
        ]);

        return response([
           'message' => 'Successfully created feed'
        ], 201);
    }
}
