<div class="col-xs-4">
    <div class="panel panel-primary">
        <div class="panel-heading"><h4><span class="glyphicon glyphicon-pencil">&nbsp;&nbsp;&nbsp;Daftar Ahli Baru</span></h4></div>
        <div class="panel panel-body">
                
            {{ Form::open() }}

            {{ Form::label('*Nama Ahli') }}
            {{ Form::text('nama', '', ['class' => 'form-control']) }}

            {{ Form::label('*No KP') }}
            {{ Form::text('nokp', '', ['class' => 'form-control']) }}

            {{ Form::label('*No Ahli') }}
            {{ Form::text('no_ahli', '', ['class' => 'form-control']) }}

            {{ Form::label('Tarikh Lahir') }}
            {{ Form::date('dob', '', ['class' => 'form-control']) }}

            {{ Form::label('No Telefon') }}
            {{ Form::text('no_tel', '', ['class' => 'form-control']) }}

            {{ Form::label('Pekerjaan') }}
            {{ Form::text('pekerjaan', '', ['class' => 'form-control']) }}

            {{ Form::label('Alamat') }}
            {{ Form::textarea('alamat', '', ['class' => 'form-control', 'rows' => '3']) }}

            <p><div align="right">{{ Form::submit('Daftar Ahli Baru', ['class' => 'btn btn-primary'])}}</div></p>

            {{ Form::close() }}

        </div>
    </div>
</div>