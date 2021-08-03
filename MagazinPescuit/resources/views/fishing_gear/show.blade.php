@extends('layouts.app')
@section('template-class')
show_template
@endsection

@section('content')
    <h1 class="text-center my-5 text-dark font-weight-bold">{{ $fishing_gear['Categorie'] }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default ">
                <div class="card-header bg-success font-weight-bold">Detalii</div>
                <div class="card-body">@if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif</div>
                <div class="card-body font-weight-bold">- {{ $fishing_gear['Categorie'] }}</div>
                <div class="card-body font-weight-bold">- {{ $fishing_gear['Producator'] }}</div>
                <div class="card-body font-weight-bold">- {{ $fishing_gear['Model'] }}</div>
                <div class="card-body font-weight-bold">- {{ $fishing_gear['Pret'] }} RON</div>
                <div class="card-body font-weight-bold">- {{ $fishing_gear['Descriere'] }}</div>
                <div class="card-body font-weight-bold">- {{ $fishing_gear['Disponibilitate'] }}</div>
            </div>
            <a href="{{ route('fishing_gear.edit', $fishing_gear['id']) }}" class="btn btn-info btn-sm my-2 font-weight-bold bg-success">Editează</a>
            <form action= "{{ route('fishing_gear.destroy', $fishing_gear['id']) }}" method="post">
                @csrf
                @method('delete')
            <button type="submit" class="btn btn-info btn-danger my-2 btn-sm font-weight-bold">Șterge</button>
            </form>
        </div>
    </div>
@endsection