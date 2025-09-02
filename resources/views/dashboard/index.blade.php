@extends("layouts.app")

@section("title", "Download Dashboard Page")

@section("content")
    <div class="flex h-screen">
        <x-sidebar />
        <x-dashboard.header />
    </div>
@endsection

@push("scripts")
    @vite("resources/js/download/download-panel.js")
@endpush
