<section class="home-page grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4">
    <div class="overlay"></div>
    <div class="none-cel animate__animated animate__fadeIn flex justify-center">
        <img src="{{asset('img/background.jpg')}}" class="img-home" alt="Imagem de uma mesa com um bolo de casamento branco de 5 andares, com as letras D e S e vasos de flores">
    </div>

    <div class="animate__animated animate__fadeIn p-5 flex flex-col items-center content-home-page">
        <h1 class="title text-center text-8xl dark:text-white sm:text-white lg:text-gray-900 xl:text-gray-900">Vision Feast</h1>
        <p class="text text-center dark:text-white sm:text-white lg:text-gray-900 xl:text-gray-900">
            Especialista⬇️:
            👰casamentos 💒
            🎂debutantes 👸
            Espaço ideal para sua festa 🥳
            Buffet exclusivo
            Pareceria chama 📲
            Orçamentos no link abaixo ⬇️
        </p>
        <div class="flex jusify-center">
            <a href="{{route('budget.new')}}" class="text-center btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Orçamento
            </a>
            <a href="#menu" type="button" class="btn text-white text-center bg-green-400 hover:bg-green-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-green-400 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                Menus
            </a>
        </div>
    </div>
</section>
