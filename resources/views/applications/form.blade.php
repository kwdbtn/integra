@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justified-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>
                        <strong><i class="fa fa-crosshairs" aria-hidden="true"></i> &nbsp; {{ $application->exists ? "Editing '".$application->name."'" : "Application" }}</strong>
                        <span>
                            <a href="{{ route('applications.index') }}" class="btn btn-sm btn-dark float-end"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp; Back</a>
                        </span>
                    </h4>
                    <hr>

                    {!! Form::model($application, ['method' => $application->exists ? 'PUT' : 'POST', 
                    'route' => $application->exists ? ['applications.update', $application] : ['applications.store'],
                    'class' => 'form-horizontal'])
                    !!}

                    <div class="form-group row">
                        {!! Form::label('icon', 'Icon:', ['class' => 'control-label col-sm-2 text-end'])
                        !!}
                        <div class="col-sm-12 col-md-10">
                            {!! Form::text('icon', null, ['class'=>'form-control col-md-10 col-xs-8', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('name', 'Name:', ['class' => 'control-label col-sm-2 text-end'])
                        !!}
                        <div class="col-sm-12 col-md-10">
                            {!! Form::text('name', null, ['class'=>'form-control col-md-10 col-xs-8', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('tooltip', 'Tooltip:', ['class' => 'control-label col-sm-2 text-end'])
                        !!}
                        <div class="col-sm-12 col-md-10">
                            {!! Form::text('tooltip', null, ['class'=>'form-control col-md-10 col-xs-8', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('url', 'URL:', ['class' => 'control-label col-sm-2 text-end'])
                        !!}
                        <div class="col-sm-12 col-md-10">
                            {!! Form::text('url', null, ['class'=>'form-control col-md-10 col-xs-8', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="offset-sm-2 mt-1">
                            <button type="submit" class="btn btn-dark">{{ $application->exists ? @"Update" : @"Save" }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

            @if ($application->exists)
            <div class="card mt-3">
                <div class="card-body">
                    <h6>
                        <strong><i class="fa fa-eye-slash" aria-hidden="true"></i> &nbsp; Preview</strong>
                    </h6>
                    <hr>
                    <div class="col-3 mt-1">
                        <a href="{{ $application->url }}" target="_blank_" title="{{ $application->tooltip }}">
                            <div class="card shadow p-1 mb-1 bg-white rounded">
                                <div class="card-body">
                                    <h5>{!! $application->icon !!}&nbsp; {{ $application->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection