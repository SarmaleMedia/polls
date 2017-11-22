@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($groups as $groupName => $group)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="4">Group {{ $groupName }}</th>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Country</th>
                                    <th>GP</th>
                                    <th>GS</th>
                                    <th>GR</th>
                                    <th>Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($group as $team)
                                    <tr>
                                        <td>{{ $team['wc_group_rank'] }}</td>
                                        <td>{{ $team['name'] }}</td>
                                        <td>0</td>
                                        <td>{{ $team['goals_scored'] }}</td>
                                        <td>{{ $team['goals_against'] }}</td>
                                        <td>{{ $team['wc_group_points'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endforeach

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
