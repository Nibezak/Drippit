<x-layout>

@include('_add-tweet')

@if(count($tweets) == 0 )
<div class="p-8">
  <div class="bg-blue-800 rounded-lg ">
    <div class="p-10">
      <div>
       <!-- Insert your svg or image here -->
      </div>
      <div class="mt-8 text-center">
        <h1 class="font-bold text-lg text-gray-300 mb-1">Welcome </h1>
        <p class="text-gray-400 text-lg block sm:hidden md:hidden">Do you want to get started?</p>
        <p class="text-gray-400 hidden sm:block md:block ">You Have not Posted yet, and you do not follow anyone yet!</p>
        <button class="mt-6 bg-blue-500 hover:bg-blue-400 text-white rounded-full px-2 py-2 shadow-xl focus:outline-none">
          Get started
        </button>
      </div>
    </div>
  </div>
</div>

@endif
@include('_timeline')

</x-layout>