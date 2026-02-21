@extends('layout.app')

@section('content')

<div class="main">

    <div class="left">
        


    <div class="left h1">
        <div class="card">
             <h1>NENÚFAR v2.0</h1><br><br>
        <p>
           nenufár es un agente de ayuda para programadores
           el funcionamiento es sencillo entras al link y te manda al agente 
           donde ya puedes tener una conversación subes tu codigo y tienes 2 
           modos modo educación y modo mejora educacion te enseña a reahacer el 
           codido desde 0 y mejora te mejora el codigo en un 100% pero es necesario 
           tomar EL MODO EDUCACION.
        </p>
        
        <a href="{{ route('agentes') }}">
            <button class="btn">Ver Agentes</button><br><br>
        </a>
        <div class="right">
            <img src="{{ asset('img/nenufar.jpeg') }}" alt="Nenúfar 1"><br><br>
            </div>
             
        </div>
    </div>

</div>

@endsection
