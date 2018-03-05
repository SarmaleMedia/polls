@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Matches</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($groups as $groupName => $rounds)
                        <table class="table table-sm">
                            <col width="20%">
                            <col width="20%">
                            <col width="10%">
                            <col width="12%">
                            <col width="10%">
                            <col width="20%">
                            <thead>
                                <tr>
                                    <th colspan="4"></th>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <th colspan="5" style="text-align: center;">{{ $groupName }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rounds as $matches)
                                    @foreach ($matches as $match)
                                        <tr>
                                            <td>{{ $match['date'] }}</td>
                                            <td style="text-align: right;">
                                                {{ $match['first_team'] }}
                                            </td>
                                            <td style="text-align: center;">
                                                <img src="{{ asset($match['first_team_flag']) }}" width="25" >
                                            </td>
                                            <td style="text-align: center;">
                                                @if($complexGame)
                                                    <input type="text" style="width: 20px; text-align: center;" name="bet_first_team_result_{{$match['id']}}" value="{{ $match['bet_first_team_result'] ?? '' }}" > - <input type="text" style="width: 20px; text-align: center;" name="bet_second_team_result_{{$match['id']}}" value="{{ $match['bet_second_team_result'] ?? '' }}" >
                                                @else
                                                    <input type="text" style="width: 40px; text-align: center;" name="bet_first_team_result_{{$match['id']}}" value="{{ $match['bet_result'] ?? '' }}" >
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                <img src="{{ asset($match['second_team_flag']) }}" width="25" >
                                            </td>
                                            <td>
                                                {{ $match['second_team'] }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="6">&nbsp;</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
