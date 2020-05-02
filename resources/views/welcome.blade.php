@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <section id="welcome">
        <div class="text-center mx-auto mt-5">
            <h1>Welcome</h1>
            <h5>Laravel Livewire Integrated</h5>
            <ul class="list-group list-group-horizontal justify-content-center">
                <li class="list-group-item  border-0">
                    <a href="https://laravel.com/" target="_blank">Laravel</a>
                </li>
                <li class="list-group-item  border-0">
                    <a href="https://laravel-livewire.com/" target="_blank">Liveware</a>
                </li>
                <li class="list-group-item  border-0">
                    <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>
                </li>
            </ul>
        </div>
    </section>
@endsection