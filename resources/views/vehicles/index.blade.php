@extends('../layouts.layout')
@section('conteudo')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Meus Veículos</h2>
                <a href="{{ route('vehicles.create') }}"><button type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Veículo</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

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
                                    </ul>

                                    <div class="card-action">
                                        <a href="{{ url('vehicles/'.$vehicle->id.'/edit') }}"><button type="button" class="btn btn-info"><i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>
                                        <a href="#" class="removeVehicle" data-id="{{ $vehicle->id }}" data-token="{{ csrf_token() }}"><button type="button" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i></button></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach           
                    
                </div>

            </div>
        </div>
    </div>
</section>

@endsection				
					