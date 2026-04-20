@if (request()->routeIs('filament.admin.auth.login'))
    <img src="{{ asset('images/logo.png') }}" alt="Logo SGCC" style="height: 15rem; margin: 0 auto;">
@else
    <div style="font-size: 2rem; font-weight: 800; letter-spacing: -0.05em;">
        SGCC
    </div>
@endif
