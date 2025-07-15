@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="alert alert-success text-center shadow p-5">
        <h1>🎉 Quiz Submitted Successfully!</h1>
        <p class="fs-5 mt-3">
            Thank you for participating. Your responses have been recorded.
        </p>
        <p class="text-danger fw-semibold fs-6">
            🔒 Please note: You cannot log in or attempt the quiz again.
        </p>
        <a href="/" class="btn btn-success mt-4">Go to Homepage</a>
    </div>
</div>
@endsection
