<!-- Title -->
<title>{{ $title ?? $name }} | Placid </title>

@if ($description)
    <!-- Meta Description -->
    <meta name="description" content="{{ $description }}">
@endif

@if ($keyword)
    <!-- Meta Keywords -->
    <meta name="keywords" content="{{ $keyword }}">
@endif

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}" />

@if (!empty($schema))
    <!-- Optional Schema -->
    <script type="application/ld+json">{!! $schema !!}</script>
@endif
