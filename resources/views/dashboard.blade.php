<style>
    table {
        table-layout: fixed;
        width: 100%;
    }
    td {
        width: 33.33%;
        text-align: center;
    }
    .flip-card {
        background-color: transparent;
        width: 300px;
        height: 300px;
        perspective: 1000px;
    }
    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }
    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .flip-card-front {
        background-color: #bbb;
        color: black;
    }
    .flip-card-back {
        background-color: #2980b9;
        color: white;
        transform: rotateY(180deg);
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

                </div>
                <br>
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
                    <div class="flex-auto text-2xl mb-4">Members</div>

                </div>

                <table>
                    <!-- <tr>
                        <td>Thapana</td>
                        <td>Second column</td>
                        <td>Third column</td>
                    </tr> -->
                    <tr>
                        <td>
                            <center>
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://firebasestorage.googleapis.com/v0/b/covid19-5c7ef.appspot.com/o/2.jpg?alt=media&token=1687aa9a-4ae5-477b-a40d-c48b6fc8af37" alt="Avatar" style="width:300px;height:300px;">
                                        </div>
                                        <div class="flip-card-back" style="background:#F4C400;">
                                            <br>
                                            <p style="font-weight: 1000; color: #000">NAME
                                            <p>
                                            <p style="color: #000">Thapanapong Sinprommat</p>
                                            <br>
                                            <p style="font-weight: 1000; color: #000">STUDENT ID</p>
                                            <p style="color: #000">6210742257</p>
                                            <br>
                                            <p style="font-weight: 1000; color: #000">MOTTO</p>
                                            <p style="color: #000">One Day At A Time</p>

                                        </div>
                                    </div>
                                </div>
                            </center>
                        </td>

                        <td>
                            <center>
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://firebasestorage.googleapis.com/v0/b/covid19-5c7ef.appspot.com/o/-.png?alt=media&token=3a474c44-824f-4231-b815-3106dc64b3b4" alt="Avatar" style="width:300px;height:300px;">
                                        </div>
                                        <div class="flip-card-back" style="background:#F4C400;">
                                            <br>
                                            <p style="font-weight: 1000; color: #000">NAME
                                            <p>
                                            <p style="color: #000">Nattapon Khajornkasirat</p>
                                            <br>
                                            <p style="font-weight: 1000; color: #000">STUDENT ID</p>
                                            <p style="color: #000">6210742513</p>
                                            <br>
                                            <p style="font-weight: 1000; color: #000">MOTTO</p>
                                            <p style="color: #000">Here there's a will, there's a way</p>

                                        </div>
                                    </div>
                                </div>
                            </center>
                        </td>

                        <td>
                            <center>
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://firebasestorage.googleapis.com/v0/b/covid19-5c7ef.appspot.com/o/22.png?alt=media&token=12feba7e-c002-4a5b-a46a-7b60d24eac8f" alt="Avatar" style="width:300px;height:300px;">
                                        </div>
                                        <div class="flip-card-back" style="background:#F4C400;">
                                            <br>
                                            <p style="font-weight: 1000; color: #000">NAME
                                            <p>
                                            <p style="color: #000">Jirawat Chaichompu</p>
                                            <br>
                                            <p style="font-weight: 1000; color: #000">STUDENT ID</p>
                                            <p style="color: #000">6210742075</p>
                                            <br>
                                            <p style="font-weight: 1000; color: #000">MOTTO</p>
                                            <p style="color: #000">The best proof of love is trust</p>

                                        </div>
                                    </div>
                                </div>
                            </center>
                        </td>

                    </tr>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>