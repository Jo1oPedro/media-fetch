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
    <script>
        window.addEventListener("load", function () {
            $(document).ready(function() {
                console.log("Jquery está funcionando");
            });
        })
    </script>
@endpush
