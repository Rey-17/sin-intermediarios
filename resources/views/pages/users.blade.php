@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h3>{{ $titulo }}</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($usuarios as $i => $user)
                    <tr>
                        <th>{{ $i + 1 }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>
                            <a href="{{ route('adm.users.edit', ['id' => $user->id]) }}"><i class="far fa-edit"></i></a>
                        </th>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection