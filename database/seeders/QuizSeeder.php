<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        $questions = [
            [
                'question' => 'If log₁₀(2) = 0.3010, what is approximately log₁₀(200)?',
                'option_a' => '1.6020',
                'option_b' => '2.3010',
                'option_c' => '3.3010',
                'option_d' => '2.0000',
                'correct_answer' => 'c',
            ],
            [
                'question' => 'What is the sum of the infinite geometric series: 1 + 1/2 + 1/4 + ⋯ ?',
                'option_a' => '1.5',
                'option_b' => '1.75',
                'option_c' => '2',
                'option_d' => 'Diverges',
                'correct_answer' => 'c',
            ],
            [
                'question' => 'If A is a 3×3 matrix with det(A) = 5, what is det(2A)?',
                'option_a' => '10',
                'option_b' => '15',
                'option_c' => '40',
                'option_d' => '5',
                'correct_answer' => 'c',
            ],
            [
                'question' => 'What is the angle between the vectors a = (1, 0) and b = (0, 1)?',
                'option_a' => '0°',
                'option_b' => '45°',
                'option_c' => '90°',
                'option_d' => '180°',
                'correct_answer' => 'c',
            ],
            [
                'question' => 'Which of the following is irrational?',
                'option_a' => '16',
                'option_b' => '22/7',
                'option_c' => 'π',
                'option_d' => '0.5',
                'correct_answer' => 'c',
            ],
            [
                'question' => 'What is the modulus of the complex number z = 3 + 4i?',
                'option_a' => '5',
                'option_b' => '7',
                'option_c' => '13',
                'option_d' => '1',
                'correct_answer' => 'a',
            ],
            [
                'question' => 'If f(x) = x², what is f⁻¹(x) for x ≥ 0?',
                'option_a' => 'x²',
                'option_b' => 'x',
                'option_c' => '-x²',
                'option_d' => '-x',
                'correct_answer' => 'b',
            ],
            [
                'question' => 'What is the value of ∑k=1ⁿ k?',
                'option_a' => 'n(n+1)/2',
                'option_b' => 'n²',
                'option_c' => 'n(n−1)/2',
                'option_d' => 'n(n+1)',
                'correct_answer' => 'a',
            ],
            [
                'question' => 'If e^(ix) = cos(x) + i·sin(x), what is e^(iπ) + 1?',
                'option_a' => '1',
                'option_b' => '0',
                'option_c' => '-1',
                'option_d' => 'i',
                'correct_answer' => 'b',
            ],
            [
                'question' => 'What is the derivative of sin(x) at x = π?',
                'option_a' => '1',
                'option_b' => '0',
                'option_c' => '-1',
                'option_d' => '-π',
                'correct_answer' => 'b',
            ],
            [
                'question' => 'Which number is not a prime?',
                'option_a' => '2',
                'option_b' => '11',
                'option_c' => '15',
                'option_d' => '17',
                'correct_answer' => 'c',
            ],
            [
                'question' => 'What is the binary representation of the decimal number 10?',
                'option_a' => '1010',
                'option_b' => '1001',
                'option_c' => '1100',
                'option_d' => '1110',
                'correct_answer' => 'a',
            ],
            [
                'question' => 'The function f(x) = x³ is:',
                'option_a' => 'Even',
                'option_b' => 'Odd',
                'option_c' => 'Neither',
                'option_d' => 'Constant',
                'correct_answer' => 'b',
            ],
            [
                'question' => 'What is the standard deviation of the set {5, 5, 5, 5}?',
                'option_a' => '5',
                'option_b' => '0',
                'option_c' => '2.5',
                'option_d' => '10',
                'correct_answer' => 'b',
            ],
            [
                'question' => 'Which of the following functions has no maximum or minimum?',
                'option_a' => 'x²',
                'option_b' => 'sin(x)',
                'option_c' => 'x',
                'option_d' => '-x²',
                'correct_answer' => 'c',
            ],
            [
                'question' => 'If the eigenvalues of a matrix are 3, 5, and 7, what is its trace?',
                'option_a' => '15',
                'option_b' => '35',
                'option_c' => '105',
                'option_d' => '0',
                'correct_answer' => 'a',
            ],
            [
                'question' => 'What is the unit digit of 7^103?',
                'option_a' => '1',
                'option_b' => '3',
                'option_c' => '7',
                'option_d' => '9',
                'correct_answer' => 'b',
            ],
            [
                'question' => 'Which of the following numbers is divisible by 11?',
                'option_a' => '121',
                'option_b' => '123',
                'option_c' => '133',
                'option_d' => '144',
                'correct_answer' => 'a',
            ],
            [
                'question' => 'What is the sum of angles in a hexagon?',
                'option_a' => '540°',
                'option_b' => '720°',
                'option_c' => '900°',
                'option_d' => '1080°',
                'correct_answer' => 'b',
            ],
            [
                'question' => 'What is the rank of a full-rank 4×3 matrix?',
                'option_a' => '3',
                'option_b' => '4',
                'option_c' => '7',
                'option_d' => '1',
                'correct_answer' => 'a',
            ],
        ];

        foreach ($questions as $q) {
            Question::updateOrCreate(
                ['question' => $q['question']],
                [
                    'option_a' => $q['option_a'],
                    'option_b' => $q['option_b'],
                    'option_c' => $q['option_c'],
                    'option_d' => $q['option_d'],
                    'correct_answer' => $q['correct_answer'],
                ]
            );
        }
    }
}
