@extends('layouts.admin')

@section('content')
    <h1>List projects</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name project</th>
                <th scope="col">Start date</th>
                <th scope="col">End date</th>
                <th class="text-center" scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success"> <i
                                class="fa-solid fa-circle-info"></i></a>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $projects->links() }}
@endsection
