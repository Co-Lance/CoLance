@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">contract page </div>
  <div class="card-body">

<!-- component -->
<div class="max-w-lg lg:ms-auto mx-auto text-center ">
    <div class="py-16 px-7 rounded-md bg-white">

        <form class="" action="{{ url('contract') }}" method="POST">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
              <input type="text" id="fname" name="fname" placeholder="Nom *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">
              <input type="text" id="fname" name="fname" placeholder="Téléphone *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
              <input type="text" id="fname" name="fname" placeholder="Localisation *" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
              <div class="md:col-span-2">
                <input type="email" id="email" name="email" placeholder="E-mail" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
              </div>
              <div class="md:col-span-2">
                <label for="subject" class="float-left block  font-normal text-gray-400 text-lg">Vous accompagner sur :</label>
                <select id="subject" name="subject" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                  <option value="" disabled selected>Sélectionnez un type de contrat</option>
                  <option value="Option-1">two way exchnage</option>
                  <option value="Option-2">one way exchange</option>
                  <option value="Option-3">Autre</option>

                </select>
              </div>


              <div class="md:col-span-2">
                <label for="subject" class="float-left block  font-normal text-gray-400 text-lg">Ajoutez une image ou une pièce jointe de votre objet :</label>
                <input type="file" id="file" name="file" placeholder="Charger votre fichier" class="peer block w-full appearance-none border-none   bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0">
            </div>
              <div class="md:col-span-2">
                <textarea name="description" rows="5" cols="" placeholder="Description*" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700"></textarea>
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
