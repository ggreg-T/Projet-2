@extends('layouts.main')
@section('content')

<h1> c'est ma page index </h1>

        <!-- Redirection vers create  -->
<x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">{{__('créer un ppost')}}</x-nav-link>


<div class="galerie">
@foreach ($posts as $post)

<!-- raccourici EMET div.item*12>img -->
    <div class="item">
        <img src="{{ asset('/storage/' . $post->image) }}" alt="">
        
        <div class="post"><p>{{ $post->nom_objet}}</p></div>
        <br>
        <div class="post">{{ Str::limit($post->description, 50)}}</div>
        <br>
        <div class="post">{{ $post->user->name}} // {{ $post->created_at->format('d N Y')}}</div>
        <br>
        <div class="post"></div>
        <div class="post"></div>
    </div>
    @endforeach

    <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzJ0PuIvmVttxlnN0BJMtQh_tosoEe8PdVlA&usqp=CAU" alt="">
    </div>

</div>
@endsection

