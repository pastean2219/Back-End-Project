@extends('layouts.app')
@section('template-class')
index_template
@endsection

@section('content')
    <h1 class="text-center my-5 text-dark font-weight-bold">Articole de pescuit</h1>
    <div class="row justify-content-center my-0">
        <div class="col-md-8">
            <div class="card card-default ">
                <div class="card card-header"></div>
                <div class="card-body">
                    <form action="">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control mr-2 bg-success text-dark font-weight-bold" placeholder="Caută" />
                            <button class="btn btn-info btn-sm font-weight-bold bg-success" type="submit">Caută</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card card-header text-center text-dark"><h2 class="font-weight-bold">Articole</h2></div>
                <div class="card-body ">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif

                    <ul class="list-group">
                        @foreach ($fishing_gear as $gear)
                        <li class="list-group-item font-weight-bold">
                            {{ $gear['Categorie'] }} - 
                            {{ $gear['Model'] }}

                            <a href="{{ route('fishing_gear.show', $gear['id']) }}" class="btn btn-info btn-sm float-right mr-2 font-weight-bold bg-success">View</a>
                        </li>
                    @endforeach
                    </ul>
                    <div class="row justify-content-center">{{ $fishing_gear->appends(request()->query())->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection