<div class="col-xs-3">
    <div class="panel panel-primary">
        <div class="panel-heading"><h4><span class="glyphicon glyphicon-pencil">&nbsp;&nbsp;&nbsp;Daftar Ahli Baru</span></h4></div>
        <div class="panel panel-body">

            Edit : @{{ edit }} <br />
            ID : @{{ form_member.id }} <br />

                
            {{ Form::open(['url' => '#', '@submit.prevent' => 'addMembers']) }}

            {{ Form::label('*Nama Ahli') }}
            {{ Form::text('nama', '', ['class' => 'form-control', 'v-model' => 'form_member.nama']) }}

            {{ Form::label('*No KP') }}
            {{ Form::text('nokp', '', ['class' => 'form-control', 'v-model' => 'form_member.nokp']) }}

            {{ Form::label('*No Ahli') }}
            {{ Form::text('no_ahli', '', ['class' => 'form-control', 'v-model' => 'form_member.no_ahli']) }}

            {{ Form::label('Tarikh Lahir') }}
            {{ Form::date('dob', '', ['class' => 'form-control', 'v-model' => 'form_member.dob']) }}

            {{ Form::label('No Telefon') }}
            {{ Form::text('no_tel', '', ['class' => 'form-control', 'v-model' => 'form_member.no_tel']) }}

            {{ Form::label('Pekerjaan') }}
            {{ Form::text('pekerjaan', '', ['class' => 'form-control', 'v-model' => 'form_member.pekerjaan']) }}

            {{ Form::label('Alamat') }}
            {{ Form::textarea('alamat', '', ['class' => 'form-control', 'v-model' => 'form_member.alamat', 'rows' => '3']) }}

            <br />
            <div align="right">
                    {{ Form::submit('Daftar Ahli Baru', ['class' => 'btn btn-primary', 'v-if' => '!edit']) }}
                    {{ Form::button('Kemaskini', ['class' => 'btn btn-primary', 'v-if' => 'edit', '@click' => 'editMember(form_member)']) }}
                    <button class="btn btn-default" v-if = "edit" v-on:click = "reset">Reset</button>
            </div>

            {{ Form::close() }}

        </div>
    </div>
</div>