      
        
    <div class="max-w-sm rounded-lg bg-blue-800  shadow-lg m-4 mr-20" >
                    <div class="flex">
                        <div class="flex-1 m-2">
                            <h2 class="px-4 py-2 text-sm w-48 font-semibold text-white">Who to follow</h2>
                        </div>
                    </div>

    
                    <hr class="border-gray-600">


                    <!--second person who to follow--> 
                        @foreach(current_user()->isNotFollowing as $user)
                            @break ($loop->index == 2)
                    <div class="flex flex-shrink-0">
                            <a href="{{ route('profile',$user) }}">
                        <div class="flex-1 mb-4 ">
                            <div class="flex items-center w-48">
                                <div>
                                  <img class="inline-block h-10 w-auto rounded-full ml-4 mt-2" src="{{$user->avatar}}" alt="" />
                                </div>
                                <div class="ml-3 mt-3">
                                  <p class="text-base flex leading-6 font-medium text-white">
                                    <span> 
                                 {{ substr($user->name, 0,7) }}...
                                    </span>
                                    <span class="ml-2 inline-flex text-blue-500">
<svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" ><path d="M23,12l-2.44-2.79l0.34-3.69l-3.61-0.82L15.4,1.5L12,2.96L8.6,1.5L6.71,4.69L3.1,5.5L3.44,9.2L1,12l2.44,2.79l-0.34,3.7 l3.61,0.82L8.6,22.5l3.4-1.47l3.4,1.46l1.89-3.19l3.61-0.82l-0.34-3.69L23,12z M10.09,16.72l-3.8-3.81l1.48-1.48l2.32,2.33 l5.85-5.87l1.48,1.48L10.09,16.72z"/></svg>
               
                                    </span>
                                  </p>
                                  <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                    @ShonaDesign
                                  </p>
                                </div>
                              </div>
                            
                        </div>
                            </a>
                        <div class="flex-1 px-4 py-2 m-2 mb-2">
                            <a href="" class=" float-right">
                                <button class="bg-transparent hover:bg-blue-500 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded-full">
                                    Follow
                                  </button>  
                            
                        </div>
                    </div>
                </a>
                    <hr class="border-gray-600">
                    @endforeach
</div>

                   



                    <!--second-trending tweet section-->
                <div class="max-w-sm rounded-lg bg-blue-800 overflow-hidden shadow-lg m-4 mr-20">
                    <div class="flex">
                        <div class="flex-1 m-2">
                            <h2 class="px-4 py-2 text-sm w-48 font-semibold text-white">Trendings</h2>
                        </div>
                        <div class="flex-1 px-4 py-1 m-2">
                            <a href="" class=" text-2xl rounded-full text-white hover:bg-blue-800 hover:text-blue-300 float-right">
                                <svg class="m-2 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </a>
                        </div>
                    </div>

    
                    <hr class="border-gray-600">

                        <!--first trending tweet-->
                    <div class="flex">
                        <div class="flex-1">
                            <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">1 . Trending</p>
                            <h2 class="px-4 ml-2 w-48 font-bold text-white">#Microsoft363</h2>
                            <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">5,466 Tweets</p>
                            
                        </div>
                        <div class="flex-1 px-4 py-2 m-2">
                            <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-blue-800 hover:text-blue-300 float-right">
                                <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                            </a>
                        </div>
                    </div>
                    <hr class="border-gray-600">

                    <!--second trending tweet-->

                    <div class="flex">
                        <div class="flex-1">
                            <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">2 .  Politics . Trending</p>
                            <h2 class="px-4 ml-2 w-48 font-bold text-white">#HI-Fashion</h2>
                            <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">8,464 Tweets</p>
                            
                        </div>
                        <div class="flex-1 px-4 py-2 m-2">
                            <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-blue-800 hover:text-blue-300 float-right">
                                <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                            </a>
                        </div>
                    </div>
                    <hr class="border-gray-600">

                    <hr class="border-gray-600">

                    <!--show more-->

                    <div class="flex">
                        <div class="flex-1 p-4">
                            <h2 class="px-4 ml-2 w-48 font-bold text-blue-400">Show more</h2>  
                        </div>
                    </div>
                
                </div>


                <!--third-people suggetion to follow section-->
                
                                <!--show more-->
</div>