<h1>You must subscribe first</h1>

@php
$currentUser = auth()->user();
@endphp

<li><a class="nav-link" href="{{ route('user.edit',['id'=>$currentUser->id]) }}">My Companies</a></li>

