@extends('layouts.app')

@section('content')
    <main class=" min-h-screen">
        @include('layouts.navigation')


<div class="relative overflow-x-auto min-h-screen">
    <h1 class="text-center text-5xl mb-10 dark:text-white sm:text-white lg:text-gray-900 xl:text-gray-900" style="margin-top:150px">Orçamentos</h1>
    <div class="table-budget dark:bg-gray-800 bg-gray-50">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Telefone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Data aproximada
                    </th>
                    <th scope="col" class="px-6 py-3">
                        N° aproximado de pessoas
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($budgets as $budget)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$budget->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$budget->email}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $budget->phone}}
                        </td>
                        <td class="px-6 py-4">
                            {{ date('d/m/Y', strtotime($budget->date)) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $budget->quantity_people }}
                        </td>
                    </tr>
                @empty
                    <h1>Nenhum Orçamento encontrado</h1>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

        @include('layouts.footer')
    </main>
@endsection
