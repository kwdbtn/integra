@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><strong><i class="fa fa-crosshairs" aria-hidden="true"></i> &nbsp; Applications</strong>
                <span class="float-right"><a href="{{ route('applications.create') }}" class="btn btn-sm btn-dark float-end"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add New</a></span>
            </h4>
            <hr>
            <div class="table-responsive table-striped">
                <table class="table table-sm table-borderless table-striped table-hover table-myDatatable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Name</th>
                            <th scope="col">Tooltip</th>
                            <th scope="col">URL</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($applications->isEmpty())
                            @else @foreach ($applications as $application)
                            <tr scope="row">
                                <td>{{ $loop->iteration }}</td>
                                <td>{!! $application->icon !!}</td>
                                <td>{{ $application->name }}</td>
                                <td>{{ $application->tooltip }}</td>
                                <td>{{ $application->url }}</td>
                                <td class="text-center">
                                    <a title="Edit" href="{{ route('applications.edit', $application) }}" class="btn btn-sm btn-dark"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection