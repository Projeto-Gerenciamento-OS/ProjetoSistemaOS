@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
    <div class="card mb-4 cardCorLista" >
        <div  class="  card-header">
            <h1>Cadastro da Ordem de Serviço 1</h1>
            <a href="{{ route('os.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">LISTAR</span>
            </a>
        </div> 

        <div class="card-body "> 
            <form action="{{ route('os1.update') }}" method="POST" class=" osBody ">
                @csrf
                @method('POST')
                    <div class="">
                        <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                        <input type="number" name="id_emp2" id="id_emp2"  placeholder=" Digite o id_emp2"
                            value="{{ old('id_emp2') }}">
                    </div>

                    <div class="">
                        <label for="id_status" class="form-label">STATUS</label>
                        <input type="text"  name="id_status" id="id_status"  value="{{ old('id_status') }}" >
                    </div>

                    <div class="">
                        <label for="id_users" class="form-label">USUÁRIO</label>
                        <input type="text"  name="id_users" id="id_users"  value="{{ old('id_users') }}" >
                    </div>

                    <div class="">
                        <label for="datacad" class="form-label">DATA</label>
                        <input type="date"  name="datacad" id="datacad"  value="{{ old('datacad') }}" >
                    </div>

                    <div class="">
                        <label for="dhi" class="form-label">INICIO</label>
                        <input type="time"  name="dhi" id="dhi"  value="{{ old('dhi') }}" >
                    </div>

                    <div class="">
                        <label for="dhf" class="form-label">FINAL</label>
                        <input type="time"  name="dhf" id="dhf"  value="{{ old('dhf') }}" >
                    </div>

                    <div class="">
                        <label for="obs" class="form-label"> OBS</label>
                        <input type="text" name="obs" id="obs" 
                            value="{{ old('obs') }}">
                    </div>

                    <div class="">
                        <label for="vtotal" class="form-label">VALOR</label>
                        <input type="text" name="vtotal" id="vtotal"
                            value="{{ old('vtotal') }}">
                    </div>
                
                    
                    <div class="">
                        <label for="ctotal" class="form-label">CUSTO</label>
                        <input type="text"  name="ctotal" id="ctotal"   required >
                    </div>
                    
                    <div class="">
                        <label for="cindireto" class="form-label">CUSTO INDIRETO</label>
                        <input type="text"  name="cindireto" id="cindireto"  value="{{ old('cindireto') }}" >
                    </div>

                    <div class="">
                        <label for="vresultado" class="form-label">RESULTADO</label>
                        <input type="text"  name="vresultado" id="vresultado"  value="{{ old('vresultado') }}" >
                    </div>
                    <a  class="btnCadastrar">
                        <button type="submit">
                            <h5>CONCLUIR</h5>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>  
                    </a>
            </form>

            <form action="{{ route('os1.os2.store') }}" method="POST" class="osBody">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="qtde" class="form-label">QUANTIDADE</label>
                    <input type="text" name="qtde" id="qtde"  placeholder=" Digite o qtde"
                        value="{{ old('qtde') }}">
                </div>

                <div class="mb-3">
                    <label for="vunit" class="form-label">VALOR UNI.</label>
                    <input type="text" name="vunit" id="vunit" 
                        placeholder=" Digite a DATA" value="{{ old('vunit') }}">
                </div>

                <div class="mb-3">
                    <label for="vtotal" class="form-label">VALOR</label>
                    <input type="text" name="vtotal" id="vtotal" 
                        placeholder=" Digite a vtotal" value="{{ old('vtotal') }}">
                </div>

                <div class="mb-3">
                    <label for="cunit" class="form-label">CUSTO UNI.</label>
                    <input type="text"  name="cunit" id="cunit"   required>
                </div> 

                <div class="mb-3">
                    <label for="ctotal" class="form-label">CUSTO</label>
                    <input type="text"  name="ctotal" id="ctotal"   required>
                </div> 

                <div class="mb-3">
                    <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                    <input type="text"  name="id_emp2" id="id_emp2"   required>
                </div> 
                
                <div class="mb-3">
                    <label for="id_os1" class="form-label">ID OS1</label>
                    <input type="text"  name="id_os1" id="id_os1"   required>
                </div> 
                
                <div class="mb-3">
                    <label for="id_servico" class="form-label">ID SERVIÇO</label>
                    <input type="text"  name="id_servico" id="id_servico"   required >
                </div>

                <div class="mb-3">
                    <label for="id_colaborador" class="form-label">COLABORADOR</label>
                    <input type="text"  name="id_colaborador" id="id_colaborador"   required>
                </div> 
    
                <a  class="btnCadastrar">
                    <button type="submit">
                        <h5>CONCLUIR</h5>
                        <i class="fa-solid fa-angle-right"></i>
                    </button>  
                </a>
            </form>              
        </div>
    </div>
</div>


@endsection