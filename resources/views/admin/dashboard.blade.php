@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow">
       <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">🎓 Quiz Attended Users</h2>

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>

        @if($users->count())
            <table id="quizTable" class="table table-bordered table-hover table-striped mt-5">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th style="white-space: nowrap;">Mobile Number</th>
                        <th style="white-space: nowrap;">Total Correct Answers</th>
                        <th>Time Taken</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        @php
                            $submission = $user->quizSubmissions->first();
                        @endphp
                        <tr class="text-center">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobile_number }}</td>
                            <td>{{ $user->correct_answers }}</td>
                            <td>
                                @if($submission && $submission->time_taken)
                                    @php
                                        [$min, $sec, $ms] = explode(':', $submission->time_taken);
                                    @endphp
                                    {{ $min }} min {{ $sec }} sec {{ $ms }} ms
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                @if($submission && $submission->submitted_at)
                                    {{ \Carbon\Carbon::parse($submission->submitted_at)->format('d-m-Y h:i:s A') }}
                                @else
                                    N/A
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-muted">No users have attempted the quiz yet.</p>
        @endif
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('#quizTable').DataTable();
    });
</script>
@endpush
