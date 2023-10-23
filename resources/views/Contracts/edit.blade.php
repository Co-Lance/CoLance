<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Co-Lance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
</head>


@extends('Contracts.layout')
@section('content')

<div class="card">
  <div class="card-header">Contract Page</div>
  <div class="card-body">

      <form action="{{ url('contract/' .$contracts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contracts->id}}" id="id" />
        <label>contract_name</label></br>
        <input type="text" name="name" id="name" value="{{$contracts->contract_name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$contracts->address}}" class="form-control"></br>
        <label>contract_description</label></br>
        <input type="text" name="contract_status" id="contract_status" value="{{$contracts->contract_status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>

@stop

