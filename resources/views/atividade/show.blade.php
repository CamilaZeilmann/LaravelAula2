@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <p class="h2 text-center">Detalhes da Atividade</p>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <ul class="list-unstyled">
 <li><p class="h2"><span class="badge badge-primary">{{$atividade->title}}</span></p></li>
            <li><p class="h5">Agendado para: <span class="badge badge-warning">{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}}</span></p></li>
            <li><p class="h5"> Descrição: <span class="badge badge-secondary">{{$atividade->description}}</span></p></li>
            <br>
            <br>
            <li><p class="h6">Código: <span class="badge badge-secondary">{{$atividade->id}}</span></p></li>
            <li><p class="h6">Criada em: <span class="badge badge-info">{{$atividade->created_at->format('d/m/Y h:m')}}</span></p></li>
            <li><p class="h6">Atualizada em: <span class="badge badge-info">{{$atividade->updated_at->format('d/m/Y h:m')}}</span></p></li>
        </ul>
    </div>
</div>

<br>
<br>


@endsection
