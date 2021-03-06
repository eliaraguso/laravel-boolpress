@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Aggiungi il post</div>

                    <div class="card-body">
                        <form action="{{ route('admin.posts.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Titolo</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title"" name="title" placeholder="Inserisci il titolo">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Contenuto</label>
                                <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Inserisci il contenuto"></textarea>
                                @error('content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Crea</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
