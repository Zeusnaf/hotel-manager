@extends('layout')

@section('content')
    <h1 class="text-grey-dark my-4">Clientes</h1>
    <div class="block mb-4 clearfix">
        <a href="{{ action('CustomersController@create') }}" class="bg-blue rounded py-2 px-2 no-underline text-blue-lighter float-right">Add New</a>
    </div>
    @include('errors.list')
    @include('partials._messages')
    <div class="block">
        <table class="bg-white rounded shadow w-full">
            <thead class="">
            <tr class="text-left border-b  border-grey-light">
                <th class="px-2 py-2">#</th>
                <th>Name</th>
                <th>Document</th>
                <th>Phone</th>
                <th>Cliente desde</th>
                <th align="right" class="pr-2">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td class="px-2 py-2">{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->person->cpf or $customer->person->cnpj }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->created_at->format("d/m/Y") }}</td>
                    <td class="align-middle pr-2" align="right">
                        <a href="{{ action('CustomersController@edit', $customer->id) }}" class="mr-2 text-blue-light">
                            <span class="fa fa-edit"></span>
                        </a>
                        <a href="#" onclick="event.preventDefault();document.getElementById('deleteForm{{$customer->id}}').submit()" class="mr-2 text-red-light">
                            <span class="fa fa-trash"></span>
                        </a>
                        <form id="deleteForm{{ $customer->id }}" action="{{ action('CustomersController@destroy', $customer->id) }}">
                            {{ csrf_field() }}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {!! $customers->render() !!}
@stop
