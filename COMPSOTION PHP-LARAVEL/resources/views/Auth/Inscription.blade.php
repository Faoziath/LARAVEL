@extends('layouts.base')

@section('contenu')

<div class="container mt-5 col-4">
    <form method="POST" action="{{ route('register')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmer Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-primary">Inscrivez-vous</button>
    </form>
</div>


@endsection
