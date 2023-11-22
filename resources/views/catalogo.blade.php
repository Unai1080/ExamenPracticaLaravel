@extends('layouts.layoutJuguetes')

@section('main')
    <section class="w-3/4 flex flex-col items-center justify-center mt-5">
        <h1>Catalogo</h1>
        <table class="m-2 border border-t border-b border-l border-r p-4">
            <tr class="m-2 flex flex-row items-center justify-stretch text-center">
                <td class="m-2 w-1/5">Izena</td>
                <td class="m-2 w-1/5">Deskripzioa</td>
                <td class="m-2 w-1/5">Stock</td>
                <td class="m-2 w-1/5">Hasiera data</td>
                <td class="m-2 w-1/5">Borrar</td>
            </tr>
            @foreach ($juguetes as $juguete)
            <tr class="m-2 flex flex-row items-center justify-stretch text-center">
                <td class="m-2 w-1/5">{{$juguete->izena}}</td>
                <td class="m-2 w-1/5">{{$juguete->deskripzioa}}</td>
                <td class="m-2 w-1/5">{{$juguete->stock}}</td>
                <td class="m-2 w-1/5">{{$juguete->hasieraData}}</td>
                <td class="m-2 w-1/5">
                    
                    <form action="delete/{{$juguete->id}}" method="post">
                        @csrf
                        <input type="submit" value="borrar" class="bg-red-500 hover:bg-red-200">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </section>
@endsection