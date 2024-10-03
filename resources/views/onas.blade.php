@extends('layout.szablon')
@section('tytul', 'O nas')
@section('podtytul', 'Strona o nas')
@section('tresc')
    <div>
        <b>Treść strony o nas</b>  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro veritatis ad exercitationem, blanditiis suscipit voluptatibus fugiat enim reiciendis tenetur eos, sint nisi quidem cumque nulla adipisci nostrum ea? Aliquam, aliquid! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quam amet magni magnam! Obcaecati, est fuga mollitia inventore nobis consectetur doloremque quis, libero in dolorum, animi nihil beatae laborum blanditiis!
    </div>
   {{-- @dump($zadania) --}} 
   
    @isset($zadania)
    <ol>
    @foreach ($zadania as $zadanie)
    <li>{{ $zadanie }}</li> 
    @endforeach
    </ol>
    @endisset
   
@endsection