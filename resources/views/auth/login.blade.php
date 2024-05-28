@extends('auth.template')

@section('title')
    Login
@endsection

@section('content')

@if(session('pesan'))
  <span class="w-full text-red-500 text-2x1">{{session('pesan')}}</span>

@endif

<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
  <div class="w-4/5 bg-cream px-6 pb-8 pt-10 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
    <div class="mx-auto max-w-md">
      <form action="{{route('login')}}" method="post">
        @csrf
        <div class="flex justify-center">
          Halaman Log In
        </div>
        <div class="flex flex-col p-3">
          <label for="">Email</label>
          <input type="email" name="email"class="p-2 border rounded-md">
        </div>
        <div class="flex flex-col p-3">
          <label for="">Password</label>
          <input type="password" name="password" class="p-2 border rounded-md">
        </div>
        <div class="flex justify-end p-3">
          <button class="bg-blue-500 w-1/2 hover:bg-blue-400 text-black p-2 rounded-md" type="submit">Log In</button>
        </div>
        <span>Belum punya akun? <a href="{{route('register')}}">daftar disini </a></span>
      </form>
    </div>
  </div>
</div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
@endsection