<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            
            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                  
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                     
                

          @include('layouts.step')



                <x-step-card>
                  
            
               
                    <form method="POST" action="{{route('store2')}}">
                        @csrf
                        <div style='text-align:justify;margin:14px'>
                          A quick brown fox jumps over the lazy dog.
                          A quick brown fox jumps over the lazy dog.
                          A quick brown fox jumps over the lazy dog.
                          </div>
                        <div>
                            <x-label for="address" :value="__('Address')" />
            
                        
                            <x-input id="address" class="block mt-1 w-full" type="text" name="address"  value="{{old('address')==null?$stepUI==null?'':$stepUI->address:old('address')}}"  required autofocus />
                                @error('address')
                                <p class="text-red-500 text-xs italic"
                                for="address">
                                {{ $message }}
                         </p>
                                @enderror 
                            </div>
                       <div>
                        <x-label for="city" :value="__('City')" />
    
                        <x-input id="city" class="block mt-1 w-full" type="text" name="city"  value="{{old('city')==null?$stepUI==null?'':$stepUI->city:old('city')}}"  required autofocus />
                            @error('city')
                            <p class="text-red-500 text-xs italic"
                            for="city">
                            {{ $message }}
                     </p>
                            @enderror  </div>

    
                      
            
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
