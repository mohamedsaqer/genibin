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
                            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
                            <th><i class=" fa fa-edit"></i> Email</th>
                            <th><i class=" fa fa-edit"></i> Age</th>
                            <th><i class=" fa fa-edit"></i> Total Points</th>
{{--                            <th><i class=" fa fa-edit"></i> Status</th>--}}
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 0; @endphp
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <a href="">{{++$i}}</a>
                                </td>
                                <td class="hidden-phone">{{$user->name}}</td>
                                <td class="hidden-phone">{{$user->email}}</td>
                                <td class="hidden-phone">{{$user->birth_date}}</td>
                                <td class="hidden-phone">{{$user->total_points}}</td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-history"></i></button>
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
