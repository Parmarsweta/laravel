<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <h1>Master</h1>
        </header>
        <nav>
        <a href="/header">Home</a>
        <a href="/about">About</a>
        <a href="/post">Post</a>
        </nav>
        <main>
            <article>
             @yield('content')
            </article>
            <aside>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Post</a></li>
                </ul>
            </aside>
        </main>
        <footer>
            @yield('name')
            swetaparmar3009@gmail.com
        </footer>
    </div>
    
</body>
</html>