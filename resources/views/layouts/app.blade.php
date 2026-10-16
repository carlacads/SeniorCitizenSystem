<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') · SeniorCare</title>
    @isset($slot)
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endisset
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=2">
</head>
<body>
<div class="shell">
    <aside class="sidebar" id="sidebar">
        <a class="brand" href="{{ route('dashboard') }}">
            <span class="brand-mark">
                <svg width="26" height="26" viewBox="0 0 32 32" aria-hidden="true"><path d="M16 26V14" stroke="#1f7a4d" stroke-width="2" stroke-linecap="round" fill="none"/><path d="M16 16c0-4 3-6.500 7.500-6.500 0 4-3 6.500-7.500 6.500zM16 20.500c0-3-2-5-6-5 0 3 2 5 6 5z" fill="#1f7a4d"/></svg>
            </span>
            <span><b>SeniorCare</b><small>Registry &amp; Services</small></span>
        </a>
        <div class="nav-label">WORKSPACE</div>
        <nav>
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><span>▦</span> Dashboard</a>
            <a class="nav-link {{ request()->routeIs('seniors.*') ? 'active' : '' }}" href="{{ route('seniors.index') }}"><span>♙</span> Senior Citizen Registry</a>
            <a class="nav-link {{ request()->routeIs('assistance.*') ? 'active' : '' }}" href="{{ route('assistance.index') }}"><span>☷</span> Assistance Requests</a>
            <a class="nav-link {{ request()->routeIs('benefits.*') ? 'active' : '' }}" href="{{ route('benefits.index') }}"><span>◇</span> Benefits &amp; Distribution</a>
            <a class="nav-link {{ request()->routeIs('reports.*') ? 'active' : '' }}" href="{{ route('reports.index') }}"><span>▤</span> Reports</a>
        </nav>
        <div class="sidebar-bottom">
            <div class="secure-note"><span>✓</span><div><b>Authorized access</b>
            <br>
            <small>For barangay personnel</small></div></div>
            <form method="POST" action="{{ route('logout') }}">@csrf<button class="logout" type="submit">↪ &nbsp; Sign out</button></form>
        </div>
    </aside>
    <main class="main">
        <header class="topbar">
            <button class="menu-toggle" onclick="document.getElementById('sidebar').classList.toggle('open')" aria-label="Toggle navigation">☰</button>
            <div>
                <div class="eyebrow">BARANGAY SERVICES PORTAL</div>
                <div class="top-title">San Ildefonso, Bulacan</div>
            </div>
            <a class="user-chip" href="{{ route('profile.edit') }}" title="My profile">
                <span class="user-avatar">{{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}</span>
                <span><b>{{ auth()->user()->name ?? 'Administrator' }}</b><small>Authorized personnel</small></span>
            </a>
        </header>
        <section class="content">
            @if(session('success'))<div class="alert success">✓ {{ session('success') }}</div>@endif
            @if(session('error'))<div class="alert error">{{ session('error') }}</div>@endif
            @if($errors->any())<div class="alert error">Please review the highlighted fields. {{ $errors->first() }}</div>@endif
            @isset($header)<div class="page-heading"><div>{{ $header }}</div></div>@endisset
            @isset($slot){{ $slot }}@endisset
            @yield('content')
        </section>
        <footer>Senior Citizen Registry, Assistance Request &amp; Benefit Management System <span>•</span> Local government service</footer>
    </main>
</div>
<script>document.querySelectorAll('[data-confirm]').forEach(el=>el.addEventListener('click',e=>{if(!confirm(el.dataset.confirm))e.preventDefault()}));</script>
</body>
</html>
