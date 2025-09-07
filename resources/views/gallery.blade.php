@extends('layouts.app')

@section('title', 'Gallery')
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Gallery</h1>

    <!-- Masonry Gallery -->
    <div class="columns-1 sm:columns-2 md:columns-3 gap-6 space-y-6">
        <img class="w-full rounded-xl mt-2 shadow-md hover:scale-105 transition-transform duration-300 break-inside-avoid" src="{{asset('assets/img/lady_sheif.png')}}" alt="Gallery Image">
        <img class="w-full rounded-xl mt-2 shadow-md hover:scale-105 transition-transform duration-300 break-inside-avoid" src="{{asset('assets/img/lady_salon.png')}}" alt="Gallery Image">
        <img class="w-full rounded-xl mt-2 shadow-md hover:scale-105 transition-transform duration-300 break-inside-avoid" src="{{asset('assets/img/laundry.png')}}" alt="Gallery Image">
        <img class="w-full rounded-xl mt-2 shadow-md hover:scale-105 transition-transform duration-300 break-inside-avoid" src="{{asset('assets/img/salon_team.png')}}" alt="Gallery Image">
        <img class="w-full rounded-xl mt-2 shadow-md hover:scale-105 transition-transform duration-300 break-inside-avoid" src="{{asset('assets/img/dinner_with_client.png')}}" alt="Gallery Image">
        <img class="w-full rounded-xl mt-2 shadow-md hover:scale-105 transition-transform duration-300 break-inside-avoid" src="{{asset('assets/img/happy_moment.png')}}" alt="Gallery Image">
        <img class="w-full rounded-xl mt-2 shadow-md hover:scale-105 transition-transform duration-300 break-inside-avoid" src="{{asset('assets/img/working_together.png')}}" alt="Gallery Image">
        <img class="w-full rounded-xl mt-2 shadow-md hover:scale-105 transition-transform duration-300 break-inside-avoid" src="{{asset('assets/img/team_electrician.png')}}" alt="Gallery Image">
    </div>
</div>
@endsection
