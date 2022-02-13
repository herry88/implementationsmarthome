@extends('layouts.app')

@section('title')
    <title>Lights Garden</title>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Lights Module') }}</div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Add Data</a>
                        <br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Lampu</th>
                                <th>Status</th>
                                <th>Tools</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
