@extends('layouts.master')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12 main-chart">
        <table class="table table-striped table-advance table-hover">
            <thead>
            <tr>
                <th><i class="fa fa-bullhorn"></i> ID</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Address</th>
                <th><i class=" fa fa-edit"></i> Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($bins as $bin)
                    <tr>
                        <td>
                            <a href="">{{$bin->id}}</a>
                        </td>
                        <td class="hidden-phone">{{$bin->address}}</td>
                        @if($bin->status == 2)
                            <td><span class="label label-danger label-mini">Full</span></td>
                        @elseif($bin->status == 1)
                            <td><span class="label label-warning label-mini">Half</span></td>
                        @elseif($bin->status == 0)
                            <td><span class="label label-success label-mini">Empty</span></td>
                        @endif
                        <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-map-marker"></i></button>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
                </div>
            </div>
        </section>
    </section>
@endsection
