<template>
    <div class="container text-center bg-white">
        <p class="h1">Band</p>
        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NAMA</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">DESKRIPSI</th>
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
                        <button class="btn btn-danger btn-sm text-light" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">
                            <i class="bi bi-trash-fill"></i>
                            Delete
                        </button>
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
                    <th scope="col">NAMA</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">DESKRIPSI</th>
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
                        <button class="btn btn-danger btn-sm text-light" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">
                            <i class="bi bi-trash-fill"></i>
                            Delete
                        </button>
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
                    <th scope="col">NAMA</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">DESKRIPSI</th>
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
                        <button class="btn btn-danger btn-sm text-light" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">
                            <i class="bi bi-trash-fill"></i>
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container text-center bg-white">
        <p class="h1">Ingin melakukan pembayaran?</p>
        <router-link :to="{ name: 'pembayaran' }" class="nav-link">
            <button class="btn btn-primary btn-lg text-light mt-4 mb-4">
                <i class="bi bi-bag-dash-fill"></i>
                CheckOut
            </button>
        </router-link>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pesanan</h1>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">Kenneth Valdez</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Harga</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">fip@jukmuh.al</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Gambar</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">(239) 816-9029</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Deskripsi</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">(320) 380-4539</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-success">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Check Out</h1>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menghapus event dari keranjang?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-success">Yes</button>
                </div>
            </div>
        </div>
    </div>
</template>