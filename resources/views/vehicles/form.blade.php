<div class="form-row">
    <div class="form-group col-md-8">
        <label for="inlineFormInputGroup">Nome do Veículo</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-car" aria-hidden="true"></i></div>
            </div>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome do Veículo" value="{{ $vehicle->name ?? '' }}">
        </div>
    </div>

    <div class="form-group col-md-4">
        <label for="inlineFormInputGroup">Tipo</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-car" aria-hidden="true"></i></div>
            </div>
            <select class="form-control" name="type" id="type" required> 
                <option value="">Selecione o tipo</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @if($type->id == ($vehicle->vehicle_type_id ?? '')) selected @endif>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="inlineFormInputGroup">Marca</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-car" aria-hidden="true"></i></div>
            </div>
            <select class="form-control" name="brand" id="VehicleBrand" required>
                <option value="">Selecione a marca</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" @if($brand->id == ($vehicle->model->vehicle_brand_id ?? '')) selected @endif>{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group col-md-4">
        <label for="inlineFormInputGroup">Modelo</label>
        <div class="input-group mb-2" id="VehicleModels">
            <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-car" aria-hidden="true"></i></div>
            </div>
            <select class="form-control" name="model" id="model" required>
                <option value="">Selecione o modelo</option>
                @foreach ($models as $model)
                    <option value="{{ $model->id }}" @if($model->id == ($vehicle->vehicle_model_id ?? '')) selected @endif>{{ $model->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group col-md-4">
        <label for="inlineFormInputGroup">Versão</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
            </div>
            <input type="text" class="form-control" name="version" id="version" placeholder="" value="{{ $vehicle->version ?? '' }}">
        </div>
    </div>
</div>