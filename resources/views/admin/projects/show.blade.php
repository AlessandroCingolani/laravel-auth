@extends('layouts.admin')

@section('content')
    <h3>{{ $project->name }}</h3>
    <p><strong>Start date:</strong> {{ $project->start_date }}</p>
    <p><strong>End date:</strong> {{ isset($project->end_date) ? "$project->end_date" : 'Work in progress' }}</p>
    <p><strong>Description:</strong> {{ $project->description }}</p>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Return</a>
@endsection
