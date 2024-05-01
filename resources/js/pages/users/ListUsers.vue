<script setup>
const users = [{
    id: 1,
    name: 'john doe',
    email: 'john@example.com',
}, {
    id: 2,
    name: 'jane doe',
    email: 'jane@example.com',
}];
</script>
<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
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


                    <tr v-for="user in users" :key="user.id">
                        <td>
                           {{user.id}}
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

</template>
