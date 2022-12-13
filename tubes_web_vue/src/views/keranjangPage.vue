<template>
    <div class="p-5"></div>

    <div class="container text-center bg-white">
        <p class="h1">Band</p>
        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NAMA DEPARTEMEN</th>
                    <th scope="col">NAMA MANAGER</th>
                    <th scope="col">JUMLAH PEGAWAI</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr v-for="(departemen, id) in departemens" :key="id">
                    <td>{{ departemen.nama_departemen }}</td>
                    <td>{{ departemen.nama_manager }}</td>
                    <td>{{ departemen.jumlah_pegawai }}</td>
                    <td class="text-center">
                        <router-link :to="{ name: 'departemen.edit', params: { id: departemen.id } }"
                            class="btn btn-sm btn-primary mr-1">EDIT</router-link>
                        <button @click.prevent="departemenDelete(departemen.id)"
                            class="btn btn-sm btn-danger ml-1">DELETE</button>
                    </td>
                </tr> -->
                <tr>
                    <td>nama</td>
                    <td>nama</td>
                    <td>nama</td>
                    <td>
                        <button class="btn btn-success btn-sm me-2"><i class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container text-center bg-white">
        <p class="h1">Stand Up</p>
        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NAMA DEPARTEMEN</th>
                    <th scope="col">NAMA MANAGER</th>
                    <th scope="col">JUMLAH PEGAWAI</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr v-for="(departemen, id) in departemens" :key="id">
                    <td>{{ departemen.nama_departemen }}</td>
                    <td>{{ departemen.nama_manager }}</td>
                    <td>{{ departemen.jumlah_pegawai }}</td>
                    <td class="text-center">
                        <router-link :to="{ name: 'departemen.edit', params: { id: departemen.id } }"
                            class="btn btn-sm btn-primary mr-1">EDIT</router-link>
                        <button @click.prevent="departemenDelete(departemen.id)"
                            class="btn btn-sm btn-danger ml-1">DELETE</button>
                    </td>
                </tr> -->
                <tr>
                    <td>nama</td>
                    <td>nama</td>
                    <td>nama</td>
                    <td>
                        <button class="btn btn-success btn-sm me-2"><i class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container text-center bg-white">
        <p class="h1">Magician</p>
        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NAMA DEPARTEMEN</th>
                    <th scope="col">NAMA MANAGER</th>
                    <th scope="col">JUMLAH PEGAWAI</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr v-for="(departemen, id) in departemens" :key="id">
                    <td>{{ departemen.nama_departemen }}</td>
                    <td>{{ departemen.nama_manager }}</td>
                    <td>{{ departemen.jumlah_pegawai }}</td>
                    <td class="text-center">
                        <router-link :to="{ name: 'departemen.edit', params: { id: departemen.id } }"
                            class="btn btn-sm btn-primary mr-1">EDIT</router-link>
                        <button @click.prevent="departemenDelete(departemen.id)"
                            class="btn btn-sm btn-danger ml-1">DELETE</button>
                    </td>
                </tr> -->
                <tr>
                    <td>nama</td>
                    <td>nama</td>
                    <td>nama</td>
                    <td>
                        <button class="btn btn-success btn-sm me-2"><i class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>