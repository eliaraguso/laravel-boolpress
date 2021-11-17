@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Aggiungi il post</div> 
                
                    <div class="card-body">
                        <form action="{{ route("admin.posts.store") }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="title">Titolo</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" name="title" placeholder="Inserisci il titolo">
                            </div>
                            <div class="form-group">
                                <label for="content">Contenuto</label>
                                <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Inserisci il contenuto"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Crea</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
