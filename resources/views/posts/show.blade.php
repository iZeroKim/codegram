@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="\storage\{{ $post->image }}" alt="">
        </div>
        <div class="col-4">
            <div>
                <h2>{{ $post->user->username }}</h2>
            </div>
            <div class="pt-2">
                {{$post->caption}}
            </div>

        </div>
</div>
@endsection
