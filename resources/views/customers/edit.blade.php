@extends('layout')

@section('content')
    <h1 class="block mb-4">Edit Client</h1>
    <div class="mb-4">
        <a href="{{ action('CustomersController@index') }}" class="bg-blue no-underline text-white rounded cursor-pointer p-2">Back</a>
    </div>
    @include('errors.list')
    @include('partials._messages')
    <div class="">
        <div class="w-1/2">
            <div class="bg-white rounded shadow py-4 px-4">
                {!! Form::model($customer, ['method'=>'PUT', 'action' => ['CustomersController@update', $customer->id]]) !!}
                {!! Form::hidden('person_type') !!}
                @include('customers._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    {{--<div></div>--}}
@stop
