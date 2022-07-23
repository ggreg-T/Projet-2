@extends('layouts.main')
@section('content')

<h1> c'est ma page index </h1>

<div class="galerie">
@foreach ($posts as $post)

<!-- raccourici EMET div.item*12>img -->
    <div class="item">
        <img src="{{ asset('/storage/' . $post->image) }}" alt="">
        <p>{{ $post->nom_objet}}</p>
        <div class="post"></div>
        <div class="post">{{ Str::limit($post->description, 50)}}</div>
        <div class="post">{{ $post->user->name}}</div>
        <div class="post">{{ $post->created_at->format('d N Y')}}</div>
        <div class="post"></div>
    </div>
    @endforeach

    <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzJ0PuIvmVttxlnN0BJMtQh_tosoEe8PdVlA&usqp=CAU" alt="">
    </div>

</div>
@endsection

