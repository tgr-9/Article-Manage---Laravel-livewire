@extends('rapyd-demo::master')

@section('title','Demo')


@section('content')


    <h3>Users</h3>

    @livewire('rapyd::demo-users-table')


    <div v-pre class="documenter mt-2">
        {!! \Zofe\Rapyd\Demo\Documenter::showMethod("Zofe\\Rapyd\\Demo\\Http\\Livewire\\UsersTable", ["getDataSet", "render"]) !!}
    </div>
    <div v-pre class="documenter mt-2">
        {!! \Zofe\Rapyd\Demo\Documenter::showCode("resources/views/livewire/users/table.blade.php", true) !!}
    </div>


@endsection
