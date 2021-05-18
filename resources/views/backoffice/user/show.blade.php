@extends('layouts.app')

@section('content')
<section class="container mr-5">
        
    <h1 class="text-center my-3">tableau de User</h1>
    <div class="d-flex justify-content-center">
        <img class="w-75  my-3 " src="{{ asset("img/" . $user->image) }}" alt="">
    </div>
    
</section>
@endsection