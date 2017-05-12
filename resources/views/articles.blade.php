@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $article->title }}</div>

                <div class="panel-body">
                    {{ $article->body }}
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <h3>Comments</h3>
        </div>
        
        @foreach ($article->comments as $comment)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $comment->owner->name }}</div>
                
                    <div class="panel-body">
                        {{ $comment->body }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
