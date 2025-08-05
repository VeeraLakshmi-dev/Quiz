<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\User;
use App\Models\QuizSubmission;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
public function show()
{
    $questions = DB::table('questions')
        ->select('id', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'correct_answer')
        ->whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)')
                ->from('questions')
                ->groupBy('question');
        })
        ->inRandomOrder()
        ->limit(20)
        ->get();

    return view('quiz', compact('questions'));
}

    public function submit(Request $request)
    {
        $userId = auth()->id();
        $answers = $request->input('answers', []);
        $timeTaken = $request->input('time_taken', null);
        if ($timeTaken == null) {
            User::where('id', $userId)->update(['can_login' => false]);
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/thank-you')->with('message', 'Time expired. You are locked out.');
        }
 
        foreach ($answers as $questionId => $selectedKey) {
            $question = Question::find($questionId);

            if (!$question) continue;

            $correctKey = $question->correct_answer;
            $isCorrect = strtolower($selectedKey) == strtolower($correctKey) ? 1 : 0;

            QuizSubmission::create([
                'user_id'         => $userId,
                'question_id'     => $questionId,
                'selected_option' => $selectedKey,
                'submitted_at'    => now(),
                'time_taken'      => $timeTaken,
                'is_correct'      => $isCorrect,
            ]);
        }

        User::where('id', $userId)->update(['can_login' => false]);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/thank-you')->with('message', 'Quiz submitted successfully!');
    }
}
