<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', app()->getLocale()); ?>">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Co-Lance</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Tailwind CSS -->
      <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
   </head>
   <body>
      <div class="flex flex-col lg:flex-row md:flex-row" style="background-color: #F6F6F6;">
         <div class="flex pb-10 flex-col md:w-4/12 md:h-screen  lg:w-2/12 lg:h-screen w-screen bg-gray-900 shadow-lg"  >
            <div class="items-center justify-center mt-5 -ml-2 lg:flex md:flex hidden">
               <a href="/">
               <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1695073341/YouTube_Thumbnail_1280x720_px_1_sonpfc.png" alt="Logo" style="width: 150px">
               </a>
            </div>
            <div class="lg:block md:block mt-4">
               <div id="profile" class="space-y-3 mt-8">
                  <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1694623518/TDS-platform/e1g7fbd5r9ymja0jkxm6.jpg" alt="Admin picture" class="md:w-16 rounded-full mx-auto" style="width: 120px;">
                  <div>
                     <h2 class="font-medium text-md md:text-sm text-center text-red-600">Admin</h2>
                     <p class="text-md text-gray-300 text-center">Foulen ben foulen</p>
                  </div>
               </div>
               <div class="pr-16 mt-10">
                  <div class="p-4">
                     <div id="menu" class="flex flex-col space-y-2">
                        <a href="{{ url('/products') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Products</a>
                        <a href="{{ url('/addProduct') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add Product</a>
                        <a class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" href="{{url('offres')}}">My offers</a>
                        <a href="{{route('createoffre')}}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" >Create Offer</a>
                        <a href="{{ url('/categories') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Categories</a>
                        <a href="{{ url('/categories/create') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add Categorie</a>
                        <a href="{{ url('/reclamation') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Reclamations</a>
                        <a href="{{ url('/addReclamation') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add Reclamation</a>
                     </div>
                  </div>
               </div>
            </div>
            <a href="/auth" class="md:block lg:block text-sm mt-auto text-center -ml-4 font-medium text-gray-300 hover:text-red-700 hover:scale-105 rounded-md transition duration-150 ease-in-out">
            <span>Logout</span>
            </a>
         </div>
         <div class="flex flex-col overflow-y-auto flex-grow" style="height:100vh;">
            <nav class="bg-white shadow-lg p-6 mb-10">
               <h1 class="text-2xl font-bold text-blue-950">
                  Products
               </h1>
            </nav>
            <div class="flex flex-col p-4 items-center ">
               <!-- Content for each tab goes here -->
               <div class="flex gap-3 flex-wrap justify-center mt-5">
                  @foreach($listproducts as $product)
                  <div class="flex flex-col  max-w-xs bg-white border border-gray-200 rounded-lg shadow w-96 h-6/12">
                      
                            <img src="{{ $product->image  }}" alt="" class="rounded-t-lg w-full h-full object-cover max-h-48" />
                      
                        <div class="flex flex-col p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 " >{{ $product->name }}</h5>

                            
                            <span class="description-truncate">
                        {{ substr($product->description, 0, 35) }}{{ strlen($product->description) > 35 ? '...' : '' }}
                        @if (strlen($product->description) > 35)
                        <a href="#" class="text-green-700 font-semibold	 read-more-link ">Read more</a>
                        @endif
                        </span>
                        <div class="description-full" style="display: none;">
                           {{ $product->description }}
                           <a href="#" class="text-red-600 font-semibold show-less-link">Show less</a>
                        </div>
                        <div class="flex flex-wrap gap-1  mt-3 mb-3">
                              @foreach($product->categories as $category)
                              <div class="rounded-xl px-3 py-1 text-sm font-medium text-white " style="background-color: {{ $category->color }}">
                                 {{ $category->name }}
                              </div>
                              @endforeach
                           </div>
                        <script>
                           document.querySelectorAll('.read-more-link').forEach(function(link) {
                               link.addEventListener('click', function(e) {
                                   e.preventDefault();
                                   const descriptionTruncate = this.closest('.description-truncate');
                                   const descriptionFull = this.closest('.description-truncate').nextElementSibling;
                           
                                   descriptionTruncate.style.display = 'none';
                                   descriptionFull.style.display = 'block';
                               });
                           });
                           
                           document.querySelectorAll('.show-less-link').forEach(function(link) {
                               link.addEventListener('click', function(e) {
                                   e.preventDefault();
                                   const descriptionFull = this.closest('.description-full');
                                   const descriptionTruncate = this.closest('.description-full').previousElementSibling;
                           
                                   descriptionFull.style.display = 'none';
                                   descriptionTruncate.style.display = 'inline';
                               });
                           });
                        </script>
                            <!-- Assuming you have a URL for a 'Continue' link -->
                            <div class="flex items-center mb-3 text-gray-700">
                            <div class="flex  mt-2"> {!! $qrCodes[$product->id] !!}
                            </div>
                            <div>

                                <div class="flex flex-wrap m-4">
                                <a  href="{{ route('products.delete', ['id' => $product->id]) }}">
                              <span class="inline-flex items-center w-28 px-3 mb-2 py-2 text-sm font-medium text-center text-red-500 border border-2 border-red-500 rounded-lg hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300">
                              supprimer
                              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                              </span></a>
                              <a  href="{{ route('products.edit', ['id' => $product->id]) }}">
                                 <span class="inline-flex items-center w-28 px-3 py-2 text-sm font-medium text-center text-green-800 border border-2 border-green-800 rounded-lg hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300">
                                    modifier
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                 </span>
                              </a>
                                </div>
                            </div>
                                </div>
                        </div>
                    </div>

                  @endforeach
               </div>
            </div>
            <script>
                           document.querySelectorAll('.read-more-link').forEach(function(link) {
                               link.addEventListener('click', function(e) {
                                   e.preventDefault();
                                   const descriptionTruncate = this.closest('.description-truncate');
                                   const descriptionFull = this.closest('.description-truncate').nextElementSibling;
                           
                                   descriptionTruncate.style.display = 'none';
                                   descriptionFull.style.display = 'block';
                               });
                           });
                           
                           document.querySelectorAll('.show-less-link').forEach(function(link) {
                               link.addEventListener('click', function(e) {
                                   e.preventDefault();
                                   const descriptionFull = this.closest('.description-full');
                                   const descriptionTruncate = this.closest('.description-full').previousElementSibling;
                           
                                   descriptionFull.style.display = 'none';
                                   descriptionTruncate.style.display = 'inline';
                               });
                           });
                        </script>
            <div class="mt-auto p-3 text-gray-600 text-center w-full">
            <p>&copy; <?php echo date('Y'); ?> Copyrights CO-SHARE <span class="ml-2">&trade;</span></p>
        </div>
         </div>
      </div>
   </body>
</html>