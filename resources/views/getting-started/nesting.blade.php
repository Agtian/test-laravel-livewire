@extends('main-layout')

@section('content')
    <h2>Nesting</h2>
    
    @foreach ($names as $name)
        @livewire('nesting', ['name' => $name ]) 
    @endforeach

@endsection
