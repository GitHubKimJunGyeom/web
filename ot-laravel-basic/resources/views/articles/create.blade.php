ここで書き込みを行います。

<html>
    <head>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <h1>書き込み
        <form action="/articles" method="POST">
            <input type="text">
            <input type="button" value="save">
        </form>
    </body>
</html>
