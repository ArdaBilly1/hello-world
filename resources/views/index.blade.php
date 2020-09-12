{{-- @extends('layout.main') --}}
@include('layout.header')
@include('layout.sidebar')
@section('title', 'Utama')

    
<div class="content-wrapper">
    <div class="content">
        @section('container')
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h1 class="mt-4">Heloo gays</h1>
                    </div>
                </div>
            </div>
        @endsection
    </div>
</div>

@include('layout.footer')