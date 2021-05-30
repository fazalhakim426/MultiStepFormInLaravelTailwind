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
        <style>
            #journal-scroll::-webkit-scrollbar {
                      width: 4px;
                      cursor: pointer;
                      /*background-color: rgba(229, 231, 235, var(--bg-opacity));*/
          
                  }
                  #journal-scroll::-webkit-scrollbar-track {
                      background-color: rgba(229, 231, 235, var(--bg-opacity));
                      cursor: pointer;
                      /*background: red;*/
                  }
                  #journal-scroll::-webkit-scrollbar-thumb {
                      cursor: pointer;
                      background-color: #a0aec0;
                      /*outline: 1px solid slategrey;*/
                  }
          </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                  
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                       
                   
                




                                       
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
              <div   class="w-0 bg-green-300 py-1 rounded" style="width: 0%;background-color: #9DCC4C"></div>
            </div>
          </div>
          <a href="/index2">
          <div style="background-color: #9DCC4C" class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
            <span class="text-center text-gray-600 w-full">
              2
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



                <x-step-card>
                  
            
              
                    <form method="POST" action="{{route('store1')}}">
                        @csrf
            
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
  
                      <table class="w-full">
  
  
                          <tbody class="">
                              <thead>
                                  <tr>
                                    <th>City</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>action</th>
                                  </tr>
                              </thead>
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
                               </td>          <td>

                                       
                                          <a class="text-blue-500 hover:underline" href="#">{{$step->zip_code}}</a></div>
                                      <div class="leading-5 text-gray-800">{{$step->email}}</div>
                                  </td>
  <td>any action</td>
                              </tr>  @endforeach

                                                  </tbody>
                      </table>
                      </div>
                      
                      
  
                  </div>
  </div>



            </main>
        </div>
    </body>
</html>
