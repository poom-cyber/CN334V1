<style>
    .header {
        border-bottom: 10px solid #F4C400;
    }
    tr {
        font-size: 18px;
    }
    table {
        background: #F1F1F1;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div>
                    <a href="/allTank" class="hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onMouseOver="this.style.background='#3054A5' ,this.style.color='#fff'" onMouseOut="this.style.background='#F4C400',this.style.color='#000'" style="background:#F4C400; 
                        border-radius: 8px;
                        border: 2px solid #2A2F3C;
                        padding: 5px;
                        margin: 10px;
                        color: #000;
                        font-weight: 1000;
                        font-size: 18px;
                        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
                        ">See All Task</a>

                    <a href="/task" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onMouseOver="this.style.background='#3054A5' ,this.style.color='#fff'" onMouseOut="this.style.background='#F4C400',this.style.color='#000'" style="background:#F4C400; 
                        border-radius: 8px;
                        border: 2px solid #2A2F3C;
                        padding: 5px;
                        margin: 10px;
                        color: #000;
                        font-weight: 1000;
                        font-size: 18px;
                        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
                        ">Add New Task</a>

                    <a href="/editTank" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onMouseOver="this.style.background='#3054A5' ,this.style.color='#fff'" onMouseOut="this.style.background='#F4C400',this.style.color='#000'" style="background:#F4C400; 
                        border-radius: 8px;
                        border: 2px solid #2A2F3C;
                        padding: 5px;
                        margin: 10px;
                        color: #000;
                        font-weight: 1000;
                        font-size: 18px;
                        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
                        ">Edit Task</a>

                    <a href="/dashboard" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onMouseOver="this.style.background='#3054A5' ,this.style.color='#fff'" onMouseOut="this.style.background='#F4C400',this.style.color='#000'" style="background:#F4C400; 
                        border-radius: 8px;
                        border: 2px solid #2A2F3C;
                        padding: 5px;
                        margin: 10px;
                        color: #000;
                        font-weight: 1000;
                        font-size: 18px;
                        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
                        ">Dashboard</a>

                </div>
                <br>

                <div class="header" style="background:#3054A5; 
            padding-top: 18px; 
            padding-Left: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: #fff;
            font-weight: 1000;
            text-shadow: 2px 2px 4px #000000;
            ">
                    <div class="flex-auto text-2xl mb-4">Todo List</div>

                </div>

                <table class="w-full text-md rounded mb-4">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Create by</th>
                            <th class="text-left p-3 px-5">Content</th>
                            <th class="text-left p-3 px-5">Create date</th>
                            <th class="text-left p-3 px-5">Update date</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach(auth()->user()->tasks as $task)
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5">
                                {{$task->description}}
                            </td>
                            <td class="p-3 px-5">
                                {{$task->model}}
                            </td>
                            <td class="p-3 px-5">
                                {{$task->created_at}}
                            </td>
                            <td class="p-3 px-5">
                                {{$task->updated_at}}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>