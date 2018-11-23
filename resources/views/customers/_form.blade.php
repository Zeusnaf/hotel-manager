<div class="form-group mb-4">
    {!! Form::label('name', 'Nome', ['class' => 'col-sm-2 form-control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', null, ['class' => 'bg-grey-lighter w-full py-2 rounded shadow px-2']) !!}
    </div>
</div>
<div class="form-group mb-4">
    {!! Form::label('address', 'Endereço', ['class' => 'col-sm-2 form-control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('address', null, ['class' => 'bg-grey-lighter w-full py-2 rounded shadow px-2']) !!}
    </div>
</div>
<div class="form-group mb-4 row-cpf">
    {!! Form::label('cpf', 'CPF', ['class' => 'col-sm-2 form-control-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('cpf', null, ['class' => 'bg-grey-lighter w-full py-2 rounded shadow px-2 js-cpf']) !!}
    </div>
</div>
<div class="form-group mb-4 row-cnpj" hidden>
    {!! Form::label('cnpj', 'CNPJ', ['class' => 'col-sm-2 form-control-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('cnpj', null, ['class' => 'bg-grey-lighter w-full py-2 rounded shadow px-2 js-cnpj', 'disabled'=>'true']) !!}
    </div>
</div>
<div class="form-group mb-4 row-birthdate">
    {!! Form::label('birthday', 'Nascimento', ['class' => 'col-sm-2 form-control-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('birthday', null, ['class' => 'bg-grey-lighter w-full py-2 rounded shadow px-2 js-date']) !!}
    </div>
</div>
<div class="form-group mb-4 row">
    {!! Form::label('phone', 'Telefone', ['class' => 'col-sm-2 form-control-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('phone', null, ['class' => 'bg-grey-lighter w-full py-2 rounded shadow px-2 js-telefone']) !!}
    </div>
</div>
<div class="form-group mb-4 row-gender">
    <label class="col-sm-2">Sexo</label>
    <div class="col-sm-10">
        <div class="radio">
            <label class="c-input c-radio">
                {!! Form::radio('gender', 'male', true) !!}
                <span class="c-indicator"></span>
                Masculino
            </label>
        </div>
        <div class="radio">
            <label class="c-input c-radio">
                {!! Form::radio('gender', 'female') !!}
                <span class="c-indicator"></span>
                Feminino
            </label>
        </div>
    </div>
</div>
<div class="form-group cursor ">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Salvar', ['class' => 'bg-blue rounded p-3 text-white cursor-pointer']) !!}
    </div>
</div>
