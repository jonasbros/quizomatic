@extends('layouts.app')

@section('content')
    <h1 class="title is-1">{{ $quiz['title'] }}</h1>
    <h3 class="subtitle is-6">
        <a href="{{ url('/profile/' . $quiz->user['id']) }}">{{ $quiz->user['name'] }}</a> 
        in 
        <a href="{{ url('/quizzes/category/' . $quiz->category['name']) }}">{{ $quiz->category['name'] }}</a>
        - {{ $quiz['created_at']->toFormattedDateString() }}

        <p>{{ $quiz['description'] }}</p> 
    </h3>

    <quiz questions="{{ json_encode($quiz->questions->all()) }}"></quiz>
@endsection