@extends('layouts.app')

@section('content')

    <div>
        resources/views/home.blade.php
    </div>

@endsection

@section('scripts')
    <script>
        console.log('resources/views/home.blade.php')

        var picker = new window.Pikaday({
            field: document.getElementById('datepicker'),
            format: 'D MMM YYYY',
            onSelect: function () {
                console.log('onSelect this::')
                console.log(this.getMoment().format('Do MMMM YYYY'));
            }
        });
    </script>
@endsection
