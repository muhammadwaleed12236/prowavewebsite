<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() ?? '' }}">
    <title>PROWAVE TECHNOLOGIES - Custom Software, ERP Systems & Manufacturing Solutions</title>
    <meta name="description" content="Prowave Technologies is a premier software house offering specialized Business ERP Systems, Manufacturing ERP, POS, CRM, Distribution, Pharmacy, Clinic, and HR Payroll software to grow your business.">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
</head>
<body>

    <!-- Custom Interactive Glowing Cursor Follower -->
    <div id="cursor-dot"></div>
    <div id="cursor-ring"></div>

    <!-- Background Canvas Particles -->
    <canvas id="bg-canvas"></canvas>

    <!-- Ambient Glowing Radial Backgrounds -->
    <div class="ambient-glow-1"></div>
    <div class="ambient-glow-2"></div>

    <!-- Sticky Glassmorphism Header Nav -->
    @include('components.navbar')

    <!-- Main Dynamic Content -->
    <main>
        @yield('content')
    </main>

    <!-- Interactive AI Assistant Widget -->
    @include('components.chatbot')

    <!-- Footer -->
    @include('components.footer')

    <!-- JavaScript Engine -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/calculator.js') }}"></script>
    <script src="{{ asset('js/chatbot.js') }}"></script>
</body>
</html>
