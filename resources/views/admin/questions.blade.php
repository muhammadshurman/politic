@extends('admin.dashboard')

@section('content')
<div class="container">
    <h2>Manage Quiz Questions</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('admin.questions.update') }}" method="POST">
        @csrf
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Question</th>
                    <th>Option 1 (Middle)</th>
                    <th>Option 2 (Right)</th>
                    <th>Option 3 (Left)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <input type="text" name="questions[{{ $question->id }}][question]" value="{{ $question->question }}" class="form-control" required>
                    </td>
                    <td>
                        <input type="text" name="questions[{{ $question->id }}][option1]" value="{{ $question->option1 }}" class="form-control" required>
                    </td>
                    <td>
                        <input type="text" name="questions[{{ $question->id }}][option2]" value="{{ $question->option2 }}" class="form-control" required>
                    </td>
                    <td>
                        <input type="text" name="questions[{{ $question->id }}][option3]" value="{{ $question->option3 }}" class="form-control" required>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection
