@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2>Aggiumgi nuovo post</h2>
            <div class="col-12">
                <form action="{{route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group my-3">
                        <label for="" class="control-label">
                            Titolo
                        </label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Titolo">
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="control-label">
                            Contenuto
                        </label>
                        <textarea name="content" id="content" class="form-control" placeholder="Contenuto"> </textarea>
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-sm btn-success">Salva post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection