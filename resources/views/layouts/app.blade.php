
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>

    <header>
        <h1>Library System</h1>

        <nav>
            @auth
                <a href="/dashboard">Dashboard</a> |
                <a href="/books">Books</a> |
                <a href="/categories">Categories</a> |
                <a href="/members">Members</a> |

                @can('manage-users')
                    <a href="{{ route('users.index') }}">Kelola Pengguna</a> |
                @endcan

                <form action="{{ route('logout') }}" method="POST"
                      style="display: inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </nav>

        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>Library System</p>
    </footer>

</body>
</html>
