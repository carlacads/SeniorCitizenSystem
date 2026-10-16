<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SeniorCare – Senior Citizen Registry</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=fraunces:600,700|public-sans:400,500,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .sc-body{margin:0;font-family:"Public Sans",system-ui,-apple-system,"Segoe UI",sans-serif;color:#1d2a22;background:#f3f6f4}
        .sc-wrap{min-height:100vh;display:grid;grid-template-columns:minmax(340px,5fr) 6fr}
        .sc-side{background:#12392a;color:#e8f2ec;padding:44px 48px;display:flex;flex-direction:column;gap:40px}
        .sc-brand{display:flex;align-items:center;gap:10px;font-weight:600;font-size:18px;color:#fff;text-decoration:none}
        .sc-pitch h1{font-family:Fraunces,Georgia,serif;font-size:clamp(30px,3.4vw,44px);line-height:1.12;font-weight:600;margin:0 0 14px;letter-spacing:-.01em;color:#fff}
        .sc-pitch p{margin:0;color:#a9c7b6;max-width:34ch}
        .sc-mods{list-style:none;margin:auto 0 0;padding:0}
        .sc-mods li{display:grid;grid-template-columns:110px 1fr;gap:12px;padding:13px 0;border-top:1px solid #2a5a45;font-size:14px;color:#a9c7b6}
        .sc-mods b{color:#fff;font-weight:600}
        .sc-main{display:grid;place-items:center;padding:32px 20px}
        .sc-card{width:100%;max-width:400px}
        .sc-card h2{font-family:Fraunces,Georgia,serif;font-size:30px;margin:0 0 6px;font-weight:600;color:#12392a}
        .sc-sub{margin:0 0 26px;color:#66746b;font-size:15px}
        .sc-field{margin-bottom:16px}
        .sc-field label{display:block;font-size:14px;font-weight:500;margin-bottom:6px}
        .sc-input{width:100%;padding:11px 13px;border:1px solid #c9d4cd;border-radius:8px;background:#fff;font:inherit;color:inherit}
        .sc-input:focus{outline:3px solid #b9e0cb;border-color:#1f7a4d}
        .sc-pw{position:relative}.sc-pw .sc-input{padding-right:64px}
        .sc-pw button{position:absolute;right:6px;top:50%;transform:translateY(-50%);background:none;border:0;color:#1f7a4d;font:inherit;font-size:13px;font-weight:600;cursor:pointer;padding:6px 8px}
        .sc-row{display:flex;justify-content:space-between;align-items:center;gap:10px;margin:4px 0 20px;font-size:14px}
        .sc-row label{display:flex;align-items:center;gap:8px;cursor:pointer}
        .sc-row input{accent-color:#1f7a4d;width:16px;height:16px}
        .sc-card a{color:#1f7a4d}
        .sc-btn{width:100%;padding:12px;border:0;border-radius:8px;background:#1f7a4d;color:#fff;font:inherit;font-weight:600;font-size:16px;cursor:pointer}
        .sc-btn:hover{background:#17653f}.sc-btn:focus-visible{outline:3px solid #b9e0cb;outline-offset:2px}
        .sc-err{color:#b3261e;font-size:13px;margin:6px 0 0}
        .sc-status{background:#e3f2ea;color:#17653f;padding:10px 12px;border-radius:8px;font-size:14px;margin-bottom:16px}
        .sc-alt{margin:22px 0 0;font-size:14px;color:#66746b}
        .sc-note{margin:26px 0 0;padding-top:16px;border-top:1px solid #dde4df;font-size:13px;color:#66746b}
        @media(max-width:860px){
            .sc-wrap{grid-template-columns:1fr}
            .sc-side{padding:22px 24px;gap:12px}
            .sc-mods{display:none}
            .sc-pitch h1{font-size:24px}
        }
    </style>
</head>
<body class="sc-body">
<div class="sc-wrap">
    <aside class="sc-side">
        <a href="/" class="sc-brand">
            <svg width="34" height="34" viewBox="0 0 32 32" aria-hidden="true"><rect width="32" height="32" rx="8" fill="#e3f2ea"/><path d="M16 26V14" stroke="#1f7a4d" stroke-width="2" stroke-linecap="round" fill="none"/><path d="M16 16c0-4 3-6.500 7.500-6.500 0 4-3 6.500-7.500 6.500zM16 20.500c0-3-2-5-6-5 0 3 2 5 6 5z" fill="#1f7a4d"/></svg>
            SeniorCare
        </a>
        <div class="sc-pitch">
            <h1>Every senior's record, request and benefit in one place.</h1>
            <p>For barangay personnel in San Ildefonso, Bulacan.</p>
        </div>
        <ul class="sc-mods">
            <li><b>Registry</b><span>Keep each senior's record current and searchable.</span></li>
            <li><b>Requests</b><span>Log assistance requests and track their status.</span></li>
            <li><b>Benefits</b><span>Record what was distributed, and to whom.</span></li>
            <li><b>Reports</b><span>Print or export by barangay.</span></li>
        </ul>
    </aside>
    <main class="sc-main">
        <div class="sc-card">
            {{ $slot }}
        </div>
    </main>
</div>
</body>
</html>
