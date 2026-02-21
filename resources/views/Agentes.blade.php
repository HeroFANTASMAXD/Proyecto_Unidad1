@extends('layout.app')

@section('content')
<div class="card">
    <div>
        <h1>Agentes</h1>
        <p>
            Selecciona el agente ideal según
            tu nivel de programación.
          <a href="https://gemini.google.com/gem/1XeDkQ_5DB7eGocdD7e9L9cK38aprKE1Y?usp=sharing">Nenufar v2.0</a>
        </p>

        <button class="btn">Seleccionar</button>
    </div>

    <img src="{{ asset('img/nenufar2.jpeg') }}">
    
</div>
@endsection