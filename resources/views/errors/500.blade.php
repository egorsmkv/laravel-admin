@extends('layouts.error')

@section('content')

    <div class="error-content">
        <h3><i class="fa fa-bug text-danger"></i> Oops! The page just crashed.</h3>

        <p>
            It seems to be the system error.
            Meanwhile, you may <a href="{{ route('dashboard') }}">return to dashboard</a>.
        </p>
    </div>

@endsection
