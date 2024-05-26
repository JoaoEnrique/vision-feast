@extends('layouts.app')

@section('content')
        @include('layouts.navigation')


<div class="relative min-h-screen" style="min-height: 70vh!important">
    <h1 class="text-center text-5xl mb-10 dark:text-white sm:text-white lg:text-gray-900 xl:text-gray-900" style="margin-top:150px">Orçamentos</h1>
    <div class="table-budget dark:bg-gray-800 bg-gray-50 overflow-x-auto">
        @if(count($budgets))
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Respondido
                        </th>
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
                        <th scope="col" class="px-6 py-3">
                            Ação
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($budgets as $budget)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th id="icon-analyzed-{{$budget->id}}" scope="row" class="flex justify-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                @if ($budget->analyzed)
                                    <svg height="35px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="size-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                @else
                                    <svg height="35px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                @endif
                            </th>

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
                            <td class="px-6 py-4">
                                <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @else
            <h1 class="p-5 text-center text-3xl dark:text-white sm:text-white lg:text-gray-900 xl:text-gray-900">Nenhum Orçamento encontrado</h1>
        @endif
    </div>
</div>
@include('layouts.footer')

@foreach ($budgets as $budget)
    <!-- Dropdown menu -->
    <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
            @if ($budget->analyzed)
                <li>
                    <a  id="text-analyzed-{{$budget->id}}" onclick="markAnswered({{$budget->id}})" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Não Respondido</a>
                </li>
            @else
                <li>
                    <a id="text-analyzed-{{$budget->id}}" onclick="markAnswered({{$budget->id}})" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Respondido</a>
                </li>
            @endif
          <li>
        </ul>
    </div>

    @endforeach
@endsection


<script>
    function markAnswered(id){
        $.ajax({
            method: 'GET',
            url: '/mark-answered',
            data: {'id': id},

            success: result =>{
                console.log('====================================');
                console.log(result);
                console.log('====================================');
                if(result.success){
                    if(result.type){
                        icon = `
                            <svg height="35px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="size-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        `
                    }else{
                        icon = `
                        <svg height="35px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                        `
                    }

                    location.reload()
                }
                // else
                //     alert('Erro, tente novamente mais tarde')
            },


            error: error =>{
                alert('Erro, tente novamente mais tarde')
            }
        })
    }
</script>
