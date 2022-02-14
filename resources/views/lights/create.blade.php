@extends('layouts.app')

@section('title')
    <title>Create lamp</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Create Lamp') }}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('light.store') }}">
                            @csrf
                            @method('POST')
                            <table class="table table-bordered">
                                <tr>
                                    <td>Lamp Name</td>
                                    <td><input type="text" name="nm_lamp" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select class="form-control" name="status">
                                            <option value="0">-Choose Please-</option>
                                            <option value="on">On</option>
                                            <option value="off">Off</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><button type="submit" class="btn btn-primary">Save</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
