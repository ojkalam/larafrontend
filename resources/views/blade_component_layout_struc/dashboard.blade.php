<x-app-layout>

    <x-slot name='title'> Dashboard </x-slot>

    <div class="card card-secondary">
        <h2>Dashboard section</h2>
        @auth
            <a href="{{ url('logout') }}">Logout</a>
        @else
            <p>Not logged in </p>
        @endauth
    </div>
</x-app-layout>
