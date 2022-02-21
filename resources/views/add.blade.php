<?php
// Kampu's here
// Thapanapong หล่อเท่
?>
<style>
    .header {
        border-bottom: 10px solid #F4C400;
    }

    #title {
        font-weight: 700;
        font-size: 18px;
    }

    #enter {
        color: #fff;
        background-color: #3054A5;
        cursor: pointer;
        background-position: center;
        transition: background 0.5s;
    }

    #enter:hover {
        background: #47a7f5 radial-gradient(circle, transparent 1%, #47a7f5 1%) center/15000%;
        color: white;
    }
</style>
<x-app-layout>

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
                    <div class="flex-auto text-2xl mb-4">Add New Task</div>

                </div>


                <form method="POST" action="/task">


                    <div class="form-group">
                        <a class="text-left p-3 px-5" id="title" >Create by </a>
                        <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Enter your name'></textarea>
                        @if ($errors->has('description'))
                        <span class="text-danger" style="color: red">The name field is required.</span>
                        @endif
                    </div>
                    <br>
                    <div class="form-group">
                        <a class="text-left p-3 px-5" id="title" >Content</a>
                        <textarea name="model" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Enter your content'></textarea>
                        @if ($errors->has('model'))
                        <span class="text-danger" style="color: red">The content field is required.</span>
                        @endif
                    </div>
                    <br>
                    <div>
                        <button id="enter" style="
                    border-radius: 8px;
                    text-align: right;
                    position: relative;
                    float: right;
              
                    " type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <p>Add Task</p>
                        </button>
                    </div>
                    {{ csrf_field() }}
                </form> 

            </div>
        </div>
    </div>
</x-app-layout>