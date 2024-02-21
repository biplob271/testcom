@extends('frontend.layouts.header')
@section('content')

<div class="container my-5 py-5 px-5 mx-5">
    <!-- Search input -->
    <form>
       
    
    <input
    type="search"
    class="form-control"
    placeholder="Find user here"
    name="search"
    value="{{ request('search') }}"
>
</form>
    <!-- List items -->
    <ul class="list-group mt-3">
        @forelse($users as $user)
        <a href=""><li class="list-group-item">{{ $user->name }}</li></a>    
        
        @empty
            <li class="list-group-item list-group-item-danger">Product Not Found.</li>
        @endforelse
    </ul>
</div>
    

@endsection