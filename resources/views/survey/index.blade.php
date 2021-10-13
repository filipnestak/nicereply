@extends('master')

@section('content')

    <div class="container">
        <h2>Surveys</h2>
        <a href="{{ route('ratings.create') }}" class="btn btn-success">Add rating</a>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Metric</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($surveys as $survey)
                    <tr>
                        <td>{{ $survey->id }}</td>
                        <td>{{ $survey->name }}</td>
                        <td>{{ $survey->metric }}</td>
                        <td>
                            <a href="{{ route('surveys.show',$survey->id) }}">view ratings</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
