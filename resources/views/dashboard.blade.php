
@extends('app')

@section('estilo')
  @livewireStyles
@endsection

@section('contenido')

<x-app-layout>
    <div class="py-12">
        @include('plantilla.smallBoxes')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}


                    @livewire('persona')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection

@section('script')
  @livewireScripts
@endsection
