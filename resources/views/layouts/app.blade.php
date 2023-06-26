<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <h1>My App</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/About">About</a></li>
                    <li><a href="/Contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            &copy; 2023 Izumi
        </footer>
    </body>
</html>