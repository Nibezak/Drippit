<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="  sm:w-full bg-blue-900">

<x-navbar></x-navbar>
    <div class="bg-blue-900 w-full h-auto">
        <div class="flex w-full">

            <div class="hidden md:block text-white h-12  py-4 h-auto" >
                <!--left menu-->
            <div  style="  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;"> 
     @include('_sidebar')
            </div>
              
              
        </div>

            <div class="w-full md:w-full md:ml-4 border border-gray-600 h-auto  border-t-0">
                <!--middle wall-->
{{$slot}}
        </div>


            <div class="hidden md:block  md:ml-8 md:h-12" style=" position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;">
                <!--right menu-->
@include('_rightbar')
        </div>
</div>
</div>

<!-- bootstrap javascript -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
