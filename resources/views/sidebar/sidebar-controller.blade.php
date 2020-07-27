

    <div>
 <div class="w-56 p-6 bg-gray-200  rounded">
      <nav class="w-full">
    <div class="mt-6">
@include('_add-tweet')
</div>


<div class="mt-6">

  
    
  <span class="text-gray-500  bg-gray-400 inline-flex rounded">
     
         <div class="ml-3 bg-gray-400 relative">



<div class="flex">

<!-- the user-link on the sidebar -->
@include('user-link')
<!--Modal: Login with Avatar Form-->

<div class="text-center px-2 py-2">

  <a href="" class="text-sm px-2 mt-12 text-decoration-none" data-toggle="modal" data-target="#modalLoginAvatar"><span>
  </span>
    <span class="inline-flex">

    
              <img class="h-8 w-8 -ml-4   rounded-full flex-shrink-0" src="{{auth()->user()->avatar}}" alt="">
       


    <p class="ml-2 mt-1">  {{auth()->user()->name}}</p>

    </span></a>
</div>
</div>
    </nav>
  </div>
</div>