@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justified-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>
                        <strong><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp; {{ $newsflash->exists ? "Editing '".$newsflash->file_no."'" : "Newsflash" }}</strong>
                        <span>
                            <a href="{{ route('newsflashes.index') }}" class="btn btn-sm btn-dark float-end"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp; Back</a>
                        </span>
                    </h4>
                    <hr>

                    {!! Form::model($newsflash, ['method' => $newsflash->exists ? 'PUT' : 'POST', 
                    'route' => $newsflash->exists ? ['newsflashes.update', $newsflash] : ['newsflashes.store'],
                    'class' => 'form-horizontal'])
                    !!}

                    <div class="form-group row">
                        {!! Form::label('announcement', 'Announcement:', ['class' => 'control-label col-sm-2 text-end'])
                        !!}
                        <div class="col-sm-12 col-md-10">
                            {!! Form::textArea('announcement', null, ['class'=>'form-control col-md-10 col-xs-8', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="offset-sm-2 mt-1">
                            <button type="submit" class="btn btn-dark">{{ $newsflash->exists ? @"Update" : @"Save" }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection