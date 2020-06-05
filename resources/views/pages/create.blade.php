@extends('pages.layout')
@section('page_content')
<div class="flex justify-end">
    <a href="/home"
      class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 lg:px-4 px-2 rounded-full"
    >Employee List</a>
  </div>
  <div class="w-full mt-2">
    <create-employee/>
  </div>
@endsection