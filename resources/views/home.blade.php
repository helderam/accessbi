@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    RELATORIOS DISPONIVEIS PARA GRUPOS
                </div>

                <div class="bs-example">
                    <div class="panel-group" id="accordion">
                    <?php $group_id = 0 ?>
                    @foreach($groups as $group)
                        <div class="panel panel-default">
                            @if ($group->id != $group_id) 
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $group->id }}">{{ $group->name }}</a>
                                </h4>
                            </div>
                            <?php $group_id = $group->id ?>
                            @endif
                            <div id="collapse-{{ $group->id }}" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>{{ $group->report_name }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
