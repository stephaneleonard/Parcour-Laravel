@extends('layouts.layout')

@section('title' , 'Restaurant')
@section('content')
<h1>Show restaurant {{$restaurant->name}}</h1>
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
    @if ($restaurant)
    <tr>
    <td>{{$restaurant->id}}</td>
    <td>{{$restaurant->name}}</td>
    <td>{{$restaurant->adress}}</td>
    <td>{{$restaurant->zipCode}}</td>
    <td>{{$restaurant->town}}</td>
    <td>{{$restaurant->description}}</td>
    <td>{{$restaurant->review}}</td>
    </tr>
    @endif
    
  </table>
    
@endsection