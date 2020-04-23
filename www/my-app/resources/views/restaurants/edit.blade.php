@extends('layouts.layout')

@section('title' , 'Create')

@section('content')
<h1>Edit a restaurant</h1>
<form method="POST" , action="/restaurant/edit/{{ $restaurant->id }}">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name"  name="name" aria-describedby="name" value="{{$restaurant->name}}">
    </div>
    <div class="form-group">
        <label for="adress">Adress</label>
        <input type="text" class="form-control" id="adress" name="adress" aria-describedby="adress" value="{{$restaurant->adress}}">
      </div>
      <div class="form-group">
        <label for="zipCode">ZipCode</label>
        <input type="text" class="form-control" id="zipCode" name="zipCode" aria-describedby="zipCode" value="{{$restaurant->zipCode}}">
      </div>
      <div class="form-group">
        <label for="town">Town</label>
        <input type="text" class="form-control" id="town" name="town" aria-describedby="town" value="{{$restaurant->town}}">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <input type="textarea" class="form-control" id="description" name="description" aria-describedby="description" value="{{$restaurant->description}}">
      </div>
      <div class="form-group">
        <label for="review">Review</label>
        <input type="text" class="form-control" id="review" name="review" aria-describedby="review" value="{{$restaurant->review}}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
@endsection