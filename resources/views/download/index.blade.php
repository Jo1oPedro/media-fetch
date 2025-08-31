@extends("layouts.app")

@section("title", "Download Home Page")

@section("content")
    <x-header />
    <main>
        <x-download.download-panel />
        <x-download.cta-panel />
    </main>
    <x-download.footer />
@endsection

@push("scripts")
    @vite("resources/js/download/download-panel.js")
@endpush
