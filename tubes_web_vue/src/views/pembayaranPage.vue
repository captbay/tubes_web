<template>
    <div class="container text-center bg-white">
        <p class="h1">Pembayaran</p>
        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">BAND</th>
                    <th scope="col">PESULAP</th>
                    <th scope="col">KOMIKA</th>
                    <th scope="col">TANGGAL PEMBAYARAN</th>
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
                    <td>nama</td>
                    <td>
                        <button class="btn btn-success btn-sm me-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="bi bi-pencil-fill"></i>
                            Edit
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container text-center bg-white">
        <p class="h1">Yakin membayar?</p>
        <router-link :to="{ name: 'pembayaran' }" class="nav-link">
            <button class="btn btn-info btn-lg text-light mt-4 mb-4">
                <i class="bi bi-cash"></i>
                Bayar
            </button>
        </router-link>
    </div>
</template>