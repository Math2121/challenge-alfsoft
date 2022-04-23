@extends('layouts.app')
@section('content')
    <x-intro-page title="Detail Contact" page="Detail" />


    <section class="container">
        <div class="flex-start w-100">
            <a href="/" class="back-page"><img src="{{ asset('public/images/arrow.png') }}"
                    alt="Arrow to back to home"></a>
        </div>
    </section>
    <section class="container flex-top flex-column w-100">
        <div class="detail-content flex-top flex-column">
            <h4>ID</h4>
            <p>
                {{ $contact->id }}
            </p>
        </div>
        <div class="detail-content flex-top flex-column">
            <h4>Name</h4>
            <p>
                {{ $contact->name }}
            </p>
        </div>
        <div class="detail-content flex-top flex-column">
            <h4>Contact</h4>
            <p>
                {{ $contact->contact }}
            </p>
        </div>
        <div class="detail-content flex-top flex-column">
            <h4>Email</h4>
            <p>
                {{ $contact->email }}
            </p>
        </div>

        <div class="links flex-top">
            <a href="{{ route('edit.contact', ['id' => $contact->id]) }}"
                class=" btn primary w-100  mr-2">edit</a>
            <form action="{{ route('delete.contact', ['id' => $contact->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class=" btn danger w-100">delete</button>
            </form>
        </div>
    </section>
@endsection
