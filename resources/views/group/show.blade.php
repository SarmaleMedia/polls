@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $group->name }} - settings</div>

                    <div class="panel-body">
                        Invite your friends with the following url: <br />
                        http://example.com/register/{{ $group->unique_code }}
                        <br />
                        <br />
                        <form>
                            <label for="name">Group Name</label>
                            <input id="name" type="text" value="{{ $group->name }}" required />

                            <label for="complex_group">Complex group ?</label>
                            <input id="complex_group" type="checkbox" {{ $group->complex ? 'checked' : '' }} />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
