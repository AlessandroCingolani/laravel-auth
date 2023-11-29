@extends('layouts.admin')

@section('content')
    <h3>{{ $project->name }}</h3>
    <p><strong>Start date:</strong> {{ $project->start_date }}</p>
    <p><strong>End date:</strong> {{ $project->end_date }}</p>
    <p><strong>Description:</strong> {{ $project->description }}</p>
    <a href="javascript:history.back()" class="btn btn-primary">Return</a>
@endsection
