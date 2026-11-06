@props(['size' => 40])

<a href="{{ route('home') }}" {{ $attributes->merge(['class' => 'brand-logo']) }}>
    <img src="{{ asset('images/igdratech-mark-light.png') }}" alt="" width="{{ $size }}" height="{{ $size }}">
    <span class="brand-wordmark">IGDRA<span>TECH</span></span>
</a>
