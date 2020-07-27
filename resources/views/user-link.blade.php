       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header ml-4">

        <img src="{{auth()->user()->avatar}}" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-4">{{auth()->user()->name}}</h5>
<a class="block  text-decoration-none px-4 py-2 hover:bg-gray-200 rounded  transition duration-150 ease-in-out cursor-pointer" href="{{route('profile',auth()->user())}}">
Profile
</a>
<a class="block  text-decoration-none px-4 py-2 hover:bg-gray-200 rounded  transition duration-150 ease-in-out cursor-pointer">
Settings
</a>
        <div class="md-form ml-0 mr-0">
           <a class="block text-decoration-none px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" role="menuitem"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                            @csrf
                                      Sign out
                                        </form>
                                    </a>
        </div>

        
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>