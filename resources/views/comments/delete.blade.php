@extends('main')

@section('title', '| Delete Comment?')
@section('content')

    <div class="rolw">
        <div class="col-md-8 col-md-offset-2">
            <h1>Delete This Comment?</h1>
            <p>
                <strong>Name: </strong>{{ $comment->name }}<br>
                <strong>Email: </strong> {{ $comment->email }}<br>
                <strong>Comment: </strong> {{ $comment->comment }}
            </p>
            {{ Form::open(['route'=>['comments.destroy', $comment->id], 'method'=>'DELETE']) }}
                {{ Form::submit('YES DELET THIS COMMENT', ['class'=>'btn btn-block btn-danger']) }}
            {{Form::close()}}
        </div>
    </div>

@endsection