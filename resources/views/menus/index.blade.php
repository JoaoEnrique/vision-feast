<section id="menu" class="animate__animated animate__fadeIn menus dark:bg-gray-800 bg-gray-50">
        <h2 class="title pt-10 pb-10 title text-center dark:text-white text-gray-900 text-8xl">Menus</h2>

    <div class="menus-card flex cursor-pointer justify-stretch gap-4 mt-10">
        <div data-modal-target="coquetel-1" data-modal-toggle="coquetel-1" class="flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700">
            <x-svg-food/>
            <h5 class="text-2xl font-bold tracking-tight text-gray-700 dark:text-white">Coquetel nº 01</h5>
        </div>

    <div data-modal-target="coquetel-2" data-modal-toggle="coquetel-2" class="flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <x-svg-food/>
            <h5 class="text-2xl font-bold tracking-tight text-gray-700 dark:text-white">Coquetel nº 02</h5>
        </div>
        <div data-modal-target="coquetel-vision" data-modal-toggle="coquetel-vision" class="flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <x-svg-food/>
            <h5 class="text-2xl font-bold tracking-tight text-gray-700 dark:text-white">Coquetel Vision Feast</h5>
        </div>
        <div data-modal-target="churrasco" data-modal-toggle="churrasco" class="flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <x-svg-food/>
            <h5 class="text-2xl font-bold tracking-tight text-gray-700 dark:text-white">Churrasco</h5>
        </div>
        <div data-modal-target="massas" data-modal-toggle="massas" class="flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <x-svg-food/>
            <h5 class="text-2xl font-bold tracking-tight text-gray-700 dark:text-white">Massas</h5>
        </div>
    </div>
</section>

@include('menus.modals')
