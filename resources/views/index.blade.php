@extends('layouts.app')
@section('content')
    <x-intro-page title="List of Contacts" page="Home" />
    <section class="container">
        <div class="flex-end w-100">
            <a href="/create" class="btn new">Create a Contact</a>
        </div>
    </section>
    @include('flash-messages')
    <section class="container">
        <div class="list-contacts">


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($contacts as $contact)
                        <tr>
                            <td>
                                {{ $contact->id }}
                            </td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->contact }}</td>
                            <td>{{ $contact->email }}</td>
                            <td class="links-action">
                                <a href="{{ route('detail', ['id' => $contact->id]) }}"
                                    class=" btn send w-100 icon-eye">DETAIL</a>

                                <a href="{{ route('edit.contact', ['id' => $contact->id]) }}"
                                    class=" btn primary w-100">edit</a>

                                <form action="{{ route('delete.contact', ['id' => $contact->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" btn danger w-100">delete</button>
                                </form>

                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
