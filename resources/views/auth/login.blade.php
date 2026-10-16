<x-guest-layout>
    <h2>Sign in</h2>
    <p class="sc-sub">Use your barangay account to continue.</p>

    @if (session('status'))
        <div class="sc-status">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="sc-field">
            <label for="email">Email</label>
            <input id="email" class="sc-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email') <p class="sc-err">{{ $message }}</p> @enderror
        </div>

        <div class="sc-field">
            <label for="password">Password</label>
            <div class="sc-pw">
                <input id="password" class="sc-input" type="password" name="password" required autocomplete="current-password">
                <button type="button" onclick="var p=document.getElementById('password');var s=p.type==='password';p.type=s?'text':'password';this.textContent=s?'Hide':'Show'">Show</button>
            </div>
            @error('password') <p class="sc-err">{{ $message }}</p> @enderror
        </div>

        <div class="sc-row">
            <label for="remember_me"><input id="remember_me" type="checkbox" name="remember"> Keep me signed in</label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot password?</a>
            @endif
        </div>

        <button type="submit" class="sc-btn">Sign in</button>
    </form>

    @if (Route::has('register'))
        <p class="sc-alt">No account yet? <a href="{{ route('register') }}">Create one</a></p>
    @endif

    <p class="sc-note">For authorized barangay personnel and administrators only. Approval of requests and benefits remains subject to barangay policy.</p>
</x-guest-layout>
