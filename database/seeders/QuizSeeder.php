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
                'question' => 'What is 25% of 80?',
                'option_a' => '15',
                'option_b' => '20',
                'option_c' => '25',
                'option_d' => '30',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If a number is increased by 20%, what percentage should it be decreased to get back to original?',
                'option_a' => '16.67%',
                'option_b' => '20%',
                'option_c' => '25%',
                'option_d' => '15%',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'The compound interest on Rs. 8000 at 15% per annum for 2 years compounded annually is:',
                'option_a' => 'Rs. 2540',
                'option_b' => 'Rs. 2580',
                'option_c' => 'Rs. 2640',
                'option_d' => 'Rs. 2700',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A train 150m long crosses a platform 250m long in 20 seconds. What is the speed of the train?',
                'option_a' => '72 km/h',
                'option_b' => '60 km/h',
                'option_c' => '54 km/h',
                'option_d' => '48 km/h',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If all roses are flowers and some flowers are red, then:',
                'option_a' => 'All roses are red',
                'option_b' => 'Some roses are red',
                'option_c' => 'No roses are red',
                'option_d' => 'Cannot be determined',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'Find the next number in the series: 2, 6, 12, 20, 30, ?',
                'option_a' => '40',
                'option_b' => '42',
                'option_c' => '44',
                'option_d' => '46',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If CODING is written as DPEJOH, how is SYSTEM written?',
                'option_a' => 'TZTUFN',
                'option_b' => 'TZTUEN',
                'option_c' => 'TZTUFO',
                'option_d' => 'TZTUFM',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A clock shows 3:15. What is the angle between the hour and minute hands?',
                'option_a' => '7.5°',
                'option_b' => '15°',
                'option_c' => '22.5°',
                'option_d' => '37.5°',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'In a pie chart, if a sector represents 72°, what percentage of the total does it represent?',
                'option_a' => '15%',
                'option_b' => '20%',
                'option_c' => '25%',
                'option_d' => '30%',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If the average of 5 numbers is 20, and 4 of them are 15, 18, 22, 25, what is the 5th number?',
                'option_a' => '20',
                'option_b' => '18',
                'option_c' => '22',
                'option_d' => '16',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Choose the correct synonym for "UBIQUITOUS"=>',
                'option_a' => 'Rare',
                'option_b' => 'Omnipresent',
                'option_c' => 'Unclear',
                'option_d' => 'Unique',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Find the error in: "Each of the students have submitted their assignment."',
                'option_a' => 'Each of',
                'option_b' => 'have submitted',
                'option_c' => 'their assignment',
                'option_d' => 'No error',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Complete the analogy: Book : Author :: Painting : ?',
                'option_a' => 'Canvas',
                'option_b' => 'Brush',
                'option_c' => 'Artist',
                'option_d' => 'Color',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'What is the time complexity of binary search?',
                'option_a' => 'O(n)',
                'option_b' => 'O(log n)',
                'option_c' => 'O(n log n)',
                'option_d' => 'O(n²)',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Which data structure follows LIFO principle?',
                'option_a' => 'Queue',
                'option_b' => 'Stack',
                'option_c' => 'Array',
                'option_d' => 'Linked List',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What will be the output of: console.log(typeof null) in JavaScript?',
                'option_a' => 'null',
                'option_b' => 'undefined',
                'option_c' => 'object',
                'option_d' => 'string',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'A man buys 12 apples for Rs. 60 and sells them at Rs. 6 each. What is his profit percentage?',
                'option_a' => '20%',
                'option_b' => '40%',
                'option_c' => '44%',
                'option_d' => '50%',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If 15 men can complete a work in 20 days, in how many days can 25 men complete the same work?',
                'option_a' => '10 days',
                'option_b' => '12 days',
                'option_c' => '15 days',
                'option_d' => '18 days',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'The ages of A and B are in the ratio 3:4. After 6 years, the ratio will be 4:5. What is the current age of A?',
                'option_a' => '18 years',
                'option_b' => '24 years',
                'option_c' => '30 years',
                'option_d' => '36 years',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Who is known as the "Father of Computer Science"?',
                'option_a' => 'Charles Babbage',
                'option_b' => 'Alan Turing',
                'option_c' => 'John von Neumann',
                'option_d' => 'Ada Lovelace',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Which company is known for the "Just Do It" slogan?',
                'option_a' => 'Adidas',
                'option_b' => 'Puma',
                'option_c' => 'Nike',
                'option_d' => 'Reebok',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'A clock loses 2 minutes every hour. If it shows 10:00 AM when the correct time is 10:00 AM, what will it show when the correct time is 6:00 PM?',
                'option_a' => '5:44 PM',
                'option_b' => '5:46 PM',
                'option_c' => '5:48 PM',
                'option_d' => '5:50 PM',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If you rearrange the letters "CINEMA", you get the name of a:',
                'option_a' => 'Country',
                'option_b' => 'Animal',
                'option_c' => 'Food item',
                'option_d' => 'Mineral',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A pipe can fill a tank in 6 hours. Another pipe can empty it in 8 hours. If both pipes are opened together, in how many hours will the tank be filled?',
                'option_a' => '12 hours',
                'option_b' => '18 hours',
                'option_c' => '24 hours',
                'option_d' => '30 hours',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'What comes next in the sequence: 1, 1, 2, 3, 5, 8, 13, ?',
                'option_a' => '18',
                'option_b' => '20',
                'option_c' => '21',
                'option_d' => '24',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'If MONDAY is coded as 123456, how is YODEL coded?',
                'option_a' => '61478',
                'option_b' => '61429',
                'option_c' => '61457',
                'option_d' => '61528',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'The probability of getting a sum of 7 when two dice are thrown is:',
                'option_a' => '1/6',
                'option_b' => '1/5',
                'option_c' => '1/4',
                'option_d' => '1/3',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Choose the word that is most similar to "METICULOUS"=>',
                'option_a' => 'Careless',
                'option_b' => 'Thorough',
                'option_c' => 'Quick',
                'option_d' => 'Expensive',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is the maximum number of nodes in a binary tree of height h?',
                'option_a' => '2^h',
                'option_b' => '2^(h+1)',
                'option_c' => '2^(h+1) - 1',
                'option_d' => '2^h - 1',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'If the price of a commodity increases by 25%, by what percentage should consumption be reduced to keep expenditure constant?',
                'option_a' => '20%',
                'option_b' => '25%',
                'option_c' => '30%',
                'option_d' => '15%',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Which of the following is NOT a characteristic of Object-Oriented Programming?',
                'option_a' => 'Encapsulation',
                'option_b' => 'Inheritance',
                'option_c' => 'Polymorphism',
                'option_d' => 'Compilation',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'What is the square root of 144?',
                'option_a' => '10',
                'option_b' => '12',
                'option_c' => '14',
                'option_d' => '16',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If x² - 5x + 6 = 0, what are the values of x?',
                'option_a' => '2, 3',
                'option_b' => '1, 6',
                'option_c' => '2, 4',
                'option_d' => '1, 5',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A rectangle has length 12 cm and breadth 8 cm. What is its area?',
                'option_a' => '96 sq cm',
                'option_b' => '40 sq cm',
                'option_c' => '20 sq cm',
                'option_d' => '80 sq cm',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'What is 15% of 240?',
                'option_a' => '36',
                'option_b' => '30',
                'option_c' => '24',
                'option_d' => '42',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If a car travels 300 km in 5 hours, what is its average speed?',
                'option_a' => '50 km/h',
                'option_b' => '60 km/h',
                'option_c' => '70 km/h',
                'option_d' => '80 km/h',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'The LCM of 12 and 18 is:',
                'option_a' => '36',
                'option_b' => '54',
                'option_c' => '72',
                'option_d' => '108',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If 3x + 7 = 22, what is the value of x?',
                'option_a' => '4',
                'option_b' => '5',
                'option_c' => '6',
                'option_d' => '7',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is the circumference of a circle with radius 7 cm? (π = 22/7)',
                'option_a' => '44 cm',
                'option_b' => '22 cm',
                'option_c' => '14 cm',
                'option_d' => '28 cm',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If a sum of Rs. 1000 becomes Rs. 1100 in 2 years at simple interest, what is the rate?',
                'option_a' => '5%',
                'option_b' => '10%',
                'option_c' => '15%',
                'option_d' => '20%',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'What is the next term in the series: 3, 6, 12, 24, ?',
                'option_a' => '36',
                'option_b' => '48',
                'option_c' => '42',
                'option_d' => '54',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If all cats are animals and some animals are pets, then:',
                'option_a' => 'All cats are pets',
                'option_b' => 'Some cats are pets',
                'option_c' => 'No cats are pets',
                'option_d' => 'Cannot be determined',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'In a certain code, if WATER is written as XBUFS, how is PHONE written?',
                'option_a' => 'QIPOF',
                'option_b' => 'QIPOG',
                'option_c' => 'QJPOF',
                'option_d' => 'QJPOG',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Which number comes next: 1, 4, 9, 16, 25, ?',
                'option_a' => '30',
                'option_b' => '35',
                'option_c' => '36',
                'option_d' => '49',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'If Monday is the 1st day, what day is the 100th day?',
                'option_a' => 'Monday',
                'option_b' => 'Tuesday',
                'option_c' => 'Wednesday',
                'option_d' => 'Thursday',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'Complete the pattern: AB, CD, EF, GH, ?',
                'option_a' => 'IJ',
                'option_b' => 'HI',
                'option_c' => 'JK',
                'option_d' => 'GH',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If some doctors are engineers and all engineers are scientists, then:',
                'option_a' => 'All doctors are scientists',
                'option_b' => 'Some doctors are scientists',
                'option_c' => 'No doctors are scientists',
                'option_d' => 'All scientists are doctors',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is the missing number: 2, 5, 10, 17, 26, ?',
                'option_a' => '35',
                'option_b' => '37',
                'option_c' => '39',
                'option_d' => '41',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If FRIEND is coded as GSJFOE, how is MOTHER coded?',
                'option_a' => 'NPUIFS',
                'option_b' => 'NPUIFS',
                'option_c' => 'NPUIFR',
                'option_d' => 'NPUIFQ',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'In a row of 40 students, A is 16th from left. What is A\'s position from right?',
                'option_a' => '24th',
                'option_b' => '25th',
                'option_c' => '26th',
                'option_d' => '27th',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Which of the following is different from others?',
                'option_a' => 'Square',
                'option_b' => 'Rectangle',
                'option_c' => 'Circle',
                'option_d' => 'Parallelogram',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'Choose the antonym of "ABUNDANCE"=>',
                'option_a' => 'Plenty',
                'option_b' => 'Scarcity',
                'option_c' => 'Wealth',
                'option_d' => 'Richness',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Complete the sentence: "She is _____ intelligent than her sister."',
                'option_a' => 'more',
                'option_b' => 'most',
                'option_c' => 'much',
                'option_d' => 'very',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Choose the correct spelling:',
                'option_a' => 'Recieve',
                'option_b' => 'Receive',
                'option_c' => 'Recieve',
                'option_d' => 'Receeve',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Find the synonym of "ENORMOUS"=>',
                'option_a' => 'Tiny',
                'option_b' => 'Small',
                'option_c' => 'Huge',
                'option_d' => 'Medium',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'Which sentence is grammatically correct?',
                'option_a' => 'He don\'t like coffee',
                'option_b' => 'He doesn\'t likes coffee',
                'option_c' => 'He doesn\'t like coffee',
                'option_d' => 'He don\'t likes coffee',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'Choose the correct preposition: "The book is _____ the table."',
                'option_a' => 'in',
                'option_b' => 'on',
                'option_c' => 'at',
                'option_d' => 'by',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is the plural of "Child"?',
                'option_a' => 'Childs',
                'option_b' => 'Children',
                'option_c' => 'Childrens',
                'option_d' => 'Childerns',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Choose the correctly punctuated sentence:',
                'option_a' => 'It\'s a beautiful day, isn\'t it?',
                'option_b' => 'Its a beautiful day, isn\'t it?',
                'option_c' => 'It\'s a beautiful day isn\'t it?',
                'option_d' => 'Its a beautiful day isnt it?',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Find the analogy: Hand : Finger :: Foot : ?',
                'option_a' => 'Leg',
                'option_b' => 'Toe',
                'option_c' => 'Ankle',
                'option_d' => 'Shoe',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Choose the word that doesn\'t belong:',
                'option_a' => 'Apple',
                'option_b' => 'Orange',
                'option_c' => 'Banana',
                'option_d' => 'Potato',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'If a pie chart shows 90° for a sector, what percentage does it represent?',
                'option_a' => '20%',
                'option_b' => '25%',
                'option_c' => '30%',
                'option_d' => '35%',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'The average of 10, 20, 30, 40 is:',
                'option_a' => '20',
                'option_b' => '25',
                'option_c' => '30',
                'option_d' => '35',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If the median of 5, 8, 12, 15, x is 10, what is x?',
                'option_a' => '6',
                'option_b' => '7',
                'option_c' => '8',
                'option_d' => '9',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is the mode of: 2, 3, 4, 4, 5, 6, 4?',
                'option_a' => '2',
                'option_b' => '3',
                'option_c' => '4',
                'option_d' => '5',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'If a bar graph shows heights 10, 15, 20, 25, what is the range?',
                'option_a' => '10',
                'option_b' => '15',
                'option_c' => '20',
                'option_d' => '25',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A can do a work in 12 days. B can do the same work in 18 days. Together they can complete it in:',
                'option_a' => '6 days',
                'option_b' => '7.2 days',
                'option_c' => '8 days',
                'option_d' => '9 days',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If 20 men can build a wall in 15 days, how many men are needed to build it in 10 days?',
                'option_a' => '25',
                'option_b' => '30',
                'option_c' => '35',
                'option_d' => '40',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A tap can fill a tank in 4 hours. A drain can empty it in 6 hours. If both are open, the tank will be full in:',
                'option_a' => '10 hours',
                'option_b' => '12 hours',
                'option_c' => '14 hours',
                'option_d' => '16 hours',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If a person completes 1/3 of work in 5 days, in how many days will he complete the entire work?',
                'option_a' => '10 days',
                'option_b' => '12 days',
                'option_c' => '15 days',
                'option_d' => '18 days',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'A and B together can finish a work in 6 days. A alone can finish it in 10 days. B alone can finish it in:',
                'option_a' => '12 days',
                'option_b' => '15 days',
                'option_c' => '18 days',
                'option_d' => '20 days',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A shopkeeper sells an article for Rs. 120 and makes a profit of 20%. What was the cost price?',
                'option_a' => 'Rs. 90',
                'option_b' => 'Rs. 100',
                'option_c' => 'Rs. 110',
                'option_d' => 'Rs. 96',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If an article is sold for Rs. 150 at a loss of 25%, what is the cost price?',
                'option_a' => 'Rs. 180',
                'option_b' => 'Rs. 200',
                'option_c' => 'Rs. 175',
                'option_d' => 'Rs. 190',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A trader marks up his goods by 40% and gives a discount of 10%. His profit percentage is:',
                'option_a' => '26%',
                'option_b' => '28%',
                'option_c' => '30%',
                'option_d' => '32%',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If selling price is Rs. 300 and profit is 25%, what is the cost price?',
                'option_a' => 'Rs. 225',
                'option_b' => 'Rs. 240',
                'option_c' => 'Rs. 250',
                'option_d' => 'Rs. 260',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A man buys 100 apples for Rs. 200 and sells them at Rs. 2.50 each. His profit percentage is:',
                'option_a' => '20%',
                'option_b' => '25%',
                'option_c' => '30%',
                'option_d' => '35%',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A father is 30 years older than his son. After 5 years, he will be 3 times as old as his son. What is the son\'s current age?',
                'option_a' => '10 years',
                'option_b' => '12 years',
                'option_c' => '15 years',
                'option_d' => '18 years',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'The sum of ages of A and B is 50. After 5 years, A will be twice as old as B. What is A\'s current age?',
                'option_a' => '30 years',
                'option_b' => '35 years',
                'option_c' => '40 years',
                'option_d' => '45 years',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Five years ago, A was twice as old as B. If their current ages sum to 35, what is B\'s current age?',
                'option_a' => '10 years',
                'option_b' => '15 years',
                'option_c' => '20 years',
                'option_d' => '25 years',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A is 5 years older than B. The sum of their ages is 25. What is A\'s age?',
                'option_a' => '10 years',
                'option_b' => '12 years',
                'option_c' => '15 years',
                'option_d' => '18 years',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'The ratio of present ages of A and B is 3:2. After 8 years, the ratio will be 5:4. What is A\'s current age?',
                'option_a' => '12 years',
                'option_b' => '15 years',
                'option_c' => '18 years',
                'option_d' => '21 years',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'A car covers 180 km in 3 hours. What is its speed in m/s?',
                'option_a' => '16.67 m/s',
                'option_b' => '50 m/s',
                'option_c' => '60 m/s',
                'option_d' => '20 m/s',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Two trains are moving towards each other at 60 km/h and 40 km/h. They will meet in:',
                'option_a' => 'Distance dependent',
                'option_b' => '1 hour',
                'option_c' => '2 hours',
                'option_d' => 'Cannot be determined',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'A man walks 4 km in 1 hour. How long will it take him to walk 10 km?',
                'option_a' => '2 hours',
                'option_b' => '2.5 hours',
                'option_c' => '3 hours',
                'option_d' => '3.5 hours',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A train 200m long crosses a platform 300m long in 25 seconds. What is the speed of the train?',
                'option_a' => '20 m/s',
                'option_b' => '25 m/s',
                'option_c' => '30 m/s',
                'option_d' => '35 m/s',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If a person travels first half distance at 40 km/h and second half at 60 km/h, what is the average speed?',
                'option_a' => '48 km/h',
                'option_b' => '50 km/h',
                'option_c' => '52 km/h',
                'option_d' => '55 km/h',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'In what ratio must tea costing Rs. 60/kg be mixed with tea costing Rs. 90/kg to get a mixture worth Rs. 70/kg?',
                'option_a' => '1:2',
                'option_b' => '2:1',
                'option_c' => '3:1',
                'option_d' => '1:3',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A mixture contains milk and water in the ratio 4:1. If 5 liters of water is added, the ratio becomes 4:3. What was the original quantity of mixture?',
                'option_a' => '15 liters',
                'option_b' => '20 liters',
                'option_c' => '25 liters',
                'option_d' => '30 liters',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'How many liters of water must be added to 20 liters of milk to get a mixture with 80% milk?',
                'option_a' => '5 liters',
                'option_b' => '4 liters',
                'option_c' => '3 liters',
                'option_d' => '2 liters',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Two solutions contain alcohol in the ratio 3:2 and 4:3 respectively. In what ratio should they be mixed to get a solution with 50% alcohol?',
                'option_a' => '3:7',
                'option_b' => '7:3',
                'option_c' => '1:1',
                'option_d' => '2:3',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A vessel contains 40 liters of milk. 8 liters is taken out and replaced with water. This process is repeated. What is the final concentration of milk?',
                'option_a' => '60%',
                'option_b' => '64%',
                'option_c' => '68%',
                'option_d' => '72%',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is the probability of getting a head when a coin is tossed?',
                'option_a' => '1/4',
                'option_b' => '1/3',
                'option_c' => '1/2',
                'option_d' => '2/3',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'A bag contains 3 red balls and 2 blue balls. What is the probability of drawing a red ball?',
                'option_a' => '2/5',
                'option_b' => '3/5',
                'option_c' => '1/2',
                'option_d' => '2/3',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is the probability of getting an even number when a die is rolled?',
                'option_a' => '1/3',
                'option_b' => '1/2',
                'option_c' => '2/3',
                'option_d' => '1/6',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Two cards are drawn from a deck. What is the probability both are aces?',
                'option_a' => '1/169',
                'option_b' => '1/221',
                'option_c' => '4/663',
                'option_d' => '1/52',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A box contains 5 red and 3 green balls. Two balls are drawn. What is the probability both are red?',
                'option_a' => '5/14',
                'option_b' => '10/28',
                'option_c' => '5/28',
                'option_d' => '25/64',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'What is the area of a triangle with base 10 cm and height 8 cm?',
                'option_a' => '40 sq cm',
                'option_b' => '80 sq cm',
                'option_c' => '18 sq cm',
                'option_d' => '90 sq cm',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'The perimeter of a square is 40 cm. What is its area?',
                'option_a' => '80 sq cm',
                'option_b' => '100 sq cm',
                'option_c' => '120 sq cm',
                'option_d' => '160 sq cm',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is the volume of a cube with side 5 cm?',
                'option_a' => '25 cu cm',
                'option_b' => '75 cu cm',
                'option_c' => '125 cu cm',
                'option_d' => '150 cu cm',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'The diagonal of a rectangle with length 6 cm and breadth 8 cm is:',
                'option_a' => '10 cm',
                'option_b' => '12 cm',
                'option_c' => '14 cm',
                'option_d' => '16 cm',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'What is the area of a circle with diameter 14 cm? (π = 22/7)',
                'option_a' => '154 sq cm',
                'option_b' => '144 sq cm',
                'option_c' => '132 sq cm',
                'option_d' => '176 sq cm',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'What does CPU stand for?',
                'option_a' => 'Central Processing Unit',
                'option_b' => 'Computer Processing Unit',
                'option_c' => 'Central Program Unit',
                'option_d' => 'Computer Program Unit',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Which of the following is not a programming language?',
                'option_a' => 'Java',
                'option_b' => 'Python',
                'option_c' => 'HTML',
                'option_d' => 'C++',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'What is the binary representation of decimal 8?',
                'option_a' => '1000',
                'option_b' => '1001',
                'option_c' => '1010',
                'option_d' => '1100',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Which sorting algorithm has the best average time complexity?',
                'option_a' => 'Bubble Sort',
                'option_b' => 'Selection Sort',
                'option_c' => 'Quick Sort',
                'option_d' => 'Insertion Sort',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'What does SQL stand for?',
                'option_a' => 'Structured Query Language',
                'option_b' => 'Standard Query Language',
                'option_c' => 'Sequential Query Language',
                'option_d' => 'Simple Query Language',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'What is the capital of Australia?',
                'option_a' => 'Sydney',
                'option_b' => 'Melbourne',
                'option_c' => 'Canberra',
                'option_d' => 'Perth',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'Which planet is known as the Red Planet?',
                'option_a' => 'Venus',
                'option_b' => 'Mars',
                'option_c' => 'Jupiter',
                'option_d' => 'Saturn',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Who painted the Mona Lisa?',
                'option_a' => 'Van Gogh',
                'option_b' => 'Picasso',
                'option_c' => 'Leonardo da Vinci',
                'option_d' => 'Michelangelo',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'What is the largest ocean on Earth?',
                'option_a' => 'Atlantic Ocean',
                'option_b' => 'Indian Ocean',
                'option_c' => 'Arctic Ocean',
                'option_d' => 'Pacific Ocean',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'Find the next number in the series: 5, 11, 23, 47, ?',
                'option_a' => '95',
                'option_b' => '94',
                'option_c' => '96',
                'option_d' => '93',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'What comes next: 7, 14, 28, 56, ?',
                'option_a' => '84',
                'option_b' => '112',
                'option_c' => '108',
                'option_d' => '120',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Complete the series: 3, 7, 15, 31, 63, ?',
                'option_a' => '127',
                'option_b' => '125',
                'option_c' => '128',
                'option_d' => '126',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Find the missing number: 2, 6, 18, 54, ?',
                'option_a' => '108',
                'option_b' => '162',
                'option_c' => '216',
                'option_d' => '180',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Next in series: 1, 8, 27, 64, ?',
                'option_a' => '100',
                'option_b' => '125',
                'option_c' => '144',
                'option_d' => '216',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'All birds can fly. Penguins are birds. Therefore:',
                'option_a' => 'Penguins can fly',
                'option_b' => 'The first statement is false',
                'option_c' => 'Penguins are not birds',
                'option_d' => 'All statements are true',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If it rains, the ground gets wet. The ground is wet. Therefore:',
                'option_a' => 'It must have rained',
                'option_b' => 'It might have rained',
                'option_c' => 'It did not rain',
                'option_d' => 'Cannot be determined',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Some books are novels. All novels are interesting. Therefore:',
                'option_a' => 'All books are interesting',
                'option_b' => 'Some books are interesting',
                'option_c' => 'No books are interesting',
                'option_d' => 'All interesting things are books',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'No fish can walk. Some animals can walk. Therefore:',
                'option_a' => 'No animals are fish',
                'option_b' => 'Some animals are not fish',
                'option_c' => 'All fish are animals',
                'option_d' => 'Some fish are animals',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'All students study hard. John studies hard. Therefore:',
                'option_a' => 'John is a student',
                'option_b' => 'John might be a student',
                'option_c' => 'John is not a student',
                'option_d' => 'Cannot be determined',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'If TIGER is coded as 19-9-7-5-18, how is HORSE coded?',
                'option_a' => '8-15-18-19-5',
                'option_b' => '8-15-18-5-19',
                'option_c' => '8-16-18-19-5',
                'option_d' => '7-15-18-19-5',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'In a code language, PAPER is written as SDSHU. How is COVER written?',
                'option_a' => 'FRYHU',
                'option_b' => 'FRYIU',
                'option_c' => 'FRYGU',
                'option_d' => 'FRYEU',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If DELHI is coded as 73541, how is BRIDE coded?',
                'option_a' => '94637',
                'option_b' => '94736',
                'option_c' => '94673',
                'option_d' => '94367',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'In a certain code, HOUSE is written as FMLPC. How is CHAIR written?',
                'option_a' => 'AFYDQ',
                'option_b' => 'AFEIQ',
                'option_c' => 'AFYGQ',
                'option_d' => 'AFEIR',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If FLOWER is coded as DNKSCP, how is GARDEN coded?',
                'option_a' => 'EYPBCL',
                'option_b' => 'EYPBCK',
                'option_c' => 'EYPBCM',
                'option_d' => 'EYPBCJ',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If today is Wednesday, what day will it be after 100 days?',
                'option_a' => 'Friday',
                'option_b' => 'Saturday',
                'option_c' => 'Sunday',
                'option_d' => 'Monday',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'What was the day on 15th August 1947?',
                'option_a' => 'Thursday',
                'option_b' => 'Friday',
                'option_c' => 'Saturday',
                'option_d' => 'Sunday',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If 1st January 2023 was a Sunday, what day was 1st March 2023?',
                'option_a' => 'Tuesday',
                'option_b' => 'Wednesday',
                'option_c' => 'Thursday',
                'option_d' => 'Friday',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'How many days are there between 15th March and 15th June (both inclusive)?',
                'option_a' => '92',
                'option_b' => '93',
                'option_c' => '94',
                'option_d' => '95',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If Christmas falls on a Tuesday, what day will New Year be?',
                'option_a' => 'Monday',
                'option_b' => 'Tuesday',
                'option_c' => 'Wednesday',
                'option_d' => 'Thursday',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A is B\'s father. C is A\'s mother. How is C related to B?',
                'option_a' => 'Mother',
                'option_b' => 'Grandmother',
                'option_c' => 'Aunt',
                'option_d' => 'Sister',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Pointing to a man, Sita said, "His mother is the only daughter of my mother." How is the man related to Sita?',
                'option_a' => 'Brother',
                'option_b' => 'Son',
                'option_c' => 'Father',
                'option_d' => 'Uncle',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A man said to a lady, "Your mother\'s husband\'s sister is my aunt." How is the lady related to the man?',
                'option_a' => 'Daughter',
                'option_b' => 'Sister',
                'option_c' => 'Mother',
                'option_d' => 'Cousin',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'Introducing a boy, a girl said, "He is the son of the daughter of the father of my uncle." How is the boy related to the girl?',
                'option_a' => 'Brother',
                'option_b' => 'Nephew',
                'option_c' => 'Uncle',
                'option_d' => 'Son-in-law',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A is the father of B. B is the father of C. How is A related to C?',
                'option_a' => 'Father',
                'option_b' => 'Son',
                'option_c' => 'Grandfather',
                'option_d' => 'Uncle',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'A person walks 5 km North, then 3 km East, then 2 km South. How far is he from the starting point?',
                'option_a' => '3√2 km',
                'option_b' => '4 km',
                'option_c' => '5 km',
                'option_d' => '√18 km',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'Ram walks 10 km towards North. From there he walks 6 km towards South. Then he walks 3 km towards East. How far is he from the starting point?',
                'option_a' => '5 km',
                'option_b' => '4 km',
                'option_c' => '3 km',
                'option_d' => '7 km',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A man facing North turns 90° right, then 180° left, then 90° right. Which direction is he facing now?',
                'option_a' => 'North',
                'option_b' => 'South',
                'option_c' => 'East',
                'option_d' => 'West',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'Starting from point A, a person walks 4 km East, then 3 km North. What is the shortest distance to return to point A?',
                'option_a' => '5 km',
                'option_b' => '7 km',
                'option_c' => '12 km',
                'option_d' => '1 km',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If South-East becomes North and North-East becomes West, what does West become?',
                'option_a' => 'North-East',
                'option_b' => 'South-West',
                'option_c' => 'South-East',
                'option_d' => 'North-West',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'In a row of 25 students, A is 16th from the left. What is A\'s position from the right?',
                'option_a' => '9th',
                'option_b' => '10th',
                'option_c' => '11th',
                'option_d' => '12th',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Amit is taller than Sumit but shorter than Ravi. Kavi is taller than Ravi. Who is the shortest?',
                'option_a' => 'Amit',
                'option_b' => 'Sumit',
                'option_c' => 'Ravi',
                'option_d' => 'Kavi',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Five friends A, B, C, D, E are sitting in a row. A and E are at the ends. B is between A and C. Where is D sitting?',
                'option_a' => 'Between C and E',
                'option_b' => 'Between B and C',
                'option_c' => 'Next to A',
                'option_d' => 'Cannot be determined',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'In a class of 30 students, Ravi ranks 7th from the top. What is his rank from the bottom?',
                'option_a' => '23rd',
                'option_b' => '24th',
                'option_c' => '25th',
                'option_d' => '26th',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A, B, C, D, E are sitting in a circle. A is between B and C. D is between C and E. Who is sitting between A and E?',
                'option_a' => 'B',
                'option_b' => 'C',
                'option_c' => 'D',
                'option_d' => 'None',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'Choose the word that is most opposite to "OPTIMISTIC"=>',
                'option_a' => 'Hopeful',
                'option_b' => 'Pessimistic',
                'option_c' => 'Confident',
                'option_d' => 'Positive',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Find the synonym of "TEDIOUS"=>',
                'option_a' => 'Interesting',
                'option_b' => 'Exciting',
                'option_c' => 'Boring',
                'option_d' => 'Challenging',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'Complete the analogy: Fire : Heat :: Ice : ?',
                'option_a' => 'Water',
                'option_b' => 'Cold',
                'option_c' => 'Freeze',
                'option_d' => 'Snow',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Which word does not belong to the group?',
                'option_a' => 'Rose',
                'option_b' => 'Jasmine',
                'option_c' => 'Lily',
                'option_d' => 'Mango',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'Choose the correctly spelled word:',
                'option_a' => 'Acommodate',
                'option_b' => 'Accommodate',
                'option_c' => 'Accomodate',
                'option_d' => 'Acomodate',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is 45% of 80?',
                'option_a' => '32',
                'option_b' => '36',
                'option_c' => '40',
                'option_d' => '44',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If a number is decreased by 30%, by what percent should it be increased to restore the original value?',
                'option_a' => '30%',
                'option_b' => '42.86%',
                'option_c' => '35%',
                'option_d' => '40%',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'The simple interest on Rs. 2000 for 3 years at 10% per annum is:',
                'option_a' => 'Rs. 600',
                'option_b' => 'Rs. 500',
                'option_c' => 'Rs. 700',
                'option_d' => 'Rs. 800',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A student scored 80% marks in an exam. If the maximum marks were 500, how many marks did he score?',
                'option_a' => '400',
                'option_b' => '350',
                'option_c' => '450',
                'option_d' => '420',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If the population of a city increases by 10% annually, what will be the population after 2 years if current population is 100,000?',
                'option_a' => '120,000',
                'option_b' => '121,000',
                'option_c' => '110,000',
                'option_d' => '125,000',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is the HCF of 48 and 72?',
                'option_a' => '12',
                'option_b' => '24',
                'option_c' => '36',
                'option_d' => '48',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If 2x + 3y = 12 and x + y = 5, find the value of x:',
                'option_a' => '2',
                'option_b' => '3',
                'option_c' => '4',
                'option_d' => '1',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'What is the value of (25)² - (24)²?',
                'option_a' => '47',
                'option_b' => '48',
                'option_c' => '49',
                'option_d' => '50',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'The sum of first 20 natural numbers is:',
                'option_a' => '200',
                'option_b' => '210',
                'option_c' => '220',
                'option_d' => '230',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If 3ˣ = 81, what is the value of x?',
                'option_a' => '3',
                'option_b' => '4',
                'option_c' => '5',
                'option_d' => '6',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Which gas is most abundant in Earth\'s atmosphere?',
                'option_a' => 'Oxygen',
                'option_b' => 'Carbon Dioxide',
                'option_c' => 'Nitrogen',
                'option_d' => 'Hydrogen',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'The currency of Japan is:',
                'option_a' => 'Won',
                'option_b' => 'Yuan',
                'option_c' => 'Yen',
                'option_d' => 'Rupiah',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'Who wrote the novel "Pride and Prejudice"?',
                'option_a' => 'Jane Austen',
                'option_b' => 'Charlotte Bronte',
                'option_c' => 'Emily Dickinson',
                'option_d' => 'Virginia Woolf',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'The smallest bone in the human body is:',
                'option_a' => 'Femur',
                'option_b' => 'Stapes',
                'option_c' => 'Radius',
                'option_d' => 'Tibia',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'Which vitamin is produced when skin is exposed to sunlight?',
                'option_a' => 'Vitamin A',
                'option_b' => 'Vitamin B',
                'option_c' => 'Vitamin C',
                'option_d' => 'Vitamin D',
                'correct_answer' => 'd'
            ],
            [
                'question' => 'A clock strikes 6 times in 5 seconds. How long will it take to strike 12 times?',
                'option_a' => '10 seconds',
                'option_b' => '11 seconds',
                'option_c' => '12 seconds',
                'option_d' => '13 seconds',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If you count from 1 to 100, how many times do you write the digit 7?',
                'option_a' => '19',
                'option_b' => '20',
                'option_c' => '21',
                'option_d' => '22',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'How many triangles are there in a pentagram (5-pointed star)?',
                'option_a' => '35',
                'option_b' => '30',
                'option_c' => '25',
                'option_d' => '20',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A man has 5 sons. Each son has 1 sister. How many children does the man have?',
                'option_a' => '5',
                'option_b' => '6',
                'option_c' => '10',
                'option_d' => '11',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If you have 3 apples and you take away 2, how many do you have?',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '3',
                'option_d' => '5',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A can complete a work in 12 days and B can complete the same work in 18 days. If they work together, in how many days will they complete the work?',
                'option_a' => '6.5 days',
                'option_b' => '7.2 days',
                'option_c' => '8 days',
                'option_d' => '9 days',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'If the price of a commodity increases by 25%, by what percentage should consumption be reduced so that the expenditure remains the same?',
                'option_a' => '20%',
                'option_b' => '25%',
                'option_c' => '30%',
                'option_d' => '33.33%',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A sum of money doubles itself in 10 years at simple interest. What is the rate of interest per annum?',
                'option_a' => '8%',
                'option_b' => '10%',
                'option_c' => '12%',
                'option_d' => '15%',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'The ratio of ages of A and B is 3:4. After 5 years, the ratio becomes 4:5. What is the present age of A?',
                'option_a' => '15 years',
                'option_b' => '18 years',
                'option_c' => '20 years',
                'option_d' => '24 years',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A train 150 meters long crosses a platform 300 meters long in 18 seconds. What is the speed of the train?',
                'option_a' => '90 km/hr',
                'option_b' => '85 km/hr',
                'option_c' => '80 km/hr',
                'option_d' => '75 km/hr',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If a man walks at 4 km/hr, he reaches his office 10 minutes late. If he walks at 6 km/hr, he reaches 5 minutes early. What is the distance to his office?',
                'option_a' => '3 km',
                'option_b' => '4 km',
                'option_c' => '5 km',
                'option_d' => '6 km',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'The compound interest on Rs. 8000 for 3 years at 10% per annum is?',
                'option_a' => 'Rs. 2648',
                'option_b' => 'Rs. 2400',
                'option_c' => 'Rs. 2680',
                'option_d' => 'Rs. 2800',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If 20 men can complete a work in 15 days, in how many days can 25 men complete the same work?',
                'option_a' => '10 days',
                'option_b' => '12 days',
                'option_c' => '15 days',
                'option_d' => '18 days',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A shopkeeper marks his goods 30% above cost price but allows a discount of 20%. His gain percent is?',
                'option_a' => '4%',
                'option_b' => '6%',
                'option_c' => '8%',
                'option_d' => '10%',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'The average of 5 numbers is 27. If one number is excluded, the average becomes 25. The excluded number is?',
                'option_a' => '35',
                'option_b' => '30',
                'option_c' => '25',
                'option_d' => '40',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A cistern can be filled by two pipes in 20 minutes and 30 minutes respectively. If both pipes are opened together, in how much time will the cistern be filled?',
                'option_a' => '10 minutes',
                'option_b' => '12 minutes',
                'option_c' => '15 minutes',
                'option_d' => '18 minutes',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'In an examination, 60% of candidates passed. If 320 candidates failed, how many candidates appeared for the examination?',
                'option_a' => '800',
                'option_b' => '750',
                'option_c' => '700',
                'option_d' => '650',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'The simple interest on a certain sum for 3 years at 8% per annum is Rs. 240. What is the principal amount?',
                'option_a' => 'Rs. 1000',
                'option_b' => 'Rs. 1200',
                'option_c' => 'Rs. 1500',
                'option_d' => 'Rs. 1800',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'If 6 men can complete a work in 8 days, how many men are required to complete the same work in 4 days?',
                'option_a' => '10 men',
                'option_b' => '12 men',
                'option_c' => '14 men',
                'option_d' => '16 men',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'A number when divided by 342 gives a remainder 47. What will be the remainder when the same number is divided by 18?',
                'option_a' => '11',
                'option_b' => '9',
                'option_c' => '7',
                'option_d' => '5',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'The ages of A and B are in the ratio 5:7. Four years later, their ages will be in the ratio 3:4. What is the present age of B?',
                'option_a' => '28 years',
                'option_b' => '32 years',
                'option_c' => '35 years',
                'option_d' => '40 years',
                'correct_answer' => 'a'
            ],
            [
                'question' => 'A car covers a distance of 450 km in 6 hours. What is its average speed?',
                'option_a' => '65 km/hr',
                'option_b' => '70 km/hr',
                'option_c' => '75 km/hr',
                'option_d' => '80 km/hr',
                'correct_answer' => 'c'
            ],
            [
                'question' => 'If the cost price of 25 articles is equal to the selling price of 20 articles, what is the profit percentage?',
                'option_a' => '20%',
                'option_b' => '25%',
                'option_c' => '30%',
                'option_d' => '35%',
                'correct_answer' => 'b'
            ],
            [
                'question' => 'The sum of three consecutive odd numbers is 75. What is the largest number?',
                'option_a' => '23',
                'option_b' => '25',
                'option_c' => '27',
                'option_d' => '29',
                'correct_answer' => 'c'
            ],
            [
                "question"=> "A sum of money is invested at a certain rate of compound interest compounded annually. After 2 years, it amounts to $1210, and after 3 years, it amounts to $1331. What is the principal amount?",
                "option_a"=> "$900",
                "option_b"=> "$1000",
                "option_c"=> "$1100",
                "option_d"=> "$1200",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A and B can complete a task in 12 days, B and C in 15 days, and A and C in 20 days. How many days will A take to complete the task alone?",
                "option_a"=> "24 days",
                "option_b"=> "30 days",
                "option_c"=> "36 days",
                "option_d"=> "48 days",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A shopkeeper marks an item at 60% above the cost price and offers two successive discounts of 20% and 25%. If the cost price is $500, what is the selling price?",
                "option_a"=> "$480",
                "option_b"=> "$510",
                "option_c"=> "$540",
                "option_d"=> "$600",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "A boat travels 48 km downstream in 4 hours and 24 km upstream in 3 hours. What is the speed of the boat in still water?",
                "option_a"=> "9 km/hr",
                "option_b"=> "10 km/hr",
                "option_c"=> "11 km/hr",
                "option_d"=> "12 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If 15% of a number is added to 20% of another number, the result is 95. If 20% of the first number is added to 15% of the second number, the result is 90. What is the first number?",
                "option_a"=> "200",
                "option_b"=> "250",
                "option_c"=> "300",
                "option_d"=> "350",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "The ages of A and B are in the ratio 5:7. Eight years ago, their ages were in the ratio 3:5. How old will A be after 5 years?",
                "option_a"=> "25 years",
                "option_b"=> "30 years",
                "option_c"=> "35 years",
                "option_d"=> "40 years",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A man buys 15 items at $20 each and sells them at a 25% profit on the total cost price. If he sells only 12 items, what is his overall profit percentage?",
                "option_a"=> "0%",
                "option_b"=> "5%",
                "option_c"=> "10%",
                "option_d"=> "15%",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "Two pipes A and B can fill a tank in 18 and 24 minutes, respectively. A third pipe C can empty the tank in 36 minutes. If all are opened together, how long will it take to fill the tank?",
                "option_a"=> "13.5 minutes",
                "option_b"=> "14.4 minutes",
                "option_c"=> "15.2 minutes",
                "option_d"=> "16 minutes",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A train travels 600 km at a uniform speed. If the speed had been 10 km/hr less, it would have taken 2 hours more. What is the original speed of the train?",
                "option_a"=> "50 km/hr",
                "option_b"=> "60 km/hr",
                "option_c"=> "70 km/hr",
                "option_d"=> "80 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If a sum of money triples in 12 years at simple interest, in how many years will it become five times itself?",
                "option_a"=> "18 years",
                "option_b"=> "20 years",
                "option_c"=> "24 years",
                "option_d"=> "30 years",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A invests $10000 at 6% per annum compound interest, and B invests $12000 at 5% per annum simple interest. After how many years will A’s amount exceed B’s amount?",
                "option_a"=> "2 years",
                "option_b"=> "3 years",
                "option_c"=> "4 years",
                "option_d"=> "5 years",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If 8 workers can build a wall in 15 days, how many workers are needed to build the same wall in 10 days, assuming 2 workers are replaced by machines that work twice as efficiently?",
                "option_a"=> "9",
                "option_b"=> "10",
                "option_c"=> "11",
                "option_d"=> "12",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A train crosses a platform 240 meters long in 24 seconds and a pole in 10 seconds. What is the speed of the train in km/hr?",
                "option_a"=> "54 km/hr",
                "option_b"=> "60 km/hr",
                "option_c"=> "72 km/hr",
                "option_d"=> "80 km/hr",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "The ratio of two numbers is 7:9, and their difference is 24. What is the product of the two numbers?",
                "option_a"=> "1512",
                "option_b"=> "1728",
                "option_c"=> "1944",
                "option_d"=> "2160",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A shopkeeper sells an item at a 20% profit after offering a 15% discount on the marked price. If the marked price is $400, what is the cost price?",
                "option_a"=> "$260",
                "option_b"=> "$272",
                "option_c"=> "$280",
                "option_d"=> "$289",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A car travels 500 km at a certain speed. If it had traveled 10 km/hr faster, it would have taken 1 hour less. What is the original speed?",
                "option_a"=> "40 km/hr",
                "option_b"=> "50 km/hr",
                "option_c"=> "60 km/hr",
                "option_d"=> "70 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A sum of $8000 amounts to $10648 in 3 years at compound interest compounded annually. What is the rate of interest per annum?",
                "option_a"=> "8%",
                "option_b"=> "10%",
                "option_c"=> "12%",
                "option_d"=> "15%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A can do a work in 24 days, B in 36 days, and C in 48 days. A and B work for 6 days, then B leaves, and C joins. How many more days to complete the work?",
                "option_a"=> "12 days",
                "option_b"=> "14 days",
                "option_c"=> "16 days",
                "option_d"=> "18 days",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If 30% of a number added to 25% of another number equals 145, and 25% of the first number added to 30% of the second equals 140, what is the sum of the two numbers?",
                "option_a"=> "400",
                "option_b"=> "450",
                "option_c"=> "500",
                "option_d"=> "550",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A boat travels 60 km downstream in 5 hours and 40 km upstream in 5 hours. What is the speed of the stream?",
                "option_a"=> "1 km/hr",
                "option_b"=> "2 km/hr",
                "option_c"=> "3 km/hr",
                "option_d"=> "4 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ages of A, B, and C are in the ratio 2:3:5. Ten years ago, their ages were in the ratio 1:2:4. What is the present age of C?",
                "option_a"=> "30 years",
                "option_b"=> "40 years",
                "option_c"=> "50 years",
                "option_d"=> "60 years",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A shopkeeper sells an item at a 10% loss but uses a weight of 900 grams instead of 1000 grams. What is the effective profit or loss percentage?",
                "option_a"=> "0%",
                "option_b"=> "2% profit",
                "option_c"=> "2% loss",
                "option_d"=> "5% profit",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Two pipes A and B can fill a tank in 20 and 30 minutes, respectively. After the tank is half full, a third pipe C, which empties the tank in 40 minutes, is opened. How long will it take to fill the tank from the start?",
                "option_a"=> "15 minutes",
                "option_b"=> "16 minutes",
                "option_c"=> "17.5 minutes",
                "option_d"=> "18 minutes",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A man invests $15000 at 8% per annum compound interest. After 2 years, he withdraws $5000 and invests the remaining at 10% per annum compound interest for 1 more year. What is the final amount?",
                "option_a"=> "$14928",
                "option_b"=> "$15228",
                "option_c"=> "$15528",
                "option_d"=> "$15828",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If 12 workers can complete a job in 20 days, and after 8 days, 4 workers leave while 2 machines (each as efficient as 3 workers) join, how many days will the entire job take?",
                "option_a"=> "15 days",
                "option_b"=> "16 days",
                "option_c"=> "17 days",
                "option_d"=> "18 days",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "In a certain code, if SHADOW is coded as TJHLTK, how is MIRROR coded?",
                "option_a"=> "NJSURU",
                "option_b"=> "NKTVSU",
                "option_c"=> "NJTVSV",
                "option_d"=> "NKSVSU",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If all roses are flowers, some flowers are red, and no red flowers are tulips, which of the following must be true?",
                "option_a"=> "No roses are tulips",
                "option_b"=> "Some roses are red",
                "option_c"=> "No tulips are roses",
                "option_d"=> "None of the above",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Five people A, B, C, D, and E are seated in a row. A is to the left of B but not next to C. D is to the right of C, and E is not at either end. If B is not next to D, who is second from the left?",
                "option_a"=> "A",
                "option_b"=> "B",
                "option_c"=> "C",
                "option_d"=> "D",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "In a sequence, each term is obtained by multiplying the previous term by 2 and subtracting 3. If the first term is 5, what is the 5th term?",
                "option_a"=> "149",
                "option_b"=> "151",
                "option_c"=> "153",
                "option_d"=> "155",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Pointing to a man, Sarah says, 'He is the brother of my father’s only child.' How is Sarah related to the man?",
                "option_a"=> "Sister",
                "option_b"=> "Daughter",
                "option_c"=> "Mother",
                "option_d"=> "Wife",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "If the day after tomorrow is Thursday, and 150 days from today is a Monday, what day was it 100 days ago?",
                "option_a"=> "Monday",
                "option_b"=> "Tuesday",
                "option_c"=> "Wednesday",
                "option_d"=> "Thursday",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "In a certain code, if CRICKET is written as DSJHDFU, how is FOOTBALL written?",
                "option_a"=> "GPNUBMM",
                "option_b"=> "HPQACMM",
                "option_c"=> "GPNVCMM",
                "option_d"=> "HPQVDMM",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If some birds are eagles, all eagles are predators, and no predators are pets, which of the following must be true?",
                "option_a"=> "No birds are pets",
                "option_b"=> "Some birds are not pets",
                "option_c"=> "No eagles are pets",
                "option_d"=> "Some pets are birds",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Six people P, Q, R, S, T, and U are seated around a circular table. P is opposite Q, R is next to S, and T is not next to P. If U is to the left of Q, who is opposite T?",
                "option_a"=> "P",
                "option_b"=> "Q",
                "option_c"=> "R",
                "option_d"=> "S",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "In a sequence, the nth term is defined as 3n^2 - 2n + 1. What is the difference between the 5th and 3rd terms?",
                "option_a"=> "28",
                "option_b"=> "30",
                "option_c"=> "32",
                "option_d"=> "34",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If A is the mother of B, C is the brother of D, and D is the daughter of E, how is E related to B?",
                "option_a"=> "Father",
                "option_b"=> "Mother",
                "option_c"=> "Sister",
                "option_d"=> "Brother",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "In a certain code, if MONDAY is coded as NPOEZB, how is FRIDAY coded?",
                "option_a"=> "GSJHLTK",
                "option_b"=> "HSJEZK",
                "option_c"=> "GSJEZK",
                "option_d"=> "HSJHLTK",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If all managers are employees, some employees are engineers, and no engineers are trainees, which of the following must be true?",
                "option_a"=> "No managers are trainees",
                "option_b"=> "Some managers are engineers",
                "option_c"=> "No engineers are managers",
                "option_d"=> "None of the above",
                "correct_answer"=> "d"
            ],
            [
                "question"=> "Five books A, B, C, D, and E are arranged on a shelf. A is to the left of B, C is to the right of D, and E is not next to A. If B is not next to C, which book is in the middle?",
                "option_a"=> "A",
                "option_b"=> "B",
                "option_c"=> "C",
                "option_d"=> "D",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "In a sequence, each term is obtained by adding 4 to the previous term and then dividing by 2. If the first term is 10, what is the 4th term?",
                "option_a"=> "7",
                "option_b"=> "8",
                "option_c"=> "9",
                "option_d"=> "10",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If P is the father of Q, and R is the sister of S, who is the son of P, how is R related to Q?",
                "option_a"=> "Sister",
                "option_b"=> "Mother",
                "option_c"=> "Daughter",
                "option_d"=> "Wife",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "In a certain code, if TABLE is written as VCFQK, how is CHAIR written?",
                "option_a"=> "EIBTK",
                "option_b"=> "FJHLTK",
                "option_c"=> "EICUS",
                "option_d"=> "FJHLTK",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If no cats are dogs, some dogs are pets, and all pets are animals, which of the following must be true?",
                "option_a"=> "Some cats are animals",
                "option_b"=> "No cats are pets",
                "option_c"=> "Some dogs are animals",
                "option_d"=> "No pets are cats",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Seven people A, B, C, D, E, F, and G are standing in a row. A is to the left of B, C is next to D, and E is not at either end. If F is to the right of G and B is not next to C, who is in the middle?",
                "option_a"=> "B",
                "option_b"=> "C",
                "option_c"=> "D",
                "option_d"=> "E",
                "correct_answer"=> "d"
            ],
            [
                "question"=> "In a sequence, the nth term is defined as 2^n + n^2. What is the 4th term?",
                "option_a"=> "20",
                "option_b"=> "22",
                "option_c"=> "24",
                "option_d"=> "26",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If today is Tuesday, and 200 days from now is a Monday, what day was it 50 days ago?",
                "option_a"=> "Monday",
                "option_b"=> "Tuesday",
                "option_c"=> "Wednesday",
                "option_d"=> "Thursday",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "In a certain code, if PENCIL is coded as RJHLTK, how is ERASER coded?",
                "option_a"=> "GTFUFS",
                "option_b"=> "HSGUFT",
                "option_c"=> "GTFVFT",
                "option_d"=> "HSHVGU",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "If all apples are fruits, some fruits are red, and no red fruits are bananas, which of the following must be true?",
                "option_a"=> "No apples are bananas",
                "option_b"=> "Some apples are red",
                "option_c"=> "No bananas are apples",
                "option_d"=> "None of the above",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Six people P, Q, R, S, T, and U are seated in a row. P is to the left of Q, R is to the right of S, and T is not next to U. If Q is not next to R, who is second from the right?",
                "option_a"=> "Q",
                "option_b"=> "R",
                "option_c"=> "S",
                "option_d"=> "T",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "In a sequence, each term is obtained by multiplying the previous term by 3 and subtracting 5. If the first term is 4, what is the 5th term?",
                "option_a"=> "292",
                "option_b"=> "295",
                "option_c"=> "298",
                "option_d"=> "301",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Choose the word that is most similar in meaning to 'Ephemeral':",
                "option_a"=> "Permanent",
                "option_b"=> "Transient",
                "option_c"=> "Enduring",
                "option_d"=> "Stable",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Complete the sentence: Despite the ______ evidence, the jury remained unconvinced of the defendant's guilt.",
                "option_a"=> "incontrovertible",
                "option_b"=> "ambiguous",
                "option_c"=> "insignificant",
                "option_d"=> "irrelevant",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "Choose the word that is opposite in meaning to 'Obstreperous':",
                "option_a"=> "Noisy",
                "option_b"=> "Calm",
                "option_c"=> "Boisterous",
                "option_d"=> "Defiant",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Which word does not belong in the group: Perspicuous, Lucid, Coherent, Arcane?",
                "option_a"=> "Perspicuous",
                "option_b"=> "Lucid",
                "option_c"=> "Coherent",
                "option_d"=> "Arcane",
                "correct_answer"=> "d"
            ],
            [
                "question"=> "Identify the error in the sentence: The committee have decided to postpone the meeting until further notice.",
                "option_a"=> "committee have",
                "option_b"=> "decided to",
                "option_c"=> "until further notice",
                "option_d"=> "No error",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "Complete the analogy: Eloquent is to speech as deft is to ______.",
                "option_a"=> "writing",
                "option_b"=> "movement",
                "option_c"=> "thought",
                "option_d"=> "vision",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Choose the word that best completes the sentence: His ______ demeanor alienated his colleagues.",
                "option_a"=> "affable",
                "option_b"=> "abrasive",
                "option_c"=> "cordial",
                "option_d"=> "amiable",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Which word is closest in meaning to 'Fastidious':",
                "option_a"=> "Careless",
                "option_b"=> "Meticulous",
                "option_c"=> "Indifferent",
                "option_d"=> "Hasty",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Choose the correctly spelled word:",
                "option_a"=> "Privelege",
                "option_b"=> "Priviledge",
                "option_c"=> "Privilege",
                "option_d"=> "Privilage",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Complete the sentence: The proposal was rejected due to its ______ assumptions.",
                "option_a"=> "plausible",
                "option_b"=> "fallacious",
                "option_c"=> "credible",
                "option_d"=> "rational",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Choose the word that is opposite in meaning to 'Prodigal':",
                "option_a"=> "Wasteful",
                "option_b"=> "Extravagant",
                "option_c"=> "Thrifty",
                "option_d"=> "Lavish",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Which word does not belong in the group: Altruistic, Benevolent, Magnanimous, Avaricious?",
                "option_a"=> "Altruistic",
                "option_b"=> "Benevolent",
                "option_c"=> "Magnanimous",
                "option_d"=> "Avaricious",
                "correct_answer"=> "d"
            ],
            [
                "question"=> "Choose the word that is most similar in meaning to 'Mitigate':",
                "option_a"=> "Exacerbate",
                "option_b"=> "Alleviate",
                "option_c"=> "Aggravate",
                "option_d"=> "Intensify",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Complete the analogy: Audacious is to boldness as sagacious is to ______.",
                "option_a"=> "wisdom",
                "option_b"=> "courage",
                "option_c"=> "caution",
                "option_d"=> "recklessness",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "Choose the correctly spelled word:",
                "option_a"=> "Connoisseur",
                "option_b"=> "Connoiseur",
                "option_c"=> "Connoissur",
                "option_d"=> "Connoissuer",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "Which word is closest in meaning to 'Nebulous':",
                "option_a"=> "Clear",
                "option_b"=> "Vague",
                "option_c"=> "Distinct",
                "option_d"=> "Precise",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Complete the sentence: Her ______ approach to problem-solving impressed the panel.",
                "option_a"=> "haphazard",
                "option_b"=> "methodical",
                "option_c"=> "erratic",
                "option_d"=> "impulsive",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Choose the word that is opposite in meaning to 'Ebullient':",
                "option_a"=> "Enthusiastic",
                "option_b"=> "Subdued",
                "option_c"=> "Vivacious",
                "option_d"=> "Exuberant",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Which word does not belong in the group: Erudite, Scholarly, Ignorant, Learned?",
                "option_a"=> "Erudite",
                "option_b"=> "Scholarly",
                "option_c"=> "Ignorant",
                "option_d"=> "Learned",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Choose the word that best completes the sentence: The ______ nature of the evidence led to a swift conviction.",
                "option_a"=> "inconclusive",
                "option_b"=> "compelling",
                "option_c"=> "ambiguous",
                "option_d"=> "tenuous",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "You discover a critical error in a project that has already been presented to a client, and correcting it would delay delivery. What should you do?",
                "option_a"=> "Correct the error secretly and deliver on time",
                "option_b"=> "Inform the client and your team, proposing a revised timeline",
                "option_c"=> "Ignore the error to meet the deadline",
                "option_d"=> "Blame the error on a technical issue",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A team member repeatedly misses deadlines, impacting the project. You are the team lead. What is the best course of action?",
                "option_a"=> "Reassign their tasks to others",
                "option_b"=> "Discuss their performance privately and offer support",
                "option_c"=> "Publicly reprimand them to set an example",
                "option_d"=> "Report them to upper management immediately",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "You are assigned a high-priority task but lack the necessary expertise. Your manager is unavailable. What should you do?",
                "option_a"=> "Attempt the task to the best of your ability",
                "option_b"=> "Seek assistance from a qualified colleague or external resource",
                "option_c"=> "Postpone the task until the manager returns",
                "option_d"=> "Delegate the task to a junior team member",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "During a meeting, two colleagues have a heated disagreement, disrupting progress. As a team member, what should you do?",
                "option_a"=> "Take sides to resolve the conflict quickly",
                "option_b"=> "Mediate by encouraging calm discussion and refocusing on the agenda",
                "option_c"=> "Remain silent and let them resolve it",
                "option_d"=> "Report the incident to the manager",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "You suspect a colleague is falsifying data to meet project targets. What is the best course of action?",
                "option_a"=> "Confront them publicly to deter others",
                "option_b"=> "Gather evidence and discuss privately with them or a supervisor",
                "option_c"=> "Ignore it unless it directly affects your work",
                "option_d"=> "Report them anonymously to management",
                "correct_answer"=> "b"
            ],
                [
                "question"=> "If a person walks at 14 km/hr instead of 10 km/hr, he would have walked 20 km more in the same time. What is the actual distance he walked?",
                "option_a"=> "50 km",
                "option_b"=> "60 km",
                "option_c"=> "70 km",
                "option_d"=> "80 km",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A sum of money doubles itself in 8 years at simple interest. In how many years will it triple itself?",
                "option_a"=> "12 years",
                "option_b"=> "16 years",
                "option_c"=> "24 years",
                "option_d"=> "20 years",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ratio of the ages of A and B is 3:5. After 6 years, their ages will be in the ratio 5:7. What is the present age of A?",
                "option_a"=> "12 years",
                "option_b"=> "15 years",
                "option_c"=> "18 years",
                "option_d"=> "21 years",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A shopkeeper sells an item at a 20% discount but still makes a 25% profit. If the marked price is $100, what is the cost price?",
                "option_a"=> "$60",
                "option_b"=> "$64",
                "option_c"=> "$80",
                "option_d"=> "$75",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A and B can complete a work in 12 days working together. A alone can do it in 20 days. How many days will B take to complete the work alone?",
                "option_a"=> "30 days",
                "option_b"=> "24 days",
                "option_c"=> "28 days",
                "option_d"=> "32 days",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A train travels 360 km at a uniform speed. If the speed had been 5 km/hr more, it would have taken 1 hour less. What is the speed of the train?",
                "option_a"=> "40 km/hr",
                "option_b"=> "45 km/hr",
                "option_c"=> "50 km/hr",
                "option_d"=> "55 km/hr",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "If 20% of a number is 50, what is 75% of that number?",
                "option_a"=> "150",
                "option_b"=> "175",
                "option_c"=> "187.5",
                "option_d"=> "200",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A man buys 10 pens for $120 and sells 8 pens for $120. What is his profit percentage?",
                "option_a"=> "20%",
                "option_b"=> "25%",
                "option_c"=> "33.33%",
                "option_d"=> "50%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Two pipes A and B can fill a tank in 20 and 30 minutes, respectively. If both are opened together, how long will it take to fill the tank?",
                "option_a"=> "12 minutes",
                "option_b"=> "15 minutes",
                "option_c"=> "18 minutes",
                "option_d"=> "24 minutes",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "The cost price of an article is $200. If it is sold at a 10% loss, what is the selling price?",
                "option_a"=> "$180",
                "option_b"=> "$190",
                "option_c"=> "$200",
                "option_d"=> "$220",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "A car travels 240 km in 4 hours. What is its speed in km/hr?",
                "option_a"=> "50 km/hr",
                "option_b"=> "60 km/hr",
                "option_c"=> "70 km/hr",
                "option_d"=> "80 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If 5 men can do a work in 20 days, how many days will 10 men take to complete the same work?",
                "option_a"=> "8 days",
                "option_b"=> "10 days",
                "option_c"=> "12 days",
                "option_d"=> "15 days",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A sum of $5000 amounts to $6200 in 3 years at simple interest. What is the rate of interest?",
                "option_a"=> "6%",
                "option_b"=> "8%",
                "option_c"=> "10%",
                "option_d"=> "12%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ratio of two numbers is 4:5. If their sum is 180, what is the smaller number?",
                "option_a"=> "80",
                "option_b"=> "90",
                "option_c"=> "100",
                "option_d"=> "110",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "A shopkeeper marks an item 25% above the cost price and gives a 10% discount. If the cost price is $200, what is the selling price?",
                "option_a"=> "$200",
                "option_b"=> "$225",
                "option_c"=> "$250",
                "option_d"=> "$275",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A and B together can complete a task in 8 days, while B and C together can do it in 12 days. If A, B, and C together can do it in 6 days, how long will C take alone?",
                "option_a"=> "18 days",
                "option_b"=> "24 days",
                "option_c"=> "30 days",
                "option_d"=> "36 days",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A boat travels 18 km downstream in 2 hours. If the speed of the stream is 3 km/hr, what is the speed of the boat in still water?",
                "option_a"=> "6 km/hr",
                "option_b"=> "7 km/hr",
                "option_c"=> "8 km/hr",
                "option_d"=> "9 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If the price of an item increases by 25%, by what percentage should it be decreased to restore the original price?",
                "option_a"=> "15%",
                "option_b"=> "20%",
                "option_c"=> "25%",
                "option_d"=> "30%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A man invests $10000 at 5% per annum compound interest. What will be the amount after 2 years?",
                "option_a"=> "$11000",
                "option_b"=> "$11025",
                "option_c"=> "$11250",
                "option_d"=> "$11500",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If 3 workers can complete a job in 15 days, how many workers are needed to complete it in 9 days?",
                "option_a"=> "4",
                "option_b"=> "5",
                "option_c"=> "6",
                "option_d"=> "7",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A train crosses a pole in 12 seconds at a speed of 54 km/hr. What is the length of the train?",
                "option_a"=> "150 m",
                "option_b"=> "180 m",
                "option_c"=> "200 m",
                "option_d"=> "240 m",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A sum of money becomes $1331 in 3 years at 10% per annum compound interest. What is the principal amount?",
                "option_a"=> "$900",
                "option_b"=> "$1000",
                "option_c"=> "$1100",
                "option_d"=> "$1200",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ages of A and B are in the ratio 2:3. After 8 years, their ages will be in the ratio 3:4. What is the present age of B?",
                "option_a"=> "12 years",
                "option_b"=> "15 years",
                "option_c"=> "18 years",
                "option_d"=> "21 years",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A shopkeeper sells an article at a 15% profit. If the cost price is $200, what is the selling price?",
                "option_a"=> "$220",
                "option_b"=> "$230",
                "option_c"=> "$240",
                "option_d"=> "$250",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Two pipes A and B can fill a tank in 15 and 20 minutes, respectively. If both are opened together, how long will it take to fill the tank?",
                "option_a"=> "8 minutes",
                "option_b"=> "9 minutes",
                "option_c"=> "10 minutes",
                "option_d"=> "12 minutes",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A car travels 300 km in 5 hours. What is its speed in km/hr?",
                "option_a"=> "50 km/hr",
                "option_b"=> "60 km/hr",
                "option_c"=> "70 km/hr",
                "option_d"=> "80 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If 25% of a number is 75, what is the number?",
                "option_a"=> "200",
                "option_b"=> "250",
                "option_c"=> "300",
                "option_d"=> "350",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A man can complete a work in 30 days. After working for 10 days, he is joined by another man, and they complete the work in 15 more days. How many days would the second man take to complete the work alone?",
                "option_a"=> "36 days",
                "option_b"=> "40 days",
                "option_c"=> "45 days",
                "option_d"=> "50 days",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A sum of $4000 amounts to $4800 in 4 years at simple interest. What is the rate of interest?",
                "option_a"=> "4%",
                "option_b"=> "5%",
                "option_c"=> "6%",
                "option_d"=> "7%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ratio of two numbers is 3:4. If their difference is 20, what is the larger number?",
                "option_a"=> "60",
                "option_b"=> "80",
                "option_c"=> "100",
                "option_d"=> "120",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A shopkeeper buys an item for $150 and sells it for $180. What is the profit percentage?",
                "option_a"=> "15%",
                "option_b"=> "20%",
                "option_c"=> "25%",
                "option_d"=> "30%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A boat travels 24 km upstream in 6 hours. If the speed of the stream is 2 km/hr, what is the speed of the boat in still water?",
                "option_a"=> "5 km/hr",
                "option_b"=> "6 km/hr",
                "option_c"=> "7 km/hr",
                "option_d"=> "8 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A man invests $2000 at 4% per annum compound interest. What will be the amount after 2 years?",
                "option_a"=> "$2160",
                "option_b"=> "$2163.2",
                "option_c"=> "$2180",
                "option_d"=> "$2200",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ratio of the ages of A and B is 5:7. If B is 28 years old, what is the age of A?",
                "option_a"=> "15 years",
                "option_b"=> "20 years",
                "option_c"=> "25 years",
                "option_d"=> "30 years",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A shopkeeper sells an item at a 10% discount on the marked price and earns a 20% profit. If the marked price is $100, what is the cost price?",
                "option_a"=> "$70",
                "option_b"=> "$75",
                "option_c"=> "$80",
                "option_d"=> "$85",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A and B can do a work in 10 days together. If A alone can do it in 15 days, how long will B take to complete it alone?",
                "option_a"=> "20 days",
                "option_b"=> "25 days",
                "option_c"=> "30 days",
                "option_d"=> "35 days",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A train travels 400 km at a uniform speed. If the speed had been 10 km/hr more, it would have taken 2 hours less. What is the speed of the train?",
                "option_a"=> "50 km/hr",
                "option_b"=> "60 km/hr",
                "option_c"=> "70 km/hr",
                "option_d"=> "80 km/hr",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "If 40% of a number is 120, what is 60% of that number?",
                "option_a"=> "150",
                "option_b"=> "180",
                "option_c"=> "200",
                "option_d"=> "240",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A man buys 12 books for $240 and sells 10 books for $250. What is his profit percentage?",
                "option_a"=> "20%",
                "option_b"=> "25%",
                "option_c"=> "30%",
                "option_d"=> "35%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "Two pipes A and B can fill a tank in 12 and 18 minutes, respectively. If both are opened together, how long will it take to fill the tank?",
                "option_a"=> "6 minutes",
                "option_b"=> "7.2 minutes",
                "option_c"=> "8 minutes",
                "option_d"=> "9 minutes",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A shopkeeper sells an article at a 20% loss. If the selling price is $160, what is the cost price?",
                "option_a"=> "$180",
                "option_b"=> "$190",
                "option_c"=> "$200",
                "option_d"=> "$210",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A car travels 180 km in 3 hours. What is its speed in km/hr?",
                "option_a"=> "50 km/hr",
                "option_b"=> "60 km/hr",
                "option_c"=> "70 km/hr",
                "option_d"=> "80 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If 8 workers can complete a job in 24 days, how many days will 12 workers take to complete the same job?",
                "option_a"=> "12 days",
                "option_b"=> "16 days",
                "option_c"=> "18 days",
                "option_d"=> "20 days",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A sum of $6000 amounts to $7200 in 5 years at simple interest. What is the rate of interest?",
                "option_a"=> "4%",
                "option_b"=> "5%",
                "option_c"=> "6%",
                "option_d"=> "7%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ratio of two numbers is 5:6. If their sum is 220, what is the larger number?",
                "option_a"=> "100",
                "option_b"=> "110",
                "option_c"=> "120",
                "option_d"=> "130",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A shopkeeper marks an item 40% above the cost price and gives a 15% discount. If the cost price is $100, what is the selling price?",
                "option_a"=> "$110",
                "option_b"=> "$119",
                "option_c"=> "$125",
                "option_d"=> "$130",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A and B together can complete a task in 15 days, while B and C together can do it in 20 days. If A, B, and C together can do it in 10 days, how long will C take alone?",
                "option_a"=> "30 days",
                "option_b"=> "40 days",
                "option_c"=> "50 days",
                "option_d"=> "60 days",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A boat travels 20 km downstream in 2 hours. If the speed of the stream is 2 km/hr, what is the speed of the boat in still water?",
                "option_a"=> "6 km/hr",
                "option_b"=> "8 km/hr",
                "option_c"=> "10 km/hr",
                "option_d"=> "12 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If the price of an item increases by 20%, by what percentage should it be decreased to restore the original price?",
                "option_a"=> "15%",
                "option_b"=> "16.67%",
                "option_c"=> "20%",
                "option_d"=> "25%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A man invests $5000 at 6% per annum compound interest. What will be the amount after 3 years?",
                "option_a"=> "$5955",
                "option_b"=> "$5970",
                "option_c"=> "$5980",
                "option_d"=> "$6000",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If 6 workers can complete a job in 18 days, how many workers are needed to complete it in 12 days?",
                "option_a"=> "8",
                "option_b"=> "9",
                "option_c"=> "10",
                "option_d"=> "12",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A train crosses a pole in 10 seconds at a speed of 72 km/hr. What is the length of the train?",
                "option_a"=> "180 m",
                "option_b"=> "200 m",
                "option_c"=> "220 m",
                "option_d"=> "240 m",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A sum of money becomes $1464 in 2 years at 8% per annum compound interest. What is the principal amount?",
                "option_a"=> "$1200",
                "option_b"=> "$1250",
                "option_c"=> "$1300",
                "option_d"=> "$1350",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ages of A and B are in the ratio 3:4. After 5 years, their ages will be in the ratio 4:5. What is the present age of A?",
                "option_a"=> "12 years",
                "option_b"=> "15 years",
                "option_c"=> "18 years",
                "option_d"=> "21 years",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A shopkeeper sells an article at a 25% profit. If the cost price is $400, what is the selling price?",
                "option_a"=> "$450",
                "option_b"=> "$475",
                "option_c"=> "$500",
                "option_d"=> "$525",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Two pipes A and B can fill a tank in 10 and 15 minutes, respectively. If both are opened together, how long will it take to fill the tank?",
                "option_a"=> "5 minutes",
                "option_b"=> "6 minutes",
                "option_c"=> "7 minutes",
                "option_d"=> "8 minutes",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A car travels 450 km in 6 hours. What is its speed in km/hr?",
                "option_a"=> "60 km/hr",
                "option_b"=> "65 km/hr",
                "option_c"=> "70 km/hr",
                "option_d"=> "75 km/hr",
                "correct_answer"=> "d"
            ],
            [
                "question"=> "If 30% of a number is 90, what is the number?",
                "option_a"=> "270",
                "option_b"=> "300",
                "option_c"=> "330",
                "option_d"=> "360",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A man can complete a work in 24 days. After working for 8 days, he is joined by another man, and they complete the work in 12 more days. How many days would the second man take to complete the work alone?",
                "option_a"=> "24 days",
                "option_b"=> "30 days",
                "option_c"=> "36 days",
                "option_d"=> "40 days",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A sum of $8000 amounts to $9600 in 5 years at simple interest. What is the rate of interest?",
                "option_a"=> "3%",
                "option_b"=> "4%",
                "option_c"=> "5%",
                "option_d"=> "6%",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "The ratio of two numbers is 7:8. If their difference is 10, what is the smaller number?",
                "option_a"=> "60",
                "option_b"=> "70",
                "option_c"=> "80",
                "option_d"=> "90",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A shopkeeper buys an item for $300 and sells it for $375. What is the profit percentage?",
                "option_a"=> "20%",
                "option_b"=> "25%",
                "option_c"=> "30%",
                "option_d"=> "35%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A boat travels 30 km upstream in 5 hours. If the speed of the stream is 3 km/hr, what is the speed of the boat in still water?",
                "option_a"=> "8 km/hr",
                "option_b"=> "9 km/hr",
                "option_c"=> "10 km/hr",
                "option_d"=> "11 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If the price of an item increases by 50%, by what percentage should it be decreased to restore the original price?",
                "option_a"=> "25%",
                "option_b"=> "33.33%",
                "option_c"=> "40%",
                "option_d"=> "50%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A man invests $10000 at 7% per annum compound interest. What will be the amount after 2 years?",
                "option_a"=> "$11449",
                "option_b"=> "$11500",
                "option_c"=> "$11600",
                "option_d"=> "$11700",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "If 10 workers can complete a job in 15 days, how many workers are needed to complete it in 10 days?",
                "option_a"=> "12",
                "option_b"=> "15",
                "option_c"=> "18",
                "option_d"=> "20",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A train crosses a pole in 8 seconds at a speed of 90 km/hr. What is the length of the train?",
                "option_a"=> "180 m",
                "option_b"=> "200 m",
                "option_c"=> "240 m",
                "option_d"=> "300 m",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A sum of money becomes $1728 in 3 years at 10% per annum compound interest. What is the principal amount?",
                "option_a"=> "$1200",
                "option_b"=> "$1300",
                "option_c"=> "$1400",
                "option_d"=> "$1500",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ages of A and B are in the ratio 4:5. After 6 years, their ages will be in the ratio 5:6. What is the present age of B?",
                "option_a"=> "20 years",
                "option_b"=> "25 years",
                "option_c"=> "30 years",
                "option_d"=> "35 years",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A shopkeeper sells an article at a 30% profit. If the cost price is $500, what is the selling price?",
                "option_a"=> "$600",
                "option_b"=> "$650",
                "option_c"=> "$700",
                "option_d"=> "$750",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Two pipes A and B can fill a tank in 8 and 12 minutes, respectively. If both are opened together, how long will it take to fill the tank?",
                "option_a"=> "4.8 minutes",
                "option_b"=> "5 minutes",
                "option_c"=> "6 minutes",
                "option_d"=> "7 minutes",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "A car travels 600 km in 8 hours. What is its speed in km/hr?",
                "option_a"=> "70 km/hr",
                "option_b"=> "75 km/hr",
                "option_c"=> "80 km/hr",
                "option_d"=> "85 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If 35% of a number is 105, what is the number?",
                "option_a"=> "280",
                "option_b"=> "300",
                "option_c"=> "320",
                "option_d"=> "350",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A man can complete a work in 20 days. After working for 5 days, he is joined by another man, and they complete the work in 10 more days. How many days would the second man take to complete the work alone?",
                "option_a"=> "20 days",
                "option_b"=> "25 days",
                "option_c"=> "30 days",
                "option_d"=> "35 days",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "A sum of $10000 amounts to $12100 in 4 years at simple interest. What is the rate of interest?",
                "option_a"=> "4%",
                "option_b"=> "5%",
                "option_c"=> "6%",
                "option_d"=> "7%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ratio of two numbers is 8:9. If their sum is 340, what is the smaller number?",
                "option_a"=> "160",
                "option_b"=> "180",
                "option_c"=> "200",
                "option_d"=> "220",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "A shopkeeper buys an item for $400 and sells it for $480. What is the profit percentage?",
                "option_a"=> "15%",
                "option_b"=> "20%",
                "option_c"=> "25%",
                "option_d"=> "30%",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A boat travels 28 km downstream in 2 hours. If the speed of the stream is 4 km/hr, what is the speed of the boat in still water?",
                "option_a"=> "8 km/hr",
                "option_b"=> "10 km/hr",
                "option_c"=> "12 km/hr",
                "option_d"=> "14 km/hr",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If the price of an item increases by 10%, by what percentage should it be decreased to restore the original price?",
                "option_a"=> "9.09%",
                "option_b"=> "10%",
                "option_c"=> "11%",
                "option_d"=> "12%",
                "correct_answer"=> "a"
            ],
            [
                "question"=> "A man invests $20000 at 8% per annum compound interest. What will be the amount after 2 years?",
                "option_a"=> "$23040",
                "option_b"=> "$23328",
                "option_c"=> "$23500",
                "option_d"=> "$24000",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "If 12 workers can complete a job in 10 days, how many workers are needed to complete it in 8 days?",
                "option_a"=> "14",
                "option_b"=> "15",
                "option_c"=> "16",
                "option_d"=> "18",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A train crosses a pole in 15 seconds at a speed of 60 km/hr. What is the length of the train?",
                "option_a"=> "200 m",
                "option_b"=> "250 m",
                "option_c"=> "300 m",
                "option_d"=> "350 m",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A sum of money becomes $2197 in 3 years at 12% per annum compound interest. What is the principal amount?",
                "option_a"=> "$1400",
                "option_b"=> "$1500",
                "option_c"=> "$1600",
                "option_d"=> "$1700",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "The ages of A and B are in the ratio 5:6. After 4 years, their ages will be in the ratio 6:7. What is the present age of A?",
                "option_a"=> "20 years",
                "option_b"=> "25 years",
                "option_c"=> "30 years",
                "option_d"=> "35 years",
                "correct_answer"=> "b"
            ],
            [
                "question"=> "A shopkeeper sells an article at a 10% loss. If the selling price is $270, what is the cost price?",
                "option_a"=> "$280",
                "option_b"=> "$290",
                "option_c"=> "$300",
                "option_d"=> "$310",
                "correct_answer"=> "c"
            ],
            [
                "question"=> "Two pipes A and B can fill a tank in 6 and 9 minutes, respectively. If both are opened together, how long will it take to fill the tank?",
                "option_a"=> "3.6 minutes",
                "option_b"=> "4 minutes",
                "option_c"=> "4.5 minutes",
                "option_d"=> "5 minutes",
                "correct_answer"=> "a"
            ]
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
