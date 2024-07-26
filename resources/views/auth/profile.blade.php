@extends('layouts.master')

@section('title')
    profil
@endsection

@section('contenu')
    <div class="card-body">
        <h2 class="card-title mb-3 mt-3">
          Name:  {{ Auth::user()->name }}
        </h2>
        <span class="badge text-bg-secondary">Email: {{Auth::user()->email}}</span>
      

    </div>
@endsection
