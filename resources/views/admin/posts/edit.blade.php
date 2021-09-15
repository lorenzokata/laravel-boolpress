@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control
            @error ('title') is-invalid @enderror" 
            id="titolo" value="{{ $post->title }}">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Descrizione</label>
            <textarea name="content" id="desc" cols="30" rows="10" class="form-control
            @error ('content') is-invalid @enderror"
            > {{ $post->content }} </textarea>

            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>

    </form>
@endsection