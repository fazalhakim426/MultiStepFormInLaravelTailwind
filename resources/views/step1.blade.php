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
            <main>
          @include('layouts.step')
                <x-step-card>
                    <form method="POST" action="{{route('store1')}}">
                        @csrf
                        <div style='text-align:justify;margin:14px'>
                          A quick brown fox jumps over the lazy dog.
                          A quick brown fox jumps over the lazy dog.
                          A quick brown fox jumps over the lazy dog.
                          </div>
  
                        <!-- first name -->
                        <div>
                            <x-label for="first_name" :value="__('First Name')" />
            
                            <x-input id="first_name" class="block mt-1   w-full " type="text" name="first_name" :value="old('first_name')" value="{{old('first_name')==null?$stepUI==null?'':$stepUI->first_name:old('first_name')}}" required autofocus />
                                @error('first_name')
                                <p class="text-red-500 text-xs italic"
                                for="name">
                                {{ $message }}
                         </p>
                                @enderror
                        </div>
                  <!-- first name -->
                     


                        <div>
                         <x-label for="last_name" :value="__('Last Name')" />
     
                         <x-input id="last_name" class="block mt-1 w-full " type="text" name="last_name" :value="old('last_name')"   value="{{old('last_name')==null?$stepUI==null?'':$stepUI->last_name:old('last_name')}}"  required autofocus />
                             @error('last_name')
                             <p class="text-red-500 text-xs italic"
                             for="name">
                             {{ $message }}
                      </p>
                             @enderror
                         </div>
    
                      
            
                        <div class="flex items-center justify-end mt-4">
                                    
                            <x-button class="ml-3">
                                {{ __('Next') }}
                            </x-button>
                        </div>
                    </form>
                </x-step-card>



                <!-- component -->

  
  <div class="container mx-auto py-10 flex justify-center h-screen">
      <div class="w-4/6 pl-4  h-full flex flex-col">
                      <div class="bg-white text-sm text-gray-500 font-bold px-5 py-2 shadow border-b border-gray-300">
                          List
                      </div>
                    

                    
                      <div class="w-full overflow-auto shadow bg-white" id="journal-scroll">
  
                      <table class="w-full border-collapse border border-green-800 .">
                      
                        <thead>
                          <tr>
                            <th>City</th>
                            <th>name</th>
                            <th>email</th>
                            <th>action</th>
                          </tr>
                      </thead>
                              <tbody>
{{-- {{dd($stepUI)}} --}}
                              

                               @foreach($stepUIs as $step)    
                  
                                                      <tr class="relative transform scale-100
                                          text-xs py-1 border-b-2 border-blue-100 cursor-default
  
                                  ">
                                  <td class="pl-5 pr-3 whitespace-no-wrap">
                                      <div class="text-gray-400">{{$step->city}}</div>
                                  </td>
  
                                  <td class="px-2 py-2 whitespace-no-wrap">
                                      <div class="leading-5 text-gray-500 font-medium">{{$step->first_name}} {{$step->last_name}}</div>
                                      <div class="leading-5 text-gray-900">{{$step->address}}
                               </td>          
                               <td>


                                       
                                          <a class="text-blue-500 hover:underline" href="#">{{$step->zip_code}}</a>
                                      <div class="leading-5 text-gray-800">{{$step->email}}</div>
                                  </td>
                      <td>
                        {{-- <a href="{{ route('stepUI', $step) }}" data-method="delete">Delete</a> --}}
                      


          <a href="{{ url('/stepUI', [$step]) }}">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
              Delete
            </button>


          </a>
        </td>
                              </tr>  
                              
                              
                              @endforeach

                              @if(count($stepUIs)==0)
                              <tr>
                                <td> No Entry</td>
                               
                                </tr> 
                               @endif

                                                  </tbody>
                      </table>

                    </div>
                      </div>
                      
                      
  
                  </div>
  </div>



            </main>
        </div>
    </body>
</html>
