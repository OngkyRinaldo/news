@extends('layouts.template')

@section('title')

Tags

@endsection

@section('content')

{{-- main start --}}
<div class="position-relative mb-3">
    <h5 class="mt-4 text-black text-uppercase font-weight-bold">
        Tags
    </h5>
    @foreach ($tags as $tag)
    <div class="ml-4 mt-2">
        <a href="{{ route('guest.tags', $tag) }}" class="btn btn-sm btn-secondary m-1">{{
            $tag->title }}</a>
    </div>
    @endforeach

</div>


{{-- main end --}}

@endsection