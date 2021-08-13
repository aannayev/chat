<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
*{
    word-wrap: break-word
}
body::-webkit-scrollbar {
    width: 1em;
}

body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}

body::-webkit-scrollbar-thumb {
    background-color: darkgrey;
    outline: 1px solid slategrey;
}

        .list-group{
            overflow-y:auto;

            max-height: 300px;
            /*max-width: 350px;*/


        }


        /*ul.list-group:last-child{*/
        /*    margin-bottom: 40px;*/

        /*}*/


.scrollbar-pink::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

.scrollbar-pink::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

.scrollbar-pink::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #ec407a; }

.scrollbar-pink {
    scrollbar-color: #ec407a #F5F5F5;
}

.scrollbar-indigo::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

.scrollbar-indigo::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

.scrollbar-indigo::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #3f51b5; }

.scrollbar-indigo {
    scrollbar-color: #3490dc #F5F5F5;
}

.scrollbar-black::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

.scrollbar-black::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

.scrollbar-black::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #000; }

.scrollbar-black {
    scrollbar-color: #000 #F5F5F5;
}

.scrollbar-lady-lips::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

.scrollbar-lady-lips::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

.scrollbar-lady-lips::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-image: -webkit-gradient(linear, left bottom, left top, from(#ff9a9e), color-stop(99%, #fecfef),
    to(#fecfef));
    background-image: -webkit-linear-gradient(bottom, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);
    background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%); }

.scrollbar-near-moon::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

.scrollbar-near-moon::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

.scrollbar-near-moon::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-image: -webkit-gradient(linear, left bottom, left top, from(#5ee7df), to(#b490ca));
    background-image: -webkit-linear-gradient(bottom, #5ee7df 0%, #b490ca 100%);
    background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%); }

.bordered-pink::-webkit-scrollbar-track {
    -webkit-box-shadow: none;
    border: 1px solid #ec407a; }

.bordered-pink::-webkit-scrollbar-thumb {
    -webkit-box-shadow: none; }

.bordered-indigo::-webkit-scrollbar-track {
    -webkit-box-shadow: none;
    border: 1px solid #3f51b5; }

.bordered-indigo::-webkit-scrollbar-thumb {
    -webkit-box-shadow: none; }

.bordered-black::-webkit-scrollbar-track {
    -webkit-box-shadow: none;
    border: 1px solid #000; }

.bordered-black::-webkit-scrollbar-thumb {
    -webkit-box-shadow: none; }

.square::-webkit-scrollbar-track {
    border-radius: 0 !important; }

.square::-webkit-scrollbar-thumb {
    border-radius: 0 !important; }

.thin::-webkit-scrollbar {
    width: 1px; }



    </style>
</head>
<body>
        <div class="container">

        <div class="row" id="app">
            <div class="offset-4 col-4 mt-4 forscroll scrollbar scrollbar-indigo bordered-indigo square thin col-sm-10 offset-sm-1">
                <li class="list-group-item active">Chat Room <span class="badge badge-pill badge-dark">@{{numberOfUsers}}</span>
                    <a href=""  class="btn btn-outline-light btn-sm ml-5 float-xl-left"  @click.prevent='deleteSession'>Clean chat</a></li>
                <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                <ul class="list-group " v-chat-scroll="{ enable: true }" >

                    <message v-for="value,index in chat.message" :key=value.index :color=chat.color[index] :user=chat.user[index] :time=chat.time[index]>
                        @{{ value }}
                    </message>

                </ul>

                <input  id="myDiv" type="text" class="form-control " placeholder="Type your message here..." v-model="message" @keyup.enter="send">

            </div>



        </div>

            </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script>
            Echo.private('chat')
                .listen('ChatEvent',(e)=>{
                    console.log(e.message);
                    console.log(e.user);
                })

        </script>

</body>
</html>
