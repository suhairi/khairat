@extends('layouts.app')

@section('content')

<div id="my_users">

<div class="container">
    
    <div class="row">

        @include('admin.ahli.includes._daftar')

        @{{ message }}

        <div class="col-xs-9">
            <div class="panel panel-info">
                <div class="panel-heading"><h4><span class="glyphicon glyphicon-list-alt">&nbsp;&nbsp;&nbsp;Senarai Ahli</span></h4></div>
                <div class="panel-body">
                    <table class="table table-condensed table-hover table-striped">
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td><strong>No KP</strong></td>
                            <td><strong>No Ahli</strong></td>
                            <td><strong>Tarikh Lahir</strong></td>
                            <td><strong>No Telefon</strong></td>
                            <td><strong>Alamat</strong></td>
                            <td><strong>Pekerjaan</strong></td>
                            <td><strong>Status Keahlian</strong></td>
                            <td><strong>Pilihan</strong></td>
                        </tr>

<!--                         @if(!empty($members))

                            @foreach($members as $member) -->
                            <tr v-for="user in users">
                                <td>@{{ user.nama }}</td>
                                <td>@{{ user.nokp }}</td>
                                <td>@{{ user.no_ahli }}</td>
                                <td>@{{ user.dob }}</td>
                                <td>@{{ user.no_tel }}</td>
                                <td>@{{ user.alamat }}</td>
                                <td>@{{ user.pekerjaan }}</td>
                                <td>@{{ user.status }}</td>
                                <td>
                                    <button class="btn btn-primary glyphicon glyphicon-edit" @click="updateMember(user)">  Kemaskini</button>
                                </td>
                            </tr>
  <!--                           @endforeach

                        @else
                            <tr>
                                <td colspan="8" class="alert alert-danger">Tiada Data.</td>
                            </tr>

                        @endif -->
                    </table>

                   
                </div>
            </div>
        </div>
        
    </div>

</div>

</div>

@endsection