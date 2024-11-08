@extends('layout.szablon')
@section('tytul', 'Dodaj posta')
@section('podtytul', 'Dodawanie posta')
@section('tresc')
@if($errors->all())
<div class="alert alert-danger">
    Uzupełnij brakujące pola
</div>
@endif
        <div class="form-group">
            <label for="tytul">Tytuł</label>
            <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł posta" value="{{ $post->tytul }}" disabled>
            @if($errors->get('tytul'))
            <div class="alert alert-danger">
                @foreach ($errors->get('tytul') as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora posta" value="{{ $post->autor }}" disabled>
            @if($errors->get('autor'))
            <div class="alert alert-danger">
                @foreach ($errors->get('autor') as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email" value="{{ $post->email }}" disabled>
            @if($errors->get('email'))
            <div class="alert alert-danger">
                @foreach ($errors->get('email') as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="tresc">Treść</label>
            <textarea class="form-control" name="tresc" id="tresc" rows="4" disabled>{{ $post->tresc }} </textarea>
            @if($errors->get('tresc'))
            <div class="alert alert-danger">
                @foreach ($errors->get('tresc') as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif
        </div>
        <br>
<a href="{{route('post.index')}}"><button class="btn btn-primary form-btn m-1" type="button">Powrót do listy</button></a> 
<a href="{{route('post.edit', $post->id)}}"><button class="btn btn-success form-btn m-1" type="button">Edytuj</button></a> 
        

@endsection