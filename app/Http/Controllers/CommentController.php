<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        // Retrieve all comments
        $comments = Comment::with('user')->get();

        // Pass comments to the view
        return view('welcome', compact('comments'));
    }

    public function store(Request $request)
    {
        // Validation rules for the comment
        $rules = [
            'content' => 'required|min:3',
        ];

        $request->validate($rules);

        // Create a new comment with user_id and content
        Comment::create([
            'user_id' => Auth::id(),
            'content' => $request->input('content'),
            // Tidak menyertakan 'post_id' karena kita tidak memiliki model 'Post'
        ]);

        return redirect('/')->with('success', 'Comment added successfully.');
    }


    public function edit($id)
    {
        // Find the comment by ID
        $comment = Comment::find($id);

        // Check if the user is authorized to edit the comment
        $this->authorize('update', $comment);

        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules for updating the comment
        $rules = [
            'content' => 'required|min:3',
        ];

        $request->validate($rules);

        // Find the comment by ID
        $comment = Comment::find($id);

        // Check if the user is authorized to update the comment
        $this->authorize('update', $comment);

        // Update the comment
        $comment->update([
            'content' => $request->input('content'),
        ]);

        return redirect()->back()->with('success', 'Comment updated successfully.');
    }

    public function destroy($id)
    {
        // Find the comment by ID
        $comment = Comment::find($id);

        // Check if the user is authorized to delete the comment
        $this->authorize('delete', $comment);

        // Delete the comment
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
}
