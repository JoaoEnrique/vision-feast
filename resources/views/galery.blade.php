<link rel="stylesheet" href="{{asset('css/galery.css')}}">

<section id="galery" class="grid grid-cols-1">
    <h2 class="title pt-10 pb-10 title text-center text-8xl dark:text-white text-gray-900">Galeria</h2>
    <p class="pb-10 text-center dark:text-white text-gray-900">Clique na imagem para visualizar melhor</p>

    <div class="container-galery">
        <div class="gallery">
            <figure data-modal-target="image" data-modal-toggle="image" onclick="choose_image('{{asset('img/galery/1.webp')}}')" class="gallery__item gallery__item--1">
                <img src="{{asset('img/galery/1.webp')}}" alt="Gallery image 1" class="gallery__img">
            </figure>
            <figure data-modal-target="image" data-modal-toggle="image" onclick="choose_image('{{asset('img/galery/2.webp')}}')" class="gallery__item gallery__item--2">
                <img src="{{asset('img/galery/2.webp')}}" alt="Gallery image 2" class="gallery__img">
            </figure>
            <figure data-modal-target="image" data-modal-toggle="image" onclick="choose_image('{{asset('img/galery/9.jpg')}}')" class="gallery__item gallery__item--3">
                <img src="{{asset('img/galery/9.jpg')}}" alt="Gallery image 3" class="gallery__img">
            </figure>
            <figure data-modal-target="image" data-modal-toggle="image" onclick="choose_image('{{asset('img/galery/4.jpg')}}')" class="gallery__item gallery__item--4">
                <img src="{{asset('img/galery/4.jpg')}}" alt="Gallery image 4" class="gallery__img">
            </figure>
            <figure data-modal-target="image" data-modal-toggle="image" onclick="choose_image('{{asset('img/galery/5.jpg')}}')" class="gallery__item gallery__item--5">
                <img src="{{asset('img/galery/5.jpg')}}" alt="Gallery image 5" class="gallery__img">
            </figure>
            <figure data-modal-target="image" data-modal-toggle="image" onclick="choose_image('{{asset('img/galery/6.jpg')}}')" class="gallery__item gallery__item--6">
                <img src="{{asset('img/galery/6.jpg')}}" alt="Gallery image 6" class="gallery__img">
            </figure>
            <figure data-modal-target="image" data-modal-toggle="image" onclick="choose_image('{{asset('img/galery/7.jpg')}}')" class="gallery__item gallery__item--7">
                <img src="{{asset('img/galery/7.jpg')}}" alt="Gallery image 1" class="gallery__img">
            </figure>
            <figure data-modal-target="image" data-modal-toggle="image" onclick="choose_image('{{asset('img/galery/8.jpg')}}')" class="gallery__item gallery__item--8">
                <img src="{{asset('img/galery/8.jpg')}}" alt="Gallery image 2" class="gallery__img">
            </figure>
            <figure data-modal-target="image" data-modal-toggle="image" onclick="choose_image('{{asset('img/galery/3.webp')}}')" class="gallery__item gallery__item--9">
                <img src="{{asset('img/galery/3.webp')}}" alt="Gallery image 3" class="gallery__img">
            </figure>
            <figure data-modal-target="image" data-modal-toggle="image" onclick="choose_image('{{asset('img/galery/10.jpg')}}')" class="gallery__item gallery__item--10">
                <img src="{{asset('img/galery/10.jpg')}}" alt="Gallery image 4" class="gallery__img">
            </figure>
        </div>
    </div>
</section>


<!-- Large Modal -->
<div id="image" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="p-4 md:p-5 space-y-4 modal-body">
                <img id="img-open-modal" width="100%">
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="image" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Fechar</button>
            </div>
        </div>
    </div>
</div>



