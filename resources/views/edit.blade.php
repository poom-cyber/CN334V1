<x-app-layout>

<style>
    #title {
        font-size: 18px;
        font-weight: 1000;
    }
    #enter {
        color: #fff;
        background-color: #3054A5;
        cursor: pointer;
        background-position: center;
        transition: background 0.5s;
        border-radius: 8px;
        text-align: right;
        position: relative;
        float: right;
    }

    #enter:hover {
        background: #47a7f5 radial-gradient(circle, transparent 1%, #47a7f5 1%) center/15000%;
        color: white;
    }
    
</style>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        <div class="header" style="background:#3054A5; 
        border-bottom: 10px solid #F4C400;
            padding-top: 18px; 
            padding-Left: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: #fff;
            font-weight: 1000;
            text-shadow: 2px 2px 4px #000000;
            ">
                    <div class="flex-auto text-2xl mb-4">Update Task</div>

                </div>
            <form method="POST" action="/task/{{ $task->id }}">
                <p id="title" >Update name</p>
                <div class="form-group">
                    <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->description }}</textarea>	
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <p id="title" >Update content</p>
                <div class="form-group">
                    <textarea name="model" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->model }}</textarea>	
                    @if ($errors->has('model'))
                        <span class="text-danger">{{ $errors->first('model') }}</span>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <button id="enter" type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update task</button>
                </div>
            {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</x-app-layout>