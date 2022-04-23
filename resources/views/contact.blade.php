@extends('layouts.app')
@section('content')
    <x-intro-page title="Create a Contact" page="Contact" />
    @include('flash-messages')
    <section class="container">
        <div class="flex-start w-100">
            <a href="/" class="back-page"><img src="{{ asset('./images/arrow.png') }}"
                    alt="Arrow to back to home"></a>
        </div>
    </section>
    <section class="container">
        <form action="{{ route('create.contact') }}" class="form-contact" method="post">
            @csrf
            <div class="icon-send">
                <img src="{{ asset('./images/send.png') }}" alt="">
            </div>
            <div class="input-group flex-top flex-column">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group flex-top flex-column">
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" required placeholder="00000-0000" required>
                @if ($errors->has('contact'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('contact') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group flex-top flex-column">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required placeholder="johndoe@gmail.com" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn send">Send</button>

        </form>
    </section>
@endsection
