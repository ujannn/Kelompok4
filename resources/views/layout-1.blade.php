@extends("master")

@section("layout")

<div class ="row">
    <div class="col-8">
        @yield("konten")
    </div>

    <div class="col-4">
        @yield("sidebar")
    </div>
</div>

@endsection