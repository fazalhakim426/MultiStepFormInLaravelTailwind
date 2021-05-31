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
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                  
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                   
                

              @include('layouts.step')







                <x-step-card>
                  
            
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
            
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                    <form method="POST" action="{{route('store4')}}">
                        @csrf
                        <div style='text-align:justify;margin:14px'>
                          A quick brown fox jumps over the lazy dog.
                          A quick brown fox jumps over the lazy dog.
                          A quick brown fox jumps over the lazy dog.
                          </div>
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
