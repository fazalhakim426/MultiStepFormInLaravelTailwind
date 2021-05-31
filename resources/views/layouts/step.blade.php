
                                       
                   <!-- component -->
                   <div class="w-full py-6">
                    <div class="flex">
                      <div class="w-1/4">
                        <div class="relative mb-2">
                            <a href="/index1">
                          <div style="background-color: #00AF1C" class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
                            
                              @if($step>0)
                              <span class="text-center text-white w-full">
                              <i class="fa fa-check" ></i>
                              </span>
                               @else
                               <span class="text-center text-white w-full">
                                1
                              </span>
                               @endif
                           
                            
                          </div>
                        </a>
                        </div>
                  
                      </div>
                      {{-- {{dd($step)}} --}}
                  
                      <div class="w-1/4">
                        <div class="relative mb-2">
                          <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                              @if($step>0)
                              <div   class="w-0 bg-green-300 py-1 rounded" style="width: 100%;background-color: #00AF1C"></div>
                           
                               @else
                               <div   class="w-0 bg-green-300 py-1 rounded" style="width: 0%;background-color: #00AF1C"></div>
                               @endif

                            </div>
                          </div>
                          <a href="/index2">
                          <div style="background-color: #00AF1C" class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
                            @if($step>1)
                              <span class="text-center text-white w-full">
                              <i class="fa fa-check" ></i>
                              </span>
                               @else
                               <span class="text-center text-white w-full">
                                2
                              </span>
                               @endif
                          </div></a>
                        </div>
                  
                      </div>
                  
                      <div class="w-1/4">
                        <div class="relative mb-2">
                          <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                              @if($step>2)
                              <div   class="w-0 bg-green-300 py-1 rounded" style="width: 100%;background-color: #00AF1C"></div>
                           
                               @else
                               <div   class="w-0 bg-green-300 py-1 rounded" style="width: 0%;background-color: #00AF1C"></div>
                               @endif
                              
                              </div>
                          </div>
                            <a href="/index3">
                          <div style="background-color: #00AF1C"  class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                            @if($step>2)
                            <span class="text-center text-white w-full">
                            <i class="fa fa-check" ></i>
                            </span>
                             @else
                             <span class="text-center text-white w-full">
                              3
                            </span>
                             @endif
                          </div></a>
                
                        </div>
                  
                      </div>
                  
                
                      <div class="w-1/4">
                        <div class="relative mb-2">
                          <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                              @if($step>2)
                              <div   class="w-0 bg-green-300 py-1 rounded" style="width: 80%;background-color: #00AF1C"></div>
                           
                               @else
                               <div   class="w-0 bg-green-300 py-1 rounded" style="width: 0%;background-color: #00AF1C"></div>
                               @endif
                              
                              </div>
                          </div>
                          <a href="/index4">
                          <div style="background-color: #00AF1C"  class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                            @if($step>3)
                            <span class="text-center text-white w-full">
                            <i class="fa fa-check" ></i>
                            </span>
                             @else
                             <span class="text-center text-white w-full">
                              4
                            </span>
                             @endif
                          </div>
                        </a>
                        </div>
                  
                      </div>
                    </div>
                  </div>
                


             

