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
            
            <!--바디에 에러가 있으면 여기를 표시-->
            @error('body')
                <p class="text-xs text-red-500 mb-3" >{{ $message }}</p>
            @enderror
            <button class="py-1 px-3 bg-black text-white rounded text-xs">Save</button>
        </form>
        <!--배열 형태로 반환-->
        {{ dd($errors->all()) }}
        <!--불값을 반환-->
        {{ dd($errors->any()) }}

        <?php if($errors->any()): ?>
        {{ dd($errors->any()) }}
        <?php endif ?>
        <!--특정 필드의 첫번쨰 에러만 반환-->
        {{ dd($errors->first('body')) }}
        
        <!--올은 다 가져오지만 겟은 특정 필드지정한것만 가져옴-->
        {{ dd($errors->get('body')) }}
        {{-- <?php echo dd($error); ?> --}}

    </body>
</html>
