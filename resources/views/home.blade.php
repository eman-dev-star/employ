@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <p class="text-primary">{{ __('Articles') }}</p>
                        </div><br>
                <div class="float-right">
                    <a href="{{route('articles.create')}}" class="btn btn-primary">create new articles</a>
                </div>
            </div>

                <div class="card-body">
                    <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">update</a>
                    <a href="#" class="btn btn-denger">delete</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
