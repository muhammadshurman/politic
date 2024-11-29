<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;


class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('admin.questions', compact('questions'));
    }

    public function update(Request $request)
{
    foreach ($request->questions as $id => $data) {
        $question = Question::find($id);
        $question->update($data);
    }

    return redirect()->route('admin.questions')->with('success', 'Questions updated successfully!');
}

}
