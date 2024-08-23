@extends('layouts.admin')

@section('content')


    <div class="mb-4" id="timeline-fundo">
        <div class="card-header">
            <i class="fas fa-chart-area me-1"></i>
            Linha do tempo
        </div>
        <div class="card-body"><canvas id="myAreaChart" width="100%" height="50"></canvas></div>
        
    </div>

    <dd class="col-sm-9">
        <p>{{\Carbon\Carbon::now()->format('d/m/Y H:i:s')}}</p>
    </dd>
@endsection