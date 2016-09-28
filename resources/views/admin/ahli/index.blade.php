@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">

        @include('admin.ahli.includes._daftar')

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

                        @if(!empty($members))

                            @foreach($members as $member)
                            <tr>
                                <td>{{ $member->nama }}</td>
                                <td>{{ $member->nokp }}</td>
                                <td>{{ $member->no_ahli }}</td>
                                <td>{{ $member->dob->formatLocalized('%d %B %Y') }}</td>
                                <td>{{ $member->no_tel }}</td>
                                <td>{{ $member->alamat }}</td>
                                <td>{{ $member->pekerjaan }}</td>
                                <td>{{ $member->status }}</td>
                                <td><a href=""><span class=""></span><button class="btn btn-primary glyphicon glyphicon-edit">  Kemaskini</button></a></td>
                            </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="8" class="alert alert-danger">Tiada Data.</td>
                            </tr>

                        @endif
                    </table>

                    <div align="center">{{ $members->links() }}</div>
                </div>
            </div>
        </div>
        
    </div>

</div>

@endsection