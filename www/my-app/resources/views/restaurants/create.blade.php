@extends('layouts.layout')

@section('title' , 'Create');

@section('content')
<h1>Create a restaurant</h1>
<form method="POST" , action="/restaurant/create">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name"  name="name" aria-describedby="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="adress">Adress</label>
        <input type="text" class="form-control" id="adress" name="adress" aria-describedby="adress" placeholder="Enter adress">
      </div>
      <div class="form-group">
        <label for="zipCode">ZipCode</label>
        <input type="text" class="form-control" id="zipCode" name="zipCode" aria-describedby="zipCode" placeholder="Enter zipCode">
      </div>
      <div class="form-group">
        <label for="town">Town</label>
        <input type="text" class="form-control" id="town" name="town" aria-describedby="town" placeholder="Enter town">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <input type="textarea" class="form-control" id="description" name="description" aria-describedby="description" placeholder="Enter description">
      </div>
      <div class="form-group">
        <label for="review">Review</label>
        <input type="text" class="form-control" id="review" name="review" aria-describedby="review" placeholder="Enter review">
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