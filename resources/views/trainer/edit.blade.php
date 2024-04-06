@extends('layout')
@section('content')

<div>

    <p class="text-customside text-xl mt-4 mb-4 bg-fuchsia-50 p-2 pr-8 font ">  تعديل متدرب  </p>

</div>

<div class=" w-1/4">

    <form method="POST" action="/trainer/{{ $user->id }}">
        @csrf
        @method('PUT')


<div class="grid col-1 gap-2 mt-2 ">

    <label for="name" class="pl-4  text-lg "  > الاسم</label>
    <input type="text" name="name" value="{{$user->name}}" class=" p-1 border border-gray-300 bg-gray-50 rounded-md hover:bg-gray-300 focus:ring-customnav focus:outline-none  focus:ring-2   ">

</div>

<div class="grid col-1  gap-2 mt-2">

    <label for="age" class="pl-4"  > العمر</label>
    <input type="text" name="age"  value="{{$user->age}}"  class="min-w-64 p-1 border border-gray-300 bg-gray-50 rounded-md hover:bg-gray-300 focus:ring-customnav focus:outline-none  focus:ring-2   ">

</div>


<div class="grid col-1  gap-2 mt-2">
    <label for="phone"  class="pl-4" > رقم الهاتف</label>
    <input type="text" name="phone"  value="{{$user->phone}}" class="min-w-64 p-1 border border-gray-300 bg-gray-50 rounded-md hover:bg-gray-300 focus:ring-customnav focus:outline-none  focus:ring-2   ">

</div>

<div class="grid col-1  gap-2 mt-2">
    <label for="email"  class="pl-4" > البريد الإلكتروني</label>
    <input type="email" name="email"  value="{{$user->email}}"  class="min-w-64 p-1 border border-gray-300 bg-gray-50 rounded-md hover:bg-gray-300 focus:ring-customnav focus:outline-none  focus:ring-2   ">

</div>



<div class="grid col-1  gap-2 mt-2">

    <label for="class" class="pl-4"  > الدورة التدريبية </label>
    <input type="text" name="class"  value="{{$user->class}}"  class="min-w-64 p-1 border border-gray-300 bg-gray-50 rounded-md hover:bg-gray-300 focus:ring-customnav focus:outline-none  focus:ring-2   ">

</div>



    <button type="submit" class=" w-28 bg-green-700 rounded-md p-2 mt-6 text-white" > تعديل</button>

</div>
</form>
@endsection
