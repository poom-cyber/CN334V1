<?php
// Kampu's here
// Thapanapong หล่อเท่
?>
<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Task') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div>
            <a href="/allTank" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">See All Task</a>
            <a href="/task" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Task</a>
            <a href="/editTank" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Task</a>
            <a href="/dashboard" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Dashboard</a>
            </div>
            <br>
            <div class="flex">
                <div class="flex-auto text-2xl mb-4">Todo List</div>
            </div>
            
                    
            <form method="POST" action="/task">


                <div class="form-group">
                    <a>New Task name </a>
                    <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter your Task'></textarea>  
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <a>Todo Task</a>
                    <textarea name="model" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter your Model'></textarea>  
                    @if ($errors->has('model'))
                        <span class="text-danger">{{ $errors->first('model') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Task</button>
                </div>
                {{ csrf_field() }}
            </form>
            
        </div>
    </div>
</div>
</x-app-layout>