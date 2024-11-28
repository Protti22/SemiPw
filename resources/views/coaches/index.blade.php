@extends('layouts.base')

@section('content')
    <div class="max-w-7xl mx-auto p-6">
    <a href="{{ url('coaches/create') }}" 
   class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
   New Coach
</a>


        @foreach($coaches as $entity) 
            <div class="bg-white shadow-md rounded-lg p-4 mb-6">
                <h3 class="text-2xl font-semibold text-gray-800">{{ $entity->name }}</h3>
                <p class="text-lg text-gray-600">{{ $entity->type }}</p>
                <p class="text-gray-500">{{ $entity->power }}</p>
                
                <div class="mt-4 flex space-x-4">
                    <a href="{{ url('coaches/'.$entity->id.'/edit') }}" 
                       class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                        Edit
                    </a>

                    <form action="{{ url('coaches/'.$entity->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
