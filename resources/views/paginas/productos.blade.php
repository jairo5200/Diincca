@extends('welcome')

@section('contenido')

    <section class="px-4 py-24 mx-auto max-w-7xl blanco-fondo">
    <h1 class="mb-3 text-4xl font-bold text-center text-zinc-950 md:leading-tight md:text-5xl" itemprop="headline">
        Productos
    </h1>

  <p class="mb-10 font-bold text-2lg text-amber-950">Comes directly from the desk of engineers, creators and managers at Skcript.</p>
  <p class="mb-10 font-bold text-lg text-red-950">Comes directly from the desk of engineers, creators and managers at Skcript.</p>
  <p class="mb-10 font-bold text-lg text-zinc-950">Comes directly from the desk of engineers, creators and managers at Skcript.</p>
  <p class="mb-10 font-bold text-lg text-orange-950">Comes directly from the desk of engineers, creators and managers at Skcript.</p>
  <p class="mb-10 font-bold text-lg text-white">Comes directly from the desk of engineers, creators and managers at Skcript.</p>
  <p class="mb-10 font-bold text-lg text-orange-700">Comes directly from the desk of engineers, creators and managers at Skcript.</p>
  <p class="mb-10 font-bold text-lg text-amber-500">Comes directly from the desk of engineers, creators and managers at Skcript.</p>
  <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
    <div class="card-container">
    <h2 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900">Café</h2>
        <div class="card">
            <div class="img-content" style="background-image: url('/imagen/cafe1.jpg')">
            </div>
            <div class="content">
                <p class="heading">Café</p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipii
                voluptas ten mollitia pariatur odit, ab
                minus ratione adipisci accusamus vel est excepturi laboriosam magnam
                necessitatibus dignissimos molestias.
                </p>
            </div>
        </div>
    </div>
    <div class="card-container my-20">
    <h2 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900">Maíz</h2>
        <div class="card">
            <div class="img-content" style="background-image: url('/imagen/maiz1.jpg')">
            </div>
            <div class="content">
                <p class="heading">Maíz</p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipii
                voluptas ten mollitia pariatur odit, ab
                minus ratione adipisci accusamus vel est excepturi laboriosam magnam
                necessitatibus dignissimos molestias.
                </p>
            </div>
        </div>
    </div>
    <div class="card-container">
    <h2 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900">Frijol</h2>
        <div class="card">
            <div class="img-content" style="background-image: url('/imagen/frijol1.jpg')">
            </div>
            <div class="content">
                <p class="heading">Frijol</p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipii
                voluptas ten mollitia pariatur odit, ab
                minus ratione adipisci accusamus vel est excepturi laboriosam magnam
                necessitatibus dignissimos molestias.
                </p>
            </div>
        </div>
    </div>
    <div class="card-container my-20">
    <h2 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900">Cacao</h2>
        <div class="card">
            <div class="img-content" style="background-image: url('/imagen/cacao1.jpg')">
            </div>
            <div class="content">
                <p class="heading">Cacao</p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipii
                voluptas ten mollitia pariatur odit, ab
                minus ratione adipisci accusamus vel est excepturi laboriosam magnam
                necessitatibus dignissimos molestias.
                </p>
            </div>
        </div>
    </div>
    <div class="card-container">
    <h2 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900">Maní</h2>
        <div class="card">
            <div class="img-content" style="background-image: url('/imagen/mani1.jpg')">
            </div>
            <div class="content">
                <p class="heading">maní</p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipii
                voluptas ten mollitia pariatur odit, ab
                minus ratione adipisci accusamus vel est excepturi laboriosam magnam
                necessitatibus dignissimos molestias.
                </p>
            </div>
        </div>
    </div>
    <div class="card-container my-20">
    <h2 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900">Ejemplo</h2>
        <div class="card">
            <div class="img-content" style="background-image: url('/imagen/imagen1.jpg')">
            </div>
            <div class="content">
                <p class="heading">Ejemplo</p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipii
                voluptas ten mollitia pariatur odit, ab
                minus ratione adipisci accusamus vel est excepturi laboriosam magnam
                necessitatibus dignissimos molestias.
                </p>
            </div>
        </div>
    </div>
  </div>
</section>

@endsection
