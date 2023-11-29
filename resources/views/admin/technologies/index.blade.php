@extends('layouts.admin')


@section('content')
    <h1>Technologies</h1>
    <div class="row">
        <div class="col-6">
            @if (session('error'))
                <div class="alert alert-danger" role='alert'>
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success" role='alert'>
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('admin.technologies.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="New tech" aria-describedby="button-addon2"
                        name="name">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
                </div>
            </form>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name tech</th>
                        <th class="text-center" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($technologies as $technology)
                        <tr>
                            <td>{{ $technology->name }}</td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="#"><i class="fa-solid fa-pencil"></i></a>
                                <form class="d-inline-block" action={{ route('admin.technologies.destroy', $technology) }}
                                    method="POST"
                                    onsubmit="return confirm('Sicuro di eliminare {{ $technology->name }}?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
@endsection
