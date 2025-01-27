@extends('layouts.app')

@push('styles')
    @livewireStyles   
@endpush

@push('scripts')
    @livewireScripts 
@endpush

@section('content')
    <div class="container">
        <h1 class="mb-4">Belajar Livewire CRUD</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                @livewire('user-create')          

                {{-- @livewire('user-create', ['lazy' = true]) --}}
            </div>
        </div>
    </div>
@endsection