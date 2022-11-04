@extends('layout')
@section("title", "Happy Birthday")
@section("content")
<section class="messages">
    <div class="head">
        <h2 id="headmsg">---What Friends are Saying---</h2>
    </div>
    <div class="chats">
        @foreach ( $data as $item)
        <div class="chat">
            <div class="div1">
                <i class="fa-solid fa-user"></i>
                {{-- <img src="{{ url('/images/img3.jpg') }}" alt="User Image"> --}}
            </div>
            <div class="div2">

                    <h2>{{ $item->name }}</h2>
                    <p class="desc">{{ $item->message }}</p>
                    {{-- <p><i>{{ $item->email }}</i></p> --}}
                    <p class="time"><i>{{ $item->created_at->diffForHumans() }}</i></p>

                <div class="follow">
                    <a href="">Follow</a>
                    <a href="">Love</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="goto_wish">
        <a href="{{ route('wish') }}">Send Message</a>
    </div>
</section>
@endsection
