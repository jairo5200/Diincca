@extends('welcome')

@section('contenido')

    <section class="px-4 py-4 mx-auto max-w-7xl blanco-fondo bg-white">
    <h1 class="mb-3 text-4xl font-bold text-center text-gray-900 md:leading-tight md:text-5xl" itemprop="headline">
        Productos
    </h1>

  <p class="mb-20 text-lg text-gray-900">Comes directly from the desk of engineers, creators and managers at Skcript.</p>
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
