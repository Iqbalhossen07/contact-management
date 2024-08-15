<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management Application</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-11/12 mx-auto">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a  class="navbar-brand text-3xl font-medium" href="{{ url('/') }}">
                    Contact Management
                </a>
            </div>
        </nav>

        <main class="py-4">
            @if (session('success'))
                <div class="alert alert-success" id="success-message">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const successMessage = document.getElementById('success-message');
                if (successMessage) {
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                    }, 1000); // 1000 milliseconds = 1 seconds
                }
            });
        </script>

</body>
</html>
