@extends('layouts.main-layout')
@section('content')

    <form action="{{route('stanza-create')}}" method="POST">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="room_number">Room_number</label>
            <input type="text" name="room_number" value="">
        </div>
        <div class="form-group">
            <label for="floor">floor</label>
            <input type="text" name="floor" value="">
        </div>
        <div class="form-group">
            <label for="beds">beds</label>
            <input type="text" name="beds" value="">
        </div>
        <button type="submit">CREA!!!!</button>       
    </form>

    <ul>    
@foreach ($stanze as $item)

     <li><a href="{{route('stanza-show' , $item -> id)}}">{{$item -> room_number }} </a> </li>   
@endforeach
</ul>
@endsection