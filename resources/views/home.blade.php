@extends('layout')
@section("title", "Happy Birthday")
@section("content")
    <section class="home">
        <div class="title">
            <h1>Happy Birthday Naaman!! &#x1F60E;</h1>
        </div>

        <div class="cards">
        </div>
        <div class="audio">
            <audio controls autoplay loop>
                <source src="{{ url('/audio/go.mp3') }}" type="audio/mpeg">
            </audio>
        </div>
        <div class="likes">
            <div class="like">
                <i id="love" onclick="toRed()"class="fa-solid fa-heart love"></i>
                <p>Like</p>
            </div>
            <div class="like">
                <a class="message1" href="{{ route('wish') }}"><i class="fa-solid fa-message"></i></a>
                <p>Message</p>
            </div>
            <div class="like">
                <a class="instagram" href=""><i class="fa-brands fa-instagram"></i></a>
                <p>Instagram</p>
            </div>
        </div>
    </section>
@endsection
