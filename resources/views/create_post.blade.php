@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Post</div>

                    <div class="card-body">
                        <form action="/post" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text"
                                    class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Title">
                            </div>
                            <div class="form-group">
                              <label for="content">Content</label>
                              <textarea class="form-control" name="content" id="content" rows="3" placeholder="Content"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Publish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
