
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
        <title>posty</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-200">
            <nav class="p-6 bg-white flex justify-between mb-6">
                <ul class="flex items-center">
             
                    <li>
                        <a href="" class="p-3">Home</a>
                    </li>
             
                    <li>
                        <a href="" class="p-3">Dashboard</a>
                    </li>
             
                    <li>
                        <a href="" class="p-3">Post</a>
                    </li>
             
                </ul>
                <ul class="flex items-center">
             
                    <li>
                        <a href="" class="p-3">Abdullah Shaker</a>
                    </li>
             
                    <li>
                        <a href="" class="p-3">login</a>
                    </li>
             
                    <li>
                        <a href="" class="p-3">register</a>
                    </li>
                    <li>
                        <a href="" class="p-3">logout</a>
                    </li>
             
                </ul>
           
            </nav>
            @yield('content')
    </body>
</html>