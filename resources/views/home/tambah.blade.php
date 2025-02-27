@extends('home.template')

@section('title')
    Tambah Data
@endsection

@section('content')

    <form action="{{ route ('save') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="">nama</label>
            <input type="text" name="nama" value="{{old('nama')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('nama')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">email</label>
            <input type="text" name="email" value="{{old('email')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('email')}}</span>
         </div>
         <div class="flex flex-col gap-2">
            <label for="">telpon</label>
            <input type="text" name="telpon" value="{{old('telpon')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('telpon')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Foto</label>
            <input type="file" name="foto" value="{{old('foto')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('foto')}}</span>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 w-1/2 rounded-md text-white p-2 mt-1 hover:bg-blue-400">Simpan</button>
</div>
</form>
@endsection