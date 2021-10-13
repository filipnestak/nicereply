@extends('master')

@section('content')
    {{--CES 7--}}
    {{--CSAT 10--}}
    <div class="container">
        <div class="row">
            <h2>Add rating</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="list-style: none; padding-left: 0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <i class="fa fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('ratings.store') }}">
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="survey_id" class="form-label">Choose survey</label>
                            <select name="survey_id" id="survey_id" class="form-control">
                                @if(!request()->input('survey_id'))
                                    <option value="" selected disabled>Choose survey</option>
                                @endif
                                @foreach($surveys as $survey)
                                    @if(request()->input('survey_id') == $survey->id)
                                        <option selected data-metric="{{ $survey->metric }}"
                                                value="{{ $survey->id }}">{{ $survey->name }}</option>
                                    @else
                                        <option data-metric="{{ $survey->metric }}"
                                                value="{{ $survey->id }}">{{ $survey->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="user" class="form-label">Choose user</label>
                            <select name="user" id="user" class="form-control">
                                <option value="" selected disabled>Choose user</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->fullname }}
                                        - {{ $user->username }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="score" class="form-label">Score</label>
                            <select name="score" id="score" class="form-control">

                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" name="comment" id="comment" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>

    </script>
@endsection
