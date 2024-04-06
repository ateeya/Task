@extends('layout')
@section('content')

<div>

    <p class="text-customside text-xl mt-4 mb-4  p-2  "> بيانات المتدرب : {{ $user->name }}  </p>

</div>

<div class="mt-4">
 <p class="font-bold text-customside"> الاسم :</p>
 <p class="mt-2">{{ $user->name }} </p>

</div>
<div class="mt-4">
 <p class="font-bold text-customside"> البريد الإلكتروني :</p>
 <p class="mt-2">{{ $user->email }} </p>

</div>
<div class="mt-4">
 <p class="font-bold text-customside"> العمر : </p>
 <p class="mt-2">{{ $user->age }} </p>

</div>
</div>
<div class="mt-4">
 <p class="font-bold text-customside"> رقم الهاتف :</p>
 <p class="mt-2">{{ $user->phone }} </p>

</div>

<div class="mt-4">
 <p class="font-bold text-customside"> الدورة التدريبية :</p>
 <p class="mt-2">{{ $user->class }} </p>

</div>

@endsection
