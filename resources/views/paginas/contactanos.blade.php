@extends('welcome')

@section('contenido')

<div class="flex flex-col items-center justify-between px-4 py-12 mx-auto max-w-7xl md:flex-row ">
    <div class="mx-auto">
        <div class="flex mx-auto max-w-7xl">
            <div id="formulario_contactenos" class="my-3 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8 border-2 border-black">
            <form method="POST" action="{{ route('contactanos')}}" class="formulario-crear" id="formulario-crear">
                @csrf
                @method('POST')
                <div class=" mx-auto md:flex">
                    <div class="container border-black md:border-r-4 pr-10">
                        <h1 class="font-bold text-black text-center text-3xl py-3">Contactanos</h1>
                        <hr class=" text-white pb-2">
                        <p class="text-zinc-800">los campos con (*) son obligatorios</p>
                        <label for="nombre" class="block mb-2 text-l font-medium text-black dark:text-black">Nombre *:</label>
                        <input type="text" placeholder="nombre" name="nombre" id="nombre" class=" border-2 border-gray-300 rounded-full text-black text-m rounded-lg  block w-full p-2.5  dark:border-gray-600 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-black" required>
                        <label for="numero" class="block mb-2 text-l font-medium text-black dark:text-black">Numero celular *:</label>
                        <input type="text" placeholder="3124567890" name="numero" id="numero" class=" border-2 border-gray-300 rounded-full text-black text-m rounded-lg  block w-full p-2.5  dark:border-gray-600 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-black" required>
                        <label for="email" class="block mb-2 text-l font-medium text-black dark:text-black">Correo *:</label>
                        <input type="email" placeholder="* example@mail.com" name="email" id="email" class="border-2 border-gray-300 rounded-full text-black text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-black" required>
                        <label for="info" class="block mb-2 text-l font-medium text-black dark:text-black">¿Quieres contarnos algo adicional? (Maximo 200 caracteres):</label>
                        <textarea name="info" id="info" class= "border-2 border-gray-300 text-black text-m rounded-l  block w-full p-2.5  dark:border-gray-600 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-black"></textarea>
                        <button type="submit" class="text-black bg-transparent border-black border-2 font-medium rounded-full text-m px-5 py-2.5 text-center w-full mt-2 hover:text-white ">solicitar informacion</button>
                    </div>
                    <div class="md:pl-10 mx-3 my-3">
                    <h1 class="text-3xl font-bold text-center text-gray-900">Contactanos</h1>
                    <p class="text-base text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum reprehenderit sed quod libero ut aspernatur distinctio a sit necessitatibus accusantium! Eum alias et consequatur ut corrupti nostrum quod officia aliquid?</p>
                    </div>
                </div>
            </form>
            </div>
            <div>

            </div>
        </div>



</div>
</div>

@endsection
