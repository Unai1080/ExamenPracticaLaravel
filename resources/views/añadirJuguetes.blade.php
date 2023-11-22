@extends('layouts.layoutJuguetes')

@section('main')
    <section class="w-3/4 flex flex-col items-center justify-center mt-5">
            <h1>Añadir Juguete</h1>
            <form action="/catalogo" method="post">
                @csrf
                <p class="m-2">Izena: <input type="text" name="izena" class="border"></p>
                <p class="m-2">Deskripzioa: <input type="text" name="deskripzioa" class="border"></p>
                <p class="m-2">Stock: <input type="text" name="stock" class="border"></p>
                <input type="submit" value="enviar" class="m-2">
            </form>
    </section>
@endsection