@extends('blandes.layout.index')
@section('content')
{{-- start navbar --}}
     <div class="bg-red-200 w-[100vw] h-16 flex items-center justify-between ">
        <div>
            <h1 class="text-[50px] pl-8">HR</h1>
        </div>
      <ul class="flex pr-8 justify-between w-[50vw] navBar">
        <li><a href="#">Home</a></li>
        <li><a href="{{url('blandes/')}}">serves</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">contact</a></li>
      </ul>
      <div class="pr-8 hidden resNav ">
        <i class="fa-solid fa-bars"></i>
      </div>
     </div>
{{-- end navbar --}}

    <div class="w-[80vw] ml-auto mr-auto ">
        <button class=" rounded bg-green-600 p-4 top-8 my-4"><a href="{{url('blandes/create')}}">Add New serves</a></button>
    </div>
    <div class="w-[80vw] ml-auto mr-auto tab"> 
        <table class="ml-auto mr-auto w-[80vw] border" >
            <thead class="text-gray-50 bg-black h-16">
                <tr>
                    <th class="">id</th>
                    <th>name</th>
                    <th>image</th>
                    <th>membres</th>
                    <th>pays</th>
                    <th>date de création</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blandes as $item)
                <tr>
                    <td class="text-center">{{$item['id_bande']}}</td>
                    <td class="text-center">{{$item['nom']}}</td>
                    <td class="text-center">{{$item['image']}}</td>
                    <td class="text-center">{{$item['membres']}}</td>
                    <td class="text-center">{{$item['pays']}}</td>
                    <td class="text-center">{{$item['date_de_création']}}</td>
                    <td class="text-center">
                        {{-- <button class="bg-blue-400 text-gray-50 p-2 rounded w-16"><a href="{{ url('/serves/' . $item['id'])}}">Show</a></button>
                        <button class="bg-green-400 text-gray-50 p-2 rounded w-16"><a href="{{ url('/serves/' . $item['id'] .'/edit')}}">edit</a></button>
                        <button>
                            <form method="POST" action="{{'/serves' .'/'.$item['id']}}" >
                                {{ method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" class="bg-red-900 text-gray-50 p-2 rounded w-16" onclick=" return confirm('confirm delete')">delete</button>
                            </form> 
                        </button> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection