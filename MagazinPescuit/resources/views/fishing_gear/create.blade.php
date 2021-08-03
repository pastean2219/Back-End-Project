@extends('layouts.app')
@section('template-class')
create_template
@endsection

@section('content')
    <h1>Adăugare Produs</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif  
        <div class="containerform">
            <div class="outform">
                <form action="{{ route('fishing_gear.store') }}" method="post">
                    @csrf
                    
                    <div class="form">
                        <div class="name-form">
                            <input type="text" name="Categorie" autocomplete="off" required/>
                            <label for="Categorie" class="label-name">
                                <span class="content-name">Categorie</span>
                            </label>
                        </div>
                    </div>
                    <div class="form">
                        <div class="name-form">
                            <input type="text" name="Producator" autocomplete="off" required/>
                            <label for="Producator" class="label-name">
                                <span class="content-name">Producator</span>
                            </label>
                        </div>
                    </div>
                    <div class="form">
                        <div class="name-form">
                            <input type="text" name="Model" autocomplete="off" required/>
                            <label for="Model" class="label-name">
                                <span class="content-name">Model</span>
                            </label>
                        </div>
                    </div>
                    <div class="form">
                        <div class="name-form">
                            <input type="number" name="Pret" autocomplete="off" required/>
                            <label for="Pret" class="label-name">
                                <span class="content-name">Pret</span>
                            </label>
                        </div>
                    </div>
                    <div class="form">
                        <div class="name-form">
                            <input type="text" name="Descriere" autocomplete="off" required/>
                            <label for="Descriere" class="label-name">
                                <span class="content-name">Descriere</span>
                            </label>
                        </div>
                    </div>
                    <div class="form">
                        <div class="name-form">
                            <input type="text" name="Disponibilitate" autocomplete="off" required/>
                            <label for="Disponibilitate" class="label-name">
                                <span class="content-name">Disponibilitate</span>
                            </label>
                        </div>
                    </div>
                    <button id="createItemButton" value="Create Item">Adaugă Produs</button>
                </form>
            </div>
        </div>
@endsection