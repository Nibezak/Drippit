<x-layout>
            @include('styles')
    <div class="flex-1 bg-blue-900 rounded">
                        <h2 class="px-4 py-2 text-xl hidden sm:block hidden md:block bg-blue-800 font-semibold text-white sticky">{{ ucwords($user->name)}}</h2>

                        
                    </div>
        <div class="p-2">
  <div class="shadow-xl rounded-lg">
    <div style="background-image: url('images/jack.jpg')" class="h-40 bg-gray-200 bg-cover bg-center rounded-t-lg flex items-center justify-center"> 
      
    </div>
    <div>
    <div class="bg-blue-900 rounded-b-lg px-8">
      <div class="relative">
            <img class="right-0 w-16 h-16 rounded-full ml-4 shadow-lg absolute -mt-8" src="{{$user->avatar}}" alt="">
      </div>
      <div class="pt-1 pb-8 mr-4">
        <h1 class="text-xs sm:text-md text-md md:text-md font-semibold mr-4 flex text-gray-300"><p>@</p><p>{{$user->name}}</p></h1>
      </div>
        
        <div class="flex justify-between mt-0 mb-2">
          <button class="text-gray-500 inline-flex">
      <i class="material-icons" style="font-size: 40px;">web</i>
    </button>
    <div class="flex">   
    @if(current_user()->is($user))       
      <button class="bg-blue-500 mr-2 text-gray-200 font-semibold hover:text-gray-300 py-1 px-2  rounded">
                                    Edit
                                  </button>
                                  @endif
                                  @unless(current_user()->is($user))
        <form method="post" action="{{ route('follow',$user->name) }}">
          @csrf
          @if(current_user()->isFollowing($user))
           <button class="bg-blue-600  text-gray-200 font-semibold hover:text-gray-300 py-1 px-2 rounded">
                                    following
                                  </button>
        @else
      <button class="bg-blue-500  text-gray-200 font-semibold hover:text-gray-300 py-1 px-2  rounded">
                                    follow
                                  </button>
        @endif
        </form>
        @endunless
      </div>

        </div>
        <br/> 
      </div>
    </div>
  </div>
</div>
<div style="margin-top: 20px;">
@if(count($user->tweets) == 0)
<div class="flex bg-blue-800 rounded p-4">
  <div class="mr-4">
    <div class="h-10 w-10 text-white bg-blue-600 rounded-full flex justify-center items-center">
      <i class="material-icons">info</i>
    </div>
  </div>
  <div class="flex justify-between w-full">
    <div class="text-blue-600">
      <p class="mb-2 font-bold">
        Ooh!
      </p>
      <p class="text-md text-gray-400">
      Nothing on this Timeline yet!
      </p>
       
    </div>
  </div>
</div>

@endif

   @include('_timeline',['tweets'=>$user->tweets])
  
</div>
</x-layout>