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
        <a class="card">
            <img src="{{ asset('img/categorias/apar.jpg')}}">
            <div class="hovercat">
                <span>Apartamentos</span>
            </div>
        </a>
        <a class="card">
            <img src="{{ asset('img/categorias/casa.jpg')}}">
            <div class="hovercat">
                <span>Casas</span>
            </div>
        </a>
        <a class="card">
            <img src="{{ asset('img/categorias/finca.jpg')}}">
            <div class="hovercat">
                <span>Fincas</span>
            </div>
        </a>
    </section>

    <section class="header" id="header">
        <h1>Aqui esta lo que buscabas!</h1>
        <p>Hogar, dulce hogar! Lorem ipsum dolor sit amet consectetur,</p>
    </section>

    <section class="hogares">
        <a href="" class="card_hogares"></a>
        <a href="" class="card_hogares"></a>
        <a href="" class="card_hogares"></a>
        <a href="" class="card_hogares"></a>
        <a href="" class="card_hogares"></a>
        <a href="" class="card_hogares"></a>
    </section>
</x-app-layout>

<style>
    .hovercat{
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

    .categories .card:hover .hovercat{
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

    .header h1{
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
