@extends('layouts.app')


@section('content')
    
    <div class="container align-items-center justify-content-center">
        <div class="">
            <h1 v-align="center" align="center">Welcome to codeGram</h1>
        </div>
        <div class="">
            <p align="center">
                <a href="/profiles/{user}" >Home</a>
            </p>

        </div>
    </div>
@endsection