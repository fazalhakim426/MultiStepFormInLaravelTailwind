<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
      
                

            @include('layouts.step')

            


         



            <!-- Page Content -->
            <main>
                       

                <x-step-card>
                  
            
                    <form method="POST" action="{{route('store3')}}">
                        @csrf
                        <div style='text-align:justify;margin:14px'>
                          A quick brown fox jumps over the lazy dog.
                          A quick brown fox jumps over the lazy dog.
                          A quick brown fox jumps over the lazy dog.
                          </div>
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
