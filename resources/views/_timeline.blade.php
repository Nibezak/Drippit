@include('tweets/_tweets')



@error('body')

<div id="snackbar">In order to post {{$message}} </div>
@enderror
<script>

  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

</script>
