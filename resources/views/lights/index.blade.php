@extends('layouts.app')

@section('title')
    <title>Lights Garden</title>
@endsection

@section('content')
    <div class="container-fluid">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert"></button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Lights Module') }}</div>
                    <div class="card-body">
                        <a href="{{ route('light.create') }}" class="btn btn-primary">Add Data</a>
                        <br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Nama Lampu</th>
                                <th>Status</th>
                                <th>Tools</th>
                            </tr>
                            @forelse ($lights as $light)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $light->nm_lamp }}</td>
                                    @if ($light->status == 'on')
                                        <td><a href="#" class="btn btn-success">On</a></td>

                                    @else
                                        <td><a href="#" class="btn btn-danger">off</a></td>
                                    @endif
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('light.edit', $light->id) }}">Edit</a>
                                        <a href="{{ route('light.destroy', $light->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No Data</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
