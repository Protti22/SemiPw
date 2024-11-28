@extends('layouts.base')

@section('content')
<div class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Edit Pokémon</h2>
    <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                placeholder="Name" 
                value="{{$pokemon->name}}" 
                required 
                class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            >
        </div>

        <div class="mb-4">
            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
            <input 
                type="text" 
                name="type" 
                id="type" 
                placeholder="Type" 
                value="{{$pokemon->type}}" 
                required 
                class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            >
        </div>

        <div class="mb-4">
            <label for="power" class="block text-sm font-medium text-gray-700">Power</label>
            <input 
                type="number" 
                name="power" 
                id="power" 
                placeholder="Power" 
                value="{{$pokemon->power}}" 
                required 
                class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            >
        </div>

        <div class="mt-6">
            <button 
                type="submit" 
                class="w-full py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out"
            >
                Salvar Edição
            </button>
        </div>
    </form>
</div>
@endsection
