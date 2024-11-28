@extends('layouts.base')

@section('content')
<div class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Create Coach</h2>
    <form action="{{ url('coaches') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                placeholder="Name" 
                required 
                class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            >
        </div>

        <div class="mb-4">
            <button type="submit" class="w-full py-2 bg-blue-500 text-white font-semibold rounded-md shadow-sm hover:bg-blue-600">
                Create Coach
            </button>
        </div>
    </form>
</div>
@endsection
