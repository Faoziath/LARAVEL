@extends('layouts.base')

@section('contenu')

<div class="container col-4 mt-5">
    <form method="POST" action="{{ route('login')}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Authentification</label>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>


@endsection
