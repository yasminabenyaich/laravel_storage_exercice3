@extends('layouts.app')

@section('content')
<section class="container">

    <h1 class="text-center my-3">Edit User</h1>

 @foreach ($errors->all() as $message)
            
 {{ $message }}

@endforeach
        
   

    <form method="POST" action="{{ route('user.update',$user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label  class="form-label">nom</label>
            <input type="text" class="form-control" value="{{ $user->nom }}" name="nom">
        </div>
        <div class="mb-3">
            <label  class="form-label">prenom</label>
            <input type="text" class="form-control" value="{{ $user->prenom }}" name="prenom">
        </div>
        <div class="mb-3">
            <label  class="form-label">age</label>
            <input type="text" class="form-control" value="{{ $user->age }}" name="age">
        </div>
        <div class="mb-3">
            <label  class="form-label">email</label>
            <input type="text" class="form-control" value="{{ $user->email }}" name="email">
        </div>
        <div class="mb-3">
            <label  class="form-label">password</label>
            <input type="text" class="form-control" value="{{ $user->mdp }}" name="mdp">
        </div>
        <div class="mb-3">
            <label  class="form-label">photo</label>
            <input type="file" class="form-control" value="{{ $user->pdp }}" name="pdp">
        </div>
        <button type="submit" class="btn btn-dark text-white my-3">Submit</button>
    </form>
  
</section>
@endsection