
const app = new Vue({

    el: "#my_users",

    data: {
        message: "hello world!",
        users: [],
        form_member: {
            id: '',
            nama: '',
            nokp: '',
            no_ahli: '',
            dob: '',
            no_tel: '',
            pekerjaan: '',
            alamat: ''
        },
        edit: false
    },

    ready: function() {
        this.fetchMembers()
    },

    methods: {

        fetchMembers: function() {

            $.getJSON('/admin/ahli/API/members', function(data) {
                this.users = data;
            }.bind(this));
        },

        addMember: function() {
            console.log('addMember');
        },

        updateMember: function(members) {

            this.edit = true;
            var member = this.form_member;

            $.getJSON('/admin/ahli/API/members/' + members.id, function(data) {
                member.id = data.id;
                member.nama = data.nama;
                member.nokp = data.nokp;;
                member.no_ahli = data.no_ahli;
                member.dob = data.dob;
                member.no_tel = data.no_tel;
                member.pekerjaan = data.pekerjaan;
                member.alamat = data.alamat;
            });
        },

        editMember: function(member) {

            this.$http.patch('/admin/ahli/API/members/' + member.id, member, function() {
                console.log('editMember');
            });

            this.reset();

            alert('Berjaya. Ahli berjaya dikemaskini.');
            this.fetchMembers();

        },

        reset: function() {
            this.form_member = {
                id: '',
                nama: '',
                nokp: '',
                no_ahli: '',
                dob: '',
                no_tel: '',
                pekerjaan: '',
                alamat: ''
            }

            this.edit = false;
        }
    }




});