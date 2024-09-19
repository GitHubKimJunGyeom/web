ここで書き込みを行います。

<html>
    <head>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <div class="container p-5 ">
        <h1 class="text-2xl">書き込み</h1>
        <form action="/articles" method="POST" class="mt-5">
            <!--
                csfr token生成input 
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">-->
            @csrf
            <input type="text" class="block w-full mb-2 rounded">
            <button class="py-1 px-3 bg-black text-white rounded text-xs">Save</button>
        </form>
    </body>
</html>
