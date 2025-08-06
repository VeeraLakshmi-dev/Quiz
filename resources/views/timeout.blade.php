@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="alert alert-success text-center shadow p-5">
        <h1>⏱️ Quiz Session Ended!</h1>
        <p class="fs-5 mt-3">
           You refreshed or navigated away. The quiz session has expired.
        </p>
        <p class="text-danger fw-semibold fs-6">
            🔒 Please note: You cannot log in or attempt the quiz again.
        </p>
    </div>
</div>
@endsection
