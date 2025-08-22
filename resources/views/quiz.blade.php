@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="mb-3">📝 Quiz</h2>

        <!-- Timer -->
        <div id="timer" class="alert alert-info text-center fs-5" style="font-size: 24px;font-weight: bold;letter-spacing: 1px;">
            Time Left: <span id="time">10:00:00</span>
        </div>

        <form id="quizForm" method="POST" action="{{ route('quiz.submit') }}">
            @csrf
            <input type="hidden" name="time_taken" id="time_taken_input">

            @foreach($questions as $index => $question)
                <div class="mb-4">
                    <h5>Q{{ $index + 1 }}. {{ $question->question }}</h5>
                    @foreach(['a', 'b', 'c', 'd'] as $opt)
                        @php $field = 'option_' . $opt; @endphp
                        <div class="form-check">
                            <input class="form-check-input" type="radio"
                                name="answers[{{ $question->id }}]"
                                value="{{ $opt }}"
                                id="q{{ $question->id }}_{{ $opt }}"
                                required>
                           <label class="form-check-label" for="q{{ $question->id }}_{{ $opt }}">
                                {{ strtoupper($opt) }}. {{ $question->$field }}
                            </label>
                        </div>
                    @endforeach
                </div>
            @endforeach

            <button type="submit" class="btn btn-success">Submit Quiz</button>
        </form>
    </div>
</div>
<script>
    const isReload = (
        performance.navigation.type === 1 ||
        performance.getEntriesByType("navigation")[0]?.type === "reload"
    );

    if (isReload) {
        localStorage.setItem('quiz_exited', '1');
        window.location.href = "{{ route('quiz.timeout') }}";
    }
</script>

<script>
    const TOTAL_TIME = 10 * 60; // 600 seconds (10 min)
    const STORAGE_KEY = 'quiz_start_time';
    let quizSubmitted = false;

    const timerDisplay = document.getElementById("time");
    const timeTakenInput = document.getElementById("time_taken_input");
    const form = document.getElementById("quizForm");

    // Get or set start time
    let startTime = localStorage.getItem(STORAGE_KEY);
    if (!startTime) {
        startTime = Date.now();
        localStorage.setItem(STORAGE_KEY, startTime);
    } else {
        startTime = parseInt(startTime);
    }

    function updateTimer() {
        const now = Date.now();
        const elapsed = now - startTime; // in ms
        let remaining = (TOTAL_TIME * 1000) - elapsed; // in ms

        if (remaining < 0) remaining = 0;

        const minutes = Math.floor(remaining / 60000);
        const seconds = Math.floor((remaining % 60000) / 1000);
        const milliseconds = Math.floor((remaining % 1000) / 10);

        timerDisplay.innerText =
            String(minutes).padStart(2, '0') + ':' +
            String(seconds).padStart(2, '0') + ':' +
            String(milliseconds).padStart(2, '0');

        if (remaining <= 0 && !quizSubmitted) {
            quizSubmitted = true;
            timeTakenInput.value = ''; // Send NULL
            localStorage.removeItem(STORAGE_KEY);
            form.submit();
        }
    }

    // Call every second
    const timerInterval = setInterval(updateTimer, 100);
    updateTimer();

    // Prevent accidental refresh exit
    window.addEventListener("beforeunload", function (e) {
        if (!quizSubmitted) {
            e.preventDefault();
            e.returnValue = '';
        }
    });

   form.addEventListener("submit", function () {
        quizSubmitted = true;
        clearInterval(timerInterval);

        const now = Date.now();
        const elapsed = now - startTime; // in ms

        if (elapsed >= TOTAL_TIME * 1000) {
            timeTakenInput.value = ''; // Send NULL
        } else {
            const takenMin = Math.floor(elapsed / 60000);
            const takenSec = Math.floor((elapsed % 60000) / 1000);
            const takenMs = Math.floor((elapsed % 1000) / 10); // 2-digit milliseconds

            timeTakenInput.value =
                String(takenMin).padStart(2, '0') + ':' +
                String(takenSec).padStart(2, '0') + ':' +
                String(takenMs).padStart(2, '0');
        }

        localStorage.removeItem(STORAGE_KEY);
    });

</script>

@endsection
