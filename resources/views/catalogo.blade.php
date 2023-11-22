@extends('layouts.layoutJuguetes')

@section('main')
    <section class="w-3/4 flex flex-col items-center justify-center mt-5">
        <h1>Catalogo</h1>
        <table class="m-2 border border-t border-b border-l border-r p-4">
            <tr class="m-2 flex flex-row items-center justify-stretch text-center">
                <td class="m-2 w-1/4">Izena</td>
                <td class="m-2 w-1/4">Deskripzioa</td>
                <td class="m-2 w-1/4">Stock</td>
                <td class="m-2 w-1/4">Hasiera data</td>
            </tr>
            @foreach ($juguetes as $juguete)
            <tr class="m-2 flex flex-row items-center justify-stretch text-center">
                <td class="m-2 w-1/4">{{$juguete->izena}}</td>
                <td class="m-2 w-1/4">{{$juguete->deskripzioa}}</td>
                <td class="m-2 w-1/4">{{$juguete->stock}}</td>
                <td class="m-2 w-1/4">{{$juguete->hasieraData}}</td>
            </tr>
            @endforeach
        </table>
    </section>
@endsection