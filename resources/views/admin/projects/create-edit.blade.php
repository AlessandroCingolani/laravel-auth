@extends('layouts.admin')

@section('content')
    <h1>{{ $title }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif



    <div class="row">
        <div class="col-8">
            <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method($method)
                <div class="mb-3">
                    <label for="name" class="form-label">Name project *</label>
                    <input id="name" class="form-control @error('name') is-invalid @enderror" name="name"
                        type="text" value="{{ old('name', $project?->title) }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link project*</label>
                    <input id="link" class="form-control @error('link') is-invalid @enderror" name="link"
                        type="text" value="{{ old('link', $project?->title) }}">
                    @error('link')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" placeholder="Project description *" id="text" name="text" style="height: 200px">{{ old('text', $project?->text) }}</textarea>
                    <label for="text">Description project *</label>
                    @error('text')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input id="image" class="form-control @error('image') is-invalid @enderror" name="image"
                        type="file" value="{{ old('image', $project?->image) }}">
                    @error('image')
                        <p class="text-danger">{{ $image }}</p>
                    @enderror
                    @if ($project)
                        <img width="150" src="{{ asset('storage/' . $project->image) }}" />
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>

            </form>
        </div>
    </div>
@endsection
