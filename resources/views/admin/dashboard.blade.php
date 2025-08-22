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
                        <th>College</th>
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
                            <td>
                                @if($user->colleges->count())
                                    @foreach($user->colleges as $college)
                                        {{ $college->college_name }}<br>
                                    @endforeach
                                @else
                                    <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>{{ $user->correct_answers ?? 0}}</td>
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
        let table = $('#quizTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: '📥 Export to Excel',
                    className: 'btn btn-success',
                    exportOptions: {
                        modifier: {
                            search: 'applied'
                        }
                    },
                    action: function (e, dt, button, config) {
                        if (confirm("Are you sure you want to export this data to Excel?")) {
                            $.fn.dataTable.ext.buttons.excelHtml5.action.call(this, e, dt, button, config);
                        }
                    }
                }
            ]
        });
    });
</script>
@endpush
