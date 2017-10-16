@extends('layouts.master')

@section('content')

    <h1>Contact Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam asperiores eos illo labore
        laudantium maxime natus necessitatibus perferendis quod! Deserunt ex hic itaque iure magnam nemo, placeat
        voluptate voluptatibus!</h1>

    <h1> Contact Form</h1>
    <div class="form-group">
        {!! Form::open(['url' => 'contact/submit']) !!}

        {{ Form::label('name')}}

        {{ Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'name here']) }}

        {{ Form::label('email')}}

        {{ Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'email here']) }}

        {{ Form::label('message')}}

        {{ Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>'message here']) }}


        <div>

            {{ Form::submit('Submit' , ['class'=>'btn btn-primary']) }}

        </div>


        {!! Form::close() !!}
    </div>
@endsection