@extends('master')

@section('content')

    <div class="container">
        <h2>Survey - {{ $survey->name }}</h2>
        <a href="{{ route('ratings.create',['survey_id'=>$survey->id]) }}" class="btn btn-success">Add rating</a>
        <h4>List ratings</h4>
        @if(count($ratings) > 0)
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>From</th>
                        <th>Score</th>
                        <th>Comment</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ratings as $rating)
                        <tr>
                            <td>{{ $rating->id }}</td>
                            <td>{{ $rating->user->username }}</td>
                            <td>{{ $rating->from }}</td>
                            <td>{{ $rating->score }}</td>
                            <td>{{ $rating->comment }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info">No ratings</div>
        @endif
    </div>
@endsection
