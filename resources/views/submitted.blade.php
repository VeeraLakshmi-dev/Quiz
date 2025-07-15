@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="alert alert-danger text-center shadow p-5">
        <h2>⛔ Access Denied</h2>
        <p class="mt-3 fs-5 text-dark">
            Your quiz has already been submitted.
        </p>
        <p class="text-danger fw-semibold fs-6 mt-3">
            🔒 You are not allowed to log in or access the quiz again.
        </p>
        <p class="text-muted">If you believe this is an error, please contact the administrator.</p>
        <a href="/" class="btn btn-outline-primary mt-4">Return to Homepage</a>
    </div>
</div>
@endsection
