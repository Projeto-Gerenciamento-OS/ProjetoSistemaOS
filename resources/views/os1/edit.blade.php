@extends ('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container">
    <div class="card mb-4 cardCorLista">
        <div class="card-header">
            <h1 class="">EDIÇÃO</h1>
            <span class="ms-auto d-flex flex-row gap-2">
                <a href="{{ route('os.index') }}" class="btn">
                    <i class="fa-solid fa-list-ul"></i>
                </a>
                <a href="{{ route('os1.view', ['os1' => $os1->id]) }}" class="btn">
                    <i class="fa-regular fa-eye"></i>
                </a>
                <form method="POST" action="{{ route('os1.delete', ['os1' => $os1->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn" onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body "> 
            <form action="{{ route('os1.update', ['os1' => $os1->id]) }}" method="POST" class='osBody'>
                @csrf
                @method('PUT')

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label" >EMPRESA 2 </label>
                        <input type="number" name="id_emp2" id="id_emp2"  placeholder="Digite aqui "
                            value="{{ old('id_emp2', $os1->id_emp2) }}">
                    </div>

                    <div class="">
                        <label for="id_status" class="form-label">STATUS</label>
                        <input type="text"  name="id_status" id="id_status"  value="{{ old('id_status', $os1->id_status) }}" >
                    </div>

                    <div class="">
                        <label for="id_users" class="form-label">USUÁRIO</label>
                        <input type="text"  name="id_users" id="id_users"  value="{{ old('id_users', $os1->id_users) }}" >
                    </div>

                    <div class="">
                        <label for="datacad" class="form-label">DATA</label>
                        <input type="date"  name="datacad" id="datacad"  value="{{ old('datacad', $os1->datacad) }}" >
                    </div>

                    <div class="">
                        <label for="dhi" class="form-label">INICIO</label>
                        <input type="time"  name="dhi" id="dhi"  value="{{ old('dhi', $os1->dhi) }}" >
                    </div>

                    <div class="">
                        <label for="dhf" class="form-label">FINAL</label>
                        <input type="time"  name="dhf" id="dhf"  value="{{ old('dhf', $os1->dhf) }}" >
                    </div>

                    <div class="">
                        <label for="obs" class="form-label"> OBS</label>
                        <input type="text" name="obs" id="obs" 
                            value="{{ old('obs', $os1->obs) }}">
                    </div>

                    <div class="">
                        <label for="vtotal" class="form-label">VALOR</label>
                        <input type="text" name="vtotal" id="vtotal"
                            value="{{ old('vtotal', $os1->vtotal) }}">
                    </div>
                
                    
                    <div class="">
                        <label for="ctotal" class="form-label">CUSTO</label>
                        <input type="text"  name="ctotal" id="ctotal"   required value="{{ old('ctotal', $os1->ctotal) }}">
                    </div>
                    
                    <div class="">
                        <label for="cindireto" class="form-label">CUSTO INDIRETO</label>
                        <input type="text"  name="cindireto" id="cindireto"  value="{{ old('cindireto', $os1->cindireto) }}">
                    </div>

                    <div class="">
                        <label for="vresultado" class="form-label">RESULTADO</label>
                        <input type="text"  name="vresultado" id="vresultado"  value="{{ old('vresultado', $os1->vresultado) }}">
                    </div>
                    <a  class="btnCadastrar">
                        <button type="submit">
                            <h5>CONCLUIR</h5>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>  
                    </a>
            </form>
            @foreach($os1->os2 as $os2) 
                <form  action="{{ route('os1.os2.update', ['os2' => $os2->id]) }}" method="POST" class="osBody  ">
                    @csrf
                    @method('PUT')
                
                        <div class="mb-3">
                            <label for="qtde">QUANTIDADE</label>
                            <input type="text" name="qtde" id="qtde"  placeholder="Digite aqui "
                                value="{{ old('qtde', $os2->qtde) }}">
                        </div>

                        <div class="mb-3">
                            <label for="vunit" >VALOR UNI.</label>
                            <input type="text" name="vunit" id="vunit" 
                                placeholder=" Digite aqui" value="{{ old('vunit', $os2->vunit) }}">
                        </div>

                        <div class="mb-3">
                            <label for="vtotal" >VALOR</label>
                            <input type="text" name="vtotal" id="vtotal"  placeholder=" vtotal"
                                value="{{ old('vtotal', $os2->vtotal) }}">
                        </div>

                        <div class="mb-3">
                            <label for="cunit" >CUSTO UNI.</label>
                            <input type="text" name="cunit" id="cunit" 
                                placeholder=" Digite aqui" value="{{ old('cunit', $os2->cunit) }}">
                        </div>

                        <div class="mb-3">
                            <label for="ctotal" >CUSTO</label>
                            <input type="text" name="ctotal" id="ctotal"  placeholder=" ctotal"
                                value="{{ old('ctotal', $os2->ctotal) }}">
                        </div>

                        <div class="mb-3">
                            <label for="id_emp2" >EMPRESA 2 </label>
                            <input type="text" name="id_emp2" id="id_emp2"  placeholder=" id_emp2"
                                value="{{ old('id_emp2', $os2->id_emp2) }}">
                        </div>

                        <div class="mb-3">
                            <label for="id_os1" >ID OS1</label>
                            <input type="text" name="id_os1" id="id_os1"  placeholder=" id_os1"
                                value="{{ old('id_os1', $os2->id_os1) }}">
                        </div>
                    
                        <div class="mb-3">
                            <label for="id_servico" >ID SERVIÇO</label>
                            <input type="text" name="id_servico" id="id_servico" 
                                placeholder=" Digite aqui" value="{{ old('id_servico', $os2->id_servico) }}">
                        </div>

                        <div class="mb-3">
                            <label for="id_colaborador" >COLABORADOR</label>
                            <input type="text" name="id_colaborador" id="id_colaborador"  placeholder=" id_colaborador"
                                value="{{ old('id_colaborador', $os2->id_colaborador) }}">
                        </div>
                    
                    <a  class="btnCadastrar">
                        <button type="submit">
                            <h5>SALVAR</h5>
                        </button>  
                    </a>
                </form>
            @endforeach

            @foreach($os1->os3 as $os3) 
                <form action="{{ route('os1.os3.update', ['os3' => $os3->id]) }}" method="POST" class="osBody  ">
                    <div class="mb-3">
                        <label for="qtde" class="form-label">QUANTIDADE</label>
                        <input type="text" name="qtde" id="qtde" 
                            placeholder=" Data" value="{{ old('qtde', $os3->qtde) }}">
                    </div>

                    <div class="mb-3">
                        <label for="vunit" class="form-label">VALOR UNI.</label>
                        <input type="text" name="vunit" id="vunit"  placeholder=" Digite o vunit"
                            value="{{ old('vunit', $os3->vunit ) }}">
                    </div>

                    <div class="mb-3">
                        <label for="vtotal" class="form-label">VALOR</label>
                        <input type="text" name="vtotal" id="vtotal"  placeholder=" Digite o vtotal"
                            value="{{ old('vtotal', $os3->vtotal ) }}">
                    </div>

                    <div class="mb-3">
                        <label for="cunit" class="form-label">CUSTO UNI.</label>
                        <input type="text" name="cunit" id="cunit"  placeholder=" Digite o cunit"
                            value="{{ old('cunit', $os3->cunit ) }}">
                    </div>

                    <div class="mb-3">
                        <label for="ctotal" class="form-label">CUSTO</label>
                        <input type="text"  name="ctotal" id="ctotal"   required
                        value="{{ old('ctotal', $os3->ctotal) }}">
                    </div> 

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                        <input type="text"  name="id_emp2" id="id_emp2"   required
                        value="{{ old('id_emp2', $os3->id_emp2) }}">
                    </div> 

                    <div class="mb-3">
                        <label for="id_os1" class="form-label">ID OS1</label>
                        <input type="text"  name="id_os1" id="id_os1"   required
                        value="{{ old('id_os1', $os3->id_os1) }}">
                    </div>  

                    <div class="mb-3">
                        <label for="id_materiais" class="form-label">ID MATERIAIS</label>
                        <input type="text"  name="id_materiais" id="id_materiais"   required
                        value="{{ old('id_materiais', $os3->id_materiais) }}">
                    </div>  
                    <a  class="btnCadastrar">
                        <button type="submit">
                            <h5>CONCLUIR</h5>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>  
                    </a>
                </form> 
            @endforeach

            @foreach($os1->os4 as $os4) 
                <form action="{{ route('os1.os4.update', ['os4' => $os4->id]) }}" method="POST" class="osBody  ">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="descricao" class="form-label" >DESCRIÇÃO</label>
                        <input type="text" name="descricao" id="descricao"  placeholder="Digite aqui "
                            value="{{ old('descricao', $os4->descricao) }}">
                    </div>

                    <div class="mb-3">
                        <label for="percentual" class="form-label"  > PERCENTUAL</label>
                        <input type="text" name="percentual" id="percentual" 
                            placeholder=" Data" value="{{ old('percentual', $os4->percentual) }}">
                    </div>

                    <div class="mb-3">
                        <label for="valor"  class="form-label" >VALOR</label>
                        <input type="text" name="valor" id="valor"  placeholder=" valor"
                            value="{{ old('valor', $os4->valor) }}">
                    </div>

                    <div class="mb-3">
                        <label for="ativo" class="form-label"  >ATIVO</label>
                        <input type="text" name="ativo" id="ativo"  placeholder=" ativo"
                            value="{{ old('ativo', $os4->ativo) }}">
                    </div>
        

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                        <input type="text"  name="id_emp2" id="id_emp2"  value="{{ old('id_emp2', $os4->id_emp2) }}" >
                    </div>
            
                    <a  class="btnCadastrar">
                        <button type="submit">
                            <h5>CONCLUIR</h5>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>  
                    </a>
                </form>       
            @endforeach    
        </div>
    </div>
</div>

@endsection