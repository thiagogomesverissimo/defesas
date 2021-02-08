<form action="/bancas" method="POST">
    @csrf
    <input type="hidden" name="agendamento_id" value="{{$agendamento->id}}">
    <div class="form-group row">
        <div class="col-sm form-group">
            <label for="codpes" class="required">Número USP </label> 
            <input type="text" name="codpes" class="form-control" value="{{ old('codpes') }}"> 
        </div>
        <div class="col-sm form-group">
            <label for="presidente" class="required">Presidente</label>
            <select class="form-control" name="presidente">
                <option value="" selected="">- Selecione -</option>
                @foreach ($agendamento->presidenteOptions() as $option)
                    <option value="{{$option}}" {{ ( old('presidente') == $option) ? 'selected' : ''}}>
                        {{$option}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-sm form-group">
            <label for="tipo" class="required">Tipo</label>
            <select class="form-control" name="tipo">
                <option value="" selected="">- Selecione -</option>
                @foreach ($agendamento->tipoOptions() as $option)
                    <option value="{{$option}}" {{ ( old('tipo') == $option) ? 'selected' : ''}}>
                        {{$option}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success float-right">Inserir Professor(a)</button> 
    </div> 
</form>