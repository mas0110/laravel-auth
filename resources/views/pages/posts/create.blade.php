@extends('layouts.app')

@section('content')
    <main class="container py-3">

        <h1>Crea un nuovo post</h1>

        <form action="{{ route('dashboard.posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="" class="form-label">Title</label>
          <input type="text"
            class="form-control"
            name="title"
            id="title"
            />
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" name="content" id="content" rows="3"></textarea>
        </div>

        <button class="btn btn-primary">Crea</button>
        </form>


    </main>
@endsection
