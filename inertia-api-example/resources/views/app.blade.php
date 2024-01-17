<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ... (existing head content) ... -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @routes
</head>
<body class="font-sans antialiased">
    @inertia
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
