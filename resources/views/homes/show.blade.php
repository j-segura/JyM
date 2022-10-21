<x-app-layout>
    <section class="show_view">
        <div class="show">
            <figure>
                <img src="/img/hogares/{{ $home->image }}">
            </figure>
            <div class="show_data">
                <h1>{{ $home->name }}</h1>
                <h3 class="ubicacion">{{ $home->location->name }}</h3>
                <p><strong>metros cuadrados:</strong> {{ $home->metrosCuadrados }}</p>
                <p><strong>direcion:</strong> {{ $home->direccion }}</p>
                <h1 class="valor"><span>Valor:</span> {{ $home->valor }}</h1>
                <a href="">Contactar vendedor</a>
            </div>
        </div>
        <div class="descripcion">
            {{ $home->descripcion }}
        </div>
    </section>
</x-app-layout>

<style>
    .show_data {
        font-size: 1.2rem;
    }

    .valor {
        margin-top: 3rem;
        font-size: 2rem;
        font-weight: 500;
    }

    .show_data a{
        padding: 10px 1.3rem;
        background: #ffc64b;
        border-radius: 50px;
    }

    .show_data h1{
        font-size: 2.3rem;
        font-weight: 500;
        margin-bottom: 1rem;
    }

    .descripcion {
        margin-top: 2rem;
        font-size: 1.2rem;
    }

    .show_view {
        padding: 3rem;
    }

    .show {
        display: grid;
        grid-template-columns: 3fr 2fr;
        gap: 1rem;
    }

    .show figure {
        width: 100%;
        height: 400px;
    }

    .show figure img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
