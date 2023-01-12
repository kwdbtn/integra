@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><strong><i class="fa fa-newspaper-o" aria-hidden="true"></i></i>&nbsp; Newsflash</strong>
                {{-- <span class="float-right"><a href="{{ route('newsflashes.create') }}" class="btn btn-sm btn-dark float-end"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add New</a></span> --}}
            </h4>
            <hr>
            <div class="table-responsive table-striped">
                <table class="table table-sm table-borderless table-striped table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Announcement</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($newsflashes->isEmpty())
                            @else @foreach ($newsflashes as $newsflash)
                            <tr scope="row">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $newsflash->announcement }}</td>
                                <td class="text-center">
                                    <a title="Edit" href="{{ route('newsflashes.edit', $newsflash) }}" class="btn btn-sm btn-dark"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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