@extends('../layouts.layout')
@section('conteudo')

<section class="ftco-section cadastro">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Cadastro Veículo</h2>
            </div>
        </div>
        
        <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="{{ route('vehicles.store') }}">
            @csrf
            @include('vehicles.form')
            <button class="salvar-veiculo" type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Gravar Produto</button>
          </form>

    </div>
</section>

@endsection				
					