<template>
    <div class="col-xs-9">
            <div class="panel panel-info">
                <div class="panel-heading"><h4><span class="glyphicon glyphicon-list-alt">&nbsp;&nbsp;&nbsp;Senarai Ahli</span></h4></div>
                <div class="panel-body">
                    <table class="table table-condensed table-hover table-striped">
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td><strong>No KP</strong></td>
                            <td><strong>No Ahli</strong></td>
                            <td><strong>No Telefon</strong></td>
                            <td><strong>Alamat</strong></td>
                            <td><strong>Pekerjaan</strong></td>
                            <td><strong>Status Keahlian</strong></td>
                            <td><strong>Pilihan</strong></td>
                        </tr>

                        <tr v-for="member in members">
                            <td>{{ $member.nama }}</td>
                            <td>{{ $member.nokp }}</td>
                            <td>{{ $member.no_ahli }}</td>
                            <td>{{ $member.no_tel }}</td>
                            <td>{{ $member.alamat }}</td>
                            <td>{{ $member.pekerjaan }}</td>
                            <td>{{ $member.status }}</td>
                            <td><a href=""><span class=""></span><button class="btn btn-primary glyphicon glyphicon-edit">  Kemaskini</button></a></td>
                        </tr>

                    </table>

                    <div align="center">{{ $members->links() }}</div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        data() {
            return {
                members: 
            };
        }
    }
</script>