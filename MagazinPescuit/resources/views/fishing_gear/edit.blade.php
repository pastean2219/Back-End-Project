@extends('layouts.app')
@section('template-class')
edit_template
@endsection

@section('content')
    <h1 class="text-center my-5 text-dark font-weight-bold">Actualizare Articol</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header text-indigo font-weight-bold bg-success"> Detalii </div>
                <div class="card-body font-weight-bold ">
                    <form action="{{ route('fishing_gear.update', $fishing_gear['id']) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group font-weight-bold">
                                <input type="text" name="Categorie" class="form-control font-weight-bold text-dark" placeholder="Categorie" value="{{$fishing_gear['Categorie']}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="Producator" class="form-control font-weight-bold text-dark" placeholder="Producator" value="{{$fishing_gear['Producator']}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="Model" class="form-control font-weight-bold text-dark" placeholder="Model" value="{{$fishing_gear['Model']}}">
                            </div>
                            <div class="form-group">
                                <input type="number" name="Pret" class="form-control font-weight-bold text-dark" placeholder="Pret" value="{{$fishing_gear['Pret']}}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control font-weight-bold text-dark" name="Descriere" placeholder="Descriere" id="" cols="30" rows="10">{{$fishing_gear['Descriere']}}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" name="Disponibilitate" class="form-control font-weight-bold text-dark" placeholder="Disponibilitate" value="{{$fishing_gear['Disponibilitate']}}">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success font-weight-bold text-dark">Actualizează</button>
                            </div>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection
