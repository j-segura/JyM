<x-app-layout>
    <section class="banner">
        <video src="{{ asset('videos/banner.mp4') }}" muted autoplay loop></video>
        <div class="data">
            <p>En Busca De Un Hogar</p>
            <a href="#header">ver viviendas</a>
        </div>
    </section>

    <section class="header" id="header">
        <h1>¿Que tipo de vivienda buscas?</h1>
        <p>Estas son nuestras opciones disponibles</p>
    </section>

    <section class="categories">
        @foreach ($categorias as $categoria)
            <a class="card" href="{{ route('homes.categoria', $categoria) }}">
                <img src="/img/categorias/{{ $categoria->image }}">
                <div class="hovercat">
                    <span>{{ $categoria->name }}</span>
                </div>
            </a>
        @endforeach
    </section>

    <section class="header" id="header">
        <h1>Aqui esta lo que buscabas!</h1>
        <p>Hogar, dulce hogar! Lorem ipsum dolor sit amet consectetur,</p>
    </section>

    <section class="hogares">
        @foreach ($homes as $home)
            <a href="{{ route('homes.show', $home) }}" class="card_hogares shadow-2xl">
                <img src="img/hogares/{{ $home->image }}">
                <div class="hogar_data">
                    <div class="tags">
                        <span>{{ $home->zone->name }}</span>
                        <span>{{ $home->metrosCuadrados }}m2</span>
                    </div>
                    <h2>{{ $home->name }}</h2>
                    <p>${{ $home->valor }}</p>
                </div>
            </a>
        @endforeach

        <div class="links">
            {{ $homes->links() }}
        </div>

    </section>
</x-app-layout>

<style>
    .links {
        width: 80%;
        margin: auto;
        margin-top: 3rem;
        margin-bottom: 3rem;
    }

    .tags {
        display: flex;
        margin-bottom: 6px;
    }

    .tags span {
        padding: 0px 6px;
        background: rgb(223, 223, 223);
        margin-right: 5px;
        font-size: 0.9rem;
        border-radius: 3px;
    }

    .hogar_data {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .hogar_data h2 {
        font-size: 1.3rem;
        font-weight: 600;
    }

    .hogar_data p {
        font-size: 1.1rem;
        letter-spacing: 1px;
        color: rgb(68, 55, 255);
    }

    .card_hogares {
        width: 300px;
        height: 400px;
        background: rgb(255, 255, 255);
        margin: 20px;
        border-radius: 10px;
        overflow: hidden;
        transition: 0.2s;
    }

    .card_hogares:hover {
        transform: translateY(-5px);
    }

    .card_hogares img {
        width: 100%;
        height: 280px;
        object-fit: cover;
    }

    .hogares {
        display: flex;
        padding: 0 2rem;
        justify-content: center;
        transition: 0.5s;
        flex-wrap: wrap;
    }

    .hovercat {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        visibility: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hovercat span {
        color: #fff;
        border: 1px solid #fff;
        padding: 5px 10px;
        font-size: 1.5rem;
    }

    .categories .card:hover .hovercat {
        visibility: visible;
    }

    .categories {
        display: flex;
        gap: 1rem;
        padding: 0 2rem;
        justify-content: center;
        transition: 0.5s;
    }

    .categories .card {
        background: #666;
        width: 100%;
        min-width: 300px;
        height: 300px;
        position: relative;
    }

    .categories .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .header {
        width: 100%;
        padding: 2rem;
        text-align: center;
    }

    .header h1 {
        color: #111;
        font-size: 2rem;
        font-weight: 500;
    }

    .header p {
        color: #444;
    }

    .banner {
        width: 100%;
        height: 80vh;
        background-color: black;
        position: relative;
    }

    .banner video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.4;
    }

    .banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.4;
    }

    .data {
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-bottom: 100px
    }

    .data p {
        font-size: 3.5rem;
        color: rgb(255, 255, 255);
    }

    .data a {
        padding: 10px 20px;
        border: 1px solid rgb(255, 255, 255);
        color: rgb(255, 255, 255);
        border-radius: 50px;
        margin-top: 20px;
        transition: .3s;
    }

    .data a:hover {
        border: none;
        color: #000;
        background: rgb(255, 255, 255);
        font-weight: 600;
    }
</style>
