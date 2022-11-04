@extends('layout')
@section("title", "Happy Birthday")
@section("content")
    <section class="wish">
        <div class="head">
            <h2>Write To Naaman Something...</h2>
        </div>
        <div class="form-cont">
            <form action="/wish" method="POST">
                @csrf
                @if (Session::has("success"))
                    <p class="success">
                        {{ Session::get("success") }}
                    </p>
                @endif
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter Name" @error("name")
                        style="outline:auto; outline-color: red;"
                @enderror value="{{ old('name') }}">
                    @error('name')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter Email" @error("name")
                style="outline:auto; outline-color: red;"
                @enderror value="{{ old('email') }}">
                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <label for="message">Enter Message:</label>
                <textarea name="message" id="message" placeholder="Enter Message" @error("name")
                style="outline:auto; outline-color: red;"
                @enderror value="{{ old('message') }}"></textarea>
                    @error('message')
                        <p class="error">{{ $message }}</p>
                    @enderror
                <button type="submit">Send wish</button>
            </form>
        </div>
        <div class="social">

        </div>
        <div class="viewbtn">
            <a href="{{ route('messages') }}">View Messages</a>
        </div>
    </section>
@endsection
