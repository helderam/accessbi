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

                <table>
                <?php foreach ($groups as $group): ?>
                    <tr>
                        <td> <?= $group->id ?> </td>
                        <td> <?= $group->name ?> </td>
                        <td> <?= $group->report_name ?> </td>
                        <td> <?= $group->link ?> </td>
                    </tr>
                <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
