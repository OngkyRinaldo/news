@extends('layouts.template')

@section('title')

Categories

@endsection

@section('content')

{{-- main start --}}
<div class="position-relative mb-3">
    <h5 class="mt-4 text-black text-uppercase font-weight-bold">
        Categories
    </h5>
    @foreach ($categories as $category)
    <div class="ml-4 mt-2">
        <a href="{{ route('guest.categories', $category->slug) }}" class="btn btn-sm btn-secondary m-1">{{
            $category->title }}</a>
    </div>
    @endforeach

</div>


{{-- main end --}}

@endsection