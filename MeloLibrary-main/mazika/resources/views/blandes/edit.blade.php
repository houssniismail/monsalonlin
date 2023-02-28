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
<form action="{{ url('blandes/' .$blandes['id'])}}" method="post">
@csrf
@method("PATCH")
<div class="w-[30vw] ml-auto mr-auto mt-8">
    <div class="text-center py-8 text-[25px]">
        <h1>add new bande</h1>
    </div>
    <div>
     <input class="w-[30vw] h-8 rounded" type="text" placeholder="name..." name="id" value="{{$blandes['id']}}">
    </div>
    <div>
        <input class="w-[30vw] h-8 rounded" type="text" placeholder="name..." name="nom" value="{{$blandes['nom']}}">
       </div>
    <div>
     <input class="w-[30vw] h-8 mt-8 rounded" type="text" placeholder="image..." name="image" value="{{$blandes['image']}}">
    </div>
    <div>
        <input class="w-[30vw] h-8 mt-8 rounded" type="text" placeholder="member..." name="membres" value="{{$blandes['membres']}}">
    </div>
    <div>
        <input class="w-[30vw] h-8 mt-8 rounded" type="text" placeholder="member..." name="pays" value="{{$blandes['pays']}}">
    </div>
    <div>
        <input class="w-[30vw] h-8 mt-8 rounded" type="date" name="date_de_création" value="{{$blandes['date_de_création']}}">
    </div>
    <div>
        <button class="mt-8 p-2 bg-green-600 rounded" type="submit" name="update">add new bande</button>
    </div>
</div>

</form>
@stop