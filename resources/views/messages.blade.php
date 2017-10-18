@extends('layouts.master')

@section('content')


    @foreach($messages as $message)

        <ul class="list-group">
            <li class="list-group-item">Name: {{ $message->name }}</li>
            <li class="list-group-item">Email: {{ $message->email }}</li>
            <li class="list-group-item">Message: {{ $message->message }}</li>

        </ul>


    @endforeach



@endsection