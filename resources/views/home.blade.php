@extends('layouts.app')

@section('content')
<div class="box">
    <img src="{{ asset('images/solutions1.jpg') }}" alt="cover">
</div>
<marquee class="mt-3 mb-0" behavior="scroll" direction="right" scrollamount="5">
    <h5>{{ $newsflash->announcement }}</h5>
</marquee>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card pt-0" style="background-color: #f8fafc; border-color: #f8fafc"" >
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @foreach ($applications as $application)
                            <div class="col-3 mt-2">
                                <a href="{{ $application->url }}" target="_blank_" title="{{ $application->tooltip }}">
                                    <div class="card shadow p-1 mb-1 bg-white rounded">
                                        <div class="card-body">
                                            <h5>{!! $application->icon !!} &nbsp; {{ $application->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
