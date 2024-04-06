<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <title>عرض المتدربين</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">


</head>
<body dir="rtl" class="font-Cairo" >
<nav class=" fixed top-0 w-screen h-14 z-50  bg-gray-200 shadow-xl ">


</nav>
<aside class="  fixed top-0 z-40 h-screen w-1/6 right-0 pl-1 pr-0 pt-20  font-Cairo bg-customside text-white justify-center  ">

    <ul class="hover:cursor-pointer w-full  text-center">


        <a href="{{ route('trainer.create') }}">
<li class="  text-l rounded-l hover:bg-customhover shadow-lg p-3">
   اضافة متدرب
</li></a>

<a href="{{ route('trainer.index') }}">
<li class="  text-l rounded-l hover:bg-customhover shadow-lg p-3">
   عرض المتدربين
</li></a>



    </ul>

</aside>
<main class=" p-4 mt-16 left-0 text-right sm:mr-72 ">

@yield('content')


</main>


</body>
</html>
