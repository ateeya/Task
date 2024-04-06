@extends('layout')
@section('content')


<div>

    <p class="text-customside text-xl mt-4 mb-4  p-2  "> عرض المتدربين </p>

</div>

<div>

<table class=" lg:w-3/4   sm:w-56   p-3 ">

    <thead class="   border-t-2 border-b-2  border-gray-200  roxlunded-  ">
<th class="p-2"> اسم المتدرب</th>
<th> رقم الهاتف </th>
<th> الدورة التدريبية </th>
<th> </th>
<th> </th>


    </thead>
     <tbody  >

@foreach ($users as $user)


<tr class="hover:bg-gray-100 hover:cursor-auto">



        <td class="p-3  hover:cursor-default" >
{{ $user->name }}

        </td>

        <td class="p-3  hover:cursor-default">
{{ $user->phone }}

        </td>

        <td class="p-3  hover:cursor-default  hover:drop-shadow-xl " >
{{ $user->class }}

        </td>

        <td class="">


<a  href="{{ route('trainer.edit',[$user->id]) }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="gray" class="w-4 h-4 hover:fill-black">
                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
              </svg>
</a>
        </td>
        <td>

            <a  href="{{ route('trainer.show',[$user->id]) }}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="gray" class="w-4 h-4 hover:fill-black">
                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
              </svg>
            </a>

        </td>
        <td>
            <form method="post" action="{{route('trainer.destroy',$user->id)}}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm text-red-300 hover:text-red-600 " onclick="return confirm('هل انت متاكد من حذف هذا المتدرب؟');">حذف</button>
            </form>
        </td>

    </tr>
     </tbody>
    </div>
     @endforeach
</table>

</div>




@endsection
