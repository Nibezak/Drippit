
       <div class="flex text-center">
                     <div class="relative text-gray-300 w-full py-2 px-2 mb-4 pb-0 ">
                    <button type="submit" class="absolute ml-4 mt-3 mr-4">
                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                          <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                        </svg>
                      </button>

                    <input type="search" name="search" placeholder="Search Drippit" class="bg-blue-800 h-10 px-10 pr-5 w-full rounded-full text-sm focus:outline-none bg-purple-white shadow rounded border-0">
                    
                </div>
                </div>

                <hr class="border-gray-600">
                <!--middle creat tweet-->
                @error('body')

<div class="ml-2">
    <p class="text-red-400 inline-flex text-md text-semibold font-mono">{{$message}}</p>
</div>

@enderror
                <form action="/tweets" method="post">
                    @csrf
                <div class="flex">
                    <div class="m-2 w-10 py-1">
                        <a href="{{ route('profile',auth()->user()) }}">
                        <img class="inline-block h-10 w-10 rounded-full" src="{{auth()->user()->avatar}}" alt="" />
                    </a>
                    </div>
                    <div class="flex-1 px-2 pt-2 mt-2">
                        <textarea class=" bg-transparent text-gray-400 font-medium text-lg w-full" rows="2" name="body" cols="50" placeholder="What's happening?"></textarea>
                    </div>                    
                </div>
                <!--middle creat tweet below icons-->
                <div class="flex">
                    <div class="w-10"></div>

                    <div class="w-64 px-2">
                        
                        <div class="flex items-center">
                            <div class="flex-1 text-center px-1 py-1 m-2">
                                <a href="#" class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                  </a>
                            </div>

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#" class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </a>
                            </div>

                         

                            <div class="flex-1 text-center py-2 m-2">
                                <a href="#" class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1">
                        <button class="bg-blue-400 mt-5 hover:bg-blue-600 text-white font-bold py-2 px-2 md:px-8 rounded-full mr-8 float-right" type="submit">
                            Drip
                          </button>
                    </div>
                </div>
</form>
                <hr class="border-blue-800 border-4">
