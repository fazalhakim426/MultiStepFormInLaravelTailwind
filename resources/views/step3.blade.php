<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

             <!-- component -->
             <div class="w-full py-6">
                <div class="flex">
                  <div class="w-1/4">
                    <div class="relative mb-2">
                        <a href="/index1">
                      <div style="background-color: #9DCC4C" class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-white w-full">
                         1
                        </span>
                        
                      </div>
                    </a>
                    </div>
              
                  </div>
              
                  <div class="w-1/4">
                    <div class="relative mb-2">
                      <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                          <div   class="w-0 bg-green-300 py-1 rounded" style="width: 100%;background-color: #9DCC4C"></div>
                        </div>
                      </div>
                      <a href="/index2">
                      <div style="background-color: #9DCC4C" class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-white-600  w-full">
                          2
                        </span>
                      </div></a>
                    </div>
              
                  </div>
              
                  <div class="w-1/4">
                    <div class="relative mb-2">
                      <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                          <div class="w-0 bg-green-300 py-1 rounded" style="width: 100%;background-color: #9DCC4C"></div>
                        </div>
                      </div>
                   <a href="/index3">
                      <div style="background-color: #9DCC4C"  class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-gray-600 w-full">
                          3
                        </span>
                      </div></a>
            
                    </div>
              
                  </div>
              





           
                  <div class="w-1/4">
                    <div class="relative mb-2">
                      <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                          <div class="w-0 bg-green-300 py-1 rounded" style="width: 0%;background-color: #9DCC4C"></div>
                        </div>
                      </div>
                      <a href="/index4">
                      <div style="background-color: #9DCC4C"  class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-gray-600 w-full">
                          4
                        </span>
                      </div>
                    </a>
                    </div>
              
                  </div>


                </div>
              </div>
            


         



            <!-- Page Content -->
            <main>
                       

                <x-step-card>
                  
            
                    <form method="POST" action="{{route('store3')}}">
                        @csrf
            
                        <!-- first name -->
                        <div>
                            <x-label for="email" :value="__('Email')" />
                            {{-- {{dd($stepUI)}} --}}
            
                            <x-input id="email" class="block mt-1 w-full" type="text" name="email"  value="{{old('email')==null?$stepUI==null?'':$stepUI->email:old('email')}}" required autofocus />
                                @error('email')
                                <p class="text-red-500 text-xs italic"
                                for="email">
                                {{ $message }}
                         </p>
                                @enderror 
                            </div>
                  <!-- first name -->
                       <div>
                        <x-label for="zip_code" :value="__('Zip Code')" />
    
                        <x-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code"  value="{{old('zip_code')==null?$stepUI==null?'':$stepUI->zip_code:old('zip_code')}}"  required autofocus />
                            @error('zip_code')
                            <p class="text-red-500 text-xs italic"
                            for="zip_code">
                            {{ $message }}
                     </p>
                            @enderror 
                        </div>
    
                      
            
                        <!-- Remember Me -->
                        
            
                        <div class="flex items-center justify-end mt-4">
                          
            
                            <x-button class="ml-3">
                                {{ __('Next') }}
                            </x-button>
                        </div>
                    </form>
                </x-step-card>
            </main>
        </div>
    </body>
</html>
