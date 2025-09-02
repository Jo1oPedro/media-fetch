@extends("layouts.app")

@section("title", "Download Dashboard Page")

@section("content")
    <x-sidebar />
@endsection

@push("scripts")
    @vite("resources/js/download/download-panel.js")
@endpush
