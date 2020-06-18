@extends('layouts.master')
@section('content')
<div>search user</div>
<div>
    {{ $title }}

</div>

<ul>
    @foreach($users as $user)
        <li>{{ $user -> name}}</li>
    @endforeach
</ul>

@endsection