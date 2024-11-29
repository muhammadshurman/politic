<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    public function home()
{
    $questions = Question::all();
    return view('home', compact('questions'));
}

public function submit(Request $request)
{
    // Initialize scores
    $scores = [
        'Middle' => 0,
        'Right' => 0,
        'Left' => 0,
    ];

    // Validate that answers are provided
    if (!$request->has('answers') || empty($request->answers)) {
        return back()->withErrors(['error' => 'No answers were submitted.']);
    }

    // Retrieve all question IDs from the database
    $questions = Question::all()->pluck('id')->toArray();

    // Process each answer
    foreach ($request->answers as $questionId => $answer) {
        // Ensure the submitted question ID exists in the database
        if (!in_array($questionId, $questions)) {
            return back()->withErrors(['error' => "Invalid question ID: $questionId"]);
        }

        // Increment the score for the selected answer
        if (isset($scores[$answer])) {
            $scores[$answer]++;
        }
    }

    // Analyze the dominant choice
    $analysis = array_keys($scores, max($scores))[0];

    return view('quiz.result', compact('analysis', 'scores'));
}

public function update(Request $request)
{
    // Validate incoming data
    $request->validate([
        'questions.*.question' => 'required|string|max:255',
        'questions.*.option1' => 'required|string|max:255',
        'questions.*.option2' => 'required|string|max:255',
        'questions.*.option3' => 'required|string|max:255',
    ]);

    // Update each question
    foreach ($request->questions as $id => $data) {
        $question = Question::findOrFail($id); // Ensure the question exists
        $question->update($data);
    }

    return back()->with('success', 'Questions updated successfully.');
}

}
