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

@extends('contracts.layout')
@section('content')

<div class="card">
  <div class="card-header">contract page </div>
  <div class="card-body">

<!-- component -->
<div class="max-w-lg lg:ms-auto mx-auto text-center ">
    <div class="py-16 px-7 rounded-md bg-white">

        <form class="" action="{{ route('storecontract') }}" method="POST">
            @csrf
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
              <input type="text" id="fname" name="contract_name" placeholder="Nom *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">
              <input type="text" id="fname" name="contract_status" placeholder="Téléphone *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
              <input type="date" id="fname" name="contract_date" placeholder="Localisation *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">

              <div class="md:col-span-2">
                <label for="subject" class="float-left block  font-normal text-gray-400 text-lg">Vous accompagner sur :</label>
                <select id="subject" name="contract_type" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                  <option value="" disabled selected>Sélectionnez un type de contrat</option>
                  <option value="two way exchnage">two way exchnage</option>
                  <option value="one way exchange">one way exchange</option>

                </select>
              </div>


              <div class="md:col-span-2">
                <label for="subject" class="float-left block  font-normal text-gray-400 text-lg">Ajoutez une image ou une pièce jointe de votre objet :</label>
                <input type="file" id="file" name="file" placeholder="Charger votre fichier" class="peer block w-full appearance-none border-none   bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0">
            </div>
              <div class="md:col-span-2">
                <textarea name="contract_description" rows="5" cols="" placeholder="Description*" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700"></textarea>
              </div>
              <!-- <div class="md:col-span-2">
                <input type="checkbox" name="" id="" class="mr-2 sm:m-1">
                <label for="" class="text-sm col-span-2">
                  Autoriser OC à vous envoyer des lettres d'information par E-mail.
                </label>
              </div> -->

           
              <div class="md:col-span-2">
                <button class="py-3 text-base font-medium rounded text-white bg-blue-800 w-full hover:bg-blue-700 transition duration-300">Valider</button>
              </div>
            </div><!-- Grid End -->
          </form>
    </div>
</div>


  </div>
</div>

@stop
