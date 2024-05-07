<script setup>
import { onMounted, ref , reactive} from 'vue';

// const users = [{
//     id: 1,
//     name: 'john doe',
//     email: 'john@example.com',
// }, {
//     id: 2,
//     name: 'jane doe',
//     email: 'jane@example.com',
// }];
const users = ref([]);

const form = reactive({
    name : '',
    email : '',
    password : '',
});

const getUsers = () => {
    axios.get('/api/users')
        .then((response) => {
            users.value = response.data;
        })
}

const createUser = () => {
    axios.post('/api/users', form)
}

onMounted(() => {
    getUsers();
})
</script>
<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Users</h1>
                </div>
                <div class="col-12 mt-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Add New User
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th style="width: 10px;">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered date</th>
                        <th>Role</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody class="">


                    <tr v-for="(user, index) in users" :key="user.id">
                        <td>
                            {{ index + 1 }}
                        </td>
                        <td>
                            {{ user.name }}
                        </td>
                        <td>
                            {{ user.email }}
                        </td>
                        <td>hhfn</td>
                        <td>hhfn</td>

                    </tr>


                </tbody>
            </table>
        </div>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add new users</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="buysell-block">
                    <form action="#" id="buy-airtime" method="POST" enctype="multipart/form-data">
                        <div class=" form-group">
                            <div class="">

                                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                                <div>
                                    <div class="form-group"><label> Name<span class="text-danger ">
                                            </span> </label><input v-model="form.name" class="form-control phone"
                                            placeholder="Enter Phone number" type="tel"></div>

                                    <div class="form-group"><label> Email <span class="text-danger ">
                                            </span> </label><input v-model="form.email"  class="form-control phone"
                                            placeholder="Enter Phone number" type="tel"></div>

                                    <div class="form-group"><label> Password<span
                                                class="text-danger "> </span> </label><input v-model="form.password"
                                            class="form-control amount" placeholder="Enter Amount" type="number">
                                    </div>




                                </div>
                            </div>
                        </div>


                    </form>
                </div>

                <!-- Modal footer -->


                <div class="modal-footer">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <button @oclick="createUser" type="button" class="btn btn-success" data-dismiss="modal">save</button>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</template>
