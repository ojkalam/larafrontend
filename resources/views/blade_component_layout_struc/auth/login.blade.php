<x-guest-layout>

    <x-slot:title>Login Page</x-slot>
    {{-- <x-slot name="title">Login Page</x-slot> --}}
    <x-header> This is header from login page </x-header>
    <x-some> sss</x-some>
    <x-test> ttt </x-test>

    <div class="card mt-4 p-4">
        <h2 class="text-center">Login Page</h2>
        <form action="{{ url('/login') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</x-guest-layout>
