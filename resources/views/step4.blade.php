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
              <div   class="w-0 bg-green-300 py-1 rounded" style="width: 100%;background-color: #9DCC4C"></div>
            </div>
          </div>
          <a href="/index2">
          <div style="background-color: #9DCC4C" class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
            <span class="text-center text-white w-full">
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
            <span class="text-center text-white-600 w-full">
              3
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
                  
            
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
            
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                    <form method="POST" action="{{route('store4')}}">
                        @csrf
                       
                          <input type="hidden" name='completed' value='yes'>

                        <!-- 1 -->
                        <div>
                         
                            @if($stepUI==null?'':$stepUI->question1=='yes')
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question1" checked />
                             @else
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question1"  />
                            @endif  First option of question 1.
                        </div>
                        <!-- 1 -->
                        <div>
                            @if($stepUI==null?'':$stepUI->question2=='yes')
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question2" checked />
                             @else
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question2"  />
                            @endif 
                            First option of question 2.
                        </div>
                        <!-- 1 -->
                        <div>
                         
                            @if($stepUI==null?'':$stepUI->question3=='yes')
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question3" checked />
                             @else
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question3"  />
                            @endif 
                            First option of question 3.
                        </div>
                        <!-- 1 -->
                        <div>
                         
                            @if($stepUI==null?'':$stepUI->question4=='yes')
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question4" checked />
                             @else
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question4"  />
                            @endif 
                             First option of question 4.
                        </div>
                        <!-- 1 -->
                        <div>
                         
                            @if($stepUI==null?'':$stepUI->question5=='yes')
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question5" checked />
                             @else
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question5"  />
                            @endif  First option of question 5.
                        </div>
                        <!-- 1 -->
                        <div>
                         
                            @if($stepUI==null?'':$stepUI->question6=='yes')
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question6" checked />
                             @else
                            <x-input class=" mt-1 " value='yes' type="checkbox" name="question6"  />
                            @endif First option of question 6.
                        </div>


               
    
                      
                        <!-- Remember Me -->
                        
            
                        <div class="flex items-center justify-end mt-4">
                          
            
                            <x-button class="ml-3">
                                {{ __('Finish') }}
                            </x-button>
                        </div>
                    </form>
                </x-step-card>
            </main>
        </div>
    </body>
</html>
