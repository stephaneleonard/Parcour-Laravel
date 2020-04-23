@extends('layouts.layout')

@section('title' , 'Restaurants')
@section('content')
<h1>Dispay all the restaurants</h1>

<table style="width:100%">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Adress</th>
      <th>ZipCode</th>
      <th>Town</th>
      <th>Description</th>
      <th>Review</th>
    </tr>
    @if ($restaurants)
    @foreach ($restaurants as $restaurant)
    <tr>
    <td>{{$restaurant->id}}</td>
    <td><a href="{{route('restaurant.edit' , $restaurant->id)}}">{{$restaurant->name}}</a></td>
    <td>{{$restaurant->adress}}</td>
    <td>{{$restaurant->zipCode}}</td>
    <td>{{$restaurant->town}}</td>
    <td>{{$restaurant->description}}</td>
    <td>{{$restaurant->review}}</td>
    </tr>
        
    @endforeach 
    @endif
    
  </table>
    
@endsection