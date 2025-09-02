@extends("layouts.app")

@section("title", "Download Dashboard Page")

@section("content")
    <div class="flex h-screen">
        <x-sidebar />
        <main id="main-content" class="flex-1 flex flex-col overflow-hidden">
            <x-dashboard.header />
            <div id="main-dashboard" class="flex-1 overflow-auto p-6">
                <x-dashboard.available-platform />
            </div>
        </main>
    </div>
@endsection

@push("scripts")
    @vite("resources/js/download/download-panel.js")
@endpush
