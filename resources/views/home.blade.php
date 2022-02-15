@extends('layouts.layout')
@section('conteudo')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5 ">
            <h2 class="heading-section home-head">Veículos Cadastrados</h2>
            <a href="{{ route('vehicles.create') }}"><button type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Veículo</button></a>
        </div>
    </div>

    <main>
        <div class="row search">

            <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="{{ route('vehicles.search') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inlineFormInputGroup">Nome do Veículo</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-car" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nome do Veículo" value="">
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inlineFormInputGroup">Marca</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-car" aria-hidden="true"></i></div>
                            </div>
                            <select class="form-control" name="brand" id="VehicleBrand">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inlineFormInputGroup">Modelo</label>
                        <div class="input-group mb-2" id="VehicleModels">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-car" aria-hidden="true"></i></div>
                            </div>
                            <select class="form-control" name="model" id="model">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inlineFormInputGroup"></label>
                        <button class="buscar-veiculo" type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Filtrar</button>
                    </div>
                </div>
                
            </form>

        </div>
        <div class="row text-center">
            
            @foreach ($vehicles as $vehicle)
                <div class="col-md-3">
                    <div class="card mb-4 rounded-3 shadow-sm border-default">
                        <div class="card-header py-3 text-white bg-car border-primary">
                            <h4 class="my-0 fw-normal"><i class="fa fa-{{ $vehicle->type->icon }}" aria-hidden="true"></i></h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title car-card-title">{{ $vehicle->name }}</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                            <li>Marca: {{ $vehicle->model->brand->name }}</li>
                            <li>Modelo: {{ $vehicle->model->name }}</li>
                            <li>Versão: {{ $vehicle->version ?? '' }}</li>
                            <li class="user">{{ $vehicle->user->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach  
            
        </div>
    </main>

</div>

@endsection				
					