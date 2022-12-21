<template>
    <div class="container text-center bg-white pt-4">
        <p class="h1">Band</p>
        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama Band</th>
                    <th scope="col">Harga Band</th>
                    <th scope="col">Tanggal Pembelian</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(band, id) in bands" :key="id">
                    <td>{{ band.bands.Nama }}</td>
                    <td>Rp {{ formatPrice(band.bands.Harga) }}</td>
                    <td>{{ format_date(band.tgl_pembelian) }}</td>
                    <td>
                        <button class="btn btn-success btn-sm me-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal1" @click.prevent="sendId(band)">
                            <i class="bi bi-pencil-fill"></i>
                            Edit
                        </button>
                        <button @click.prevent="DeleteBand(band.id)" class="btn btn-sm btn-danger ms-1"><i
                                class="bi bi-trash-fill"></i> Delete</button>
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
                    <th scope="col">Nama Stand Up</th>
                    <th scope="col">Harga Stand Up</th>
                    <th scope="col">Tanggal Pembelian</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(komika, id) in komikas" :key="id">
                    <td>{{ komika.komikas.Nama }}</td>
                    <td>Rp {{ formatPrice(komika.komikas.Harga) }}</td>
                    <td>{{ format_date(komika.tgl_pembelian) }}</td>
                    <td>
                        <button class="btn btn-success btn-sm me-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2" @click.prevent="sendId(komika)">
                            <i class="bi bi-pencil-fill"></i>
                            Edit
                        </button>
                        <button @click.prevent="DeleteKomika(komika.id)" class="btn btn-sm btn-danger ms-1"><i
                                class="bi bi-trash-fill"></i> Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container text-center bg-white">
        <p class="h1">Pesulap</p>
        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama Pesulap</th>
                    <th scope="col">Harga Pesulap</th>
                    <th scope="col">Tanggal Pembelian</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(pesulap, id) in pesulaps" :key="id">
                    <td>{{ pesulap.pesulaps.Nama }}</td>
                    <td>Rp {{ formatPrice(pesulap.pesulaps.Harga) }}</td>
                    <td>{{ format_date(pesulap.tgl_pembelian) }}</td>
                    <td>
                        <button class="btn btn-success btn-sm me-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal3" @click.prevent="sendId(pesulap)">
                            <i class="bi bi-pencil-fill"></i>
                            Edit
                        </button>
                        <button @click.prevent="DeletePesulap(pesulap.id)" class="btn btn-sm btn-danger ms-1"><i
                                class="bi bi-trash-fill"></i> Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container text-center bg-white">
        <p class="h1">Ingin melakukan pembayaran?</p>
        <button type="button" class="btn btn-primary btn-lg text-light mt-4 mb-4" data-bs-toggle="modal"
            data-bs-target="#exampleModalPembayaran">
            <i class="bi bi-bag-dash-fill"></i>
            Checkout
        </button>
        <!-- <router-link :to="{ name: 'pembayaran' }" class="nav-link">
            <button class="btn btn-primary btn-lg text-light mt-4 mb-4" @click="pembayaran()">
                <i class="bi bi-bag-dash-fill"></i>
                CheckOut
            </button>
        </router-link> -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalPembayaran" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan metode pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="storePembayaran">
                        <div class="form-outline mb-4">
                            <label for="inputTanggalLahir" class="form-label">Metode Bayar</label>
                            <select class="form-control" id="inputMetodeBayar" v-model="pembayaran.metode_pembayaran">
                                <option selected value="Tunai">Tunai</option>
                                <option value="Debit">Debit</option>
                                <option value="Kredit">Kredit</option>
                                <option value="E-money">e-money</option>
                            </select>
                            <!-- validation -->
                            <div v-if="validation.metode_pembayaran" class="mt-2 alert alert-danger">
                                {{ validation.metode_pembayaran[0] }}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="button submit" class="btn btn-primary" data-bs-dismiss="modal">Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- Modal Band-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Update Band </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="updateBand(selectedUser.id)">
                        <div class="form-outline mb-4">
                            <label for="inputTanggalLahir" class="form-label">Tanggal Pesanan</label>
                            <input type="date" class="form-control" id="inputTanggalLahir"
                                v-model="pembelianBand.tgl_pembelian_band" />
                            <!-- validation -->
                            <div v-if="validation1.tgl_pembelian" class="mt-2 alert alert-danger">
                                {{ validation1.tgl_pembelian[0] }}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="button submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Komika-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Update Stand Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="updateKomika(selectedUser.id)">
                        <div class="form-outline mb-4">
                            <label for="inputTanggalLahir" class="form-label">Tanggal Pesanan</label>
                            <input type="date" class="form-control" id="inputTanggalLahir"
                                v-model="pembelianKomika.tgl_pembelian_komika" />
                            <!-- validation -->
                            <div v-if="validation2.tgl_pembelian" class="mt-2 alert alert-danger">
                                {{ validation2.tgl_pembelian[0] }}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="button submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Pesulap-->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Update Pesulap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="updatePesulap(selectedUser.id)">
                        <div class="form-outline mb-4">
                            <label for="inputTanggalLahir" class="form-label">Tanggal Pesanan</label>
                            <input type="date" class="form-control" id="inputTanggalLahir"
                                v-model="pembelianPesulap.tgl_pembelian_pesulap" />
                            <!-- validation -->
                            <div v-if="validation3.tgl_pembelian" class="mt-2 alert alert-danger">
                                {{ validation3.tgl_pembelian[0] }}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="button submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { onMounted, ref } from "vue";
import { reactive } from "vue";
import { createToaster } from "@meforma/vue-toaster";
import { useRouter } from "vue-router";
import moment from "moment";


export default {
    methods: {
        sendId(item) {
            this.selectedUser = item;
            this.pembelianBand.tgl_pembelian_band = item.tgl_pembelian;
            this.pembelianKomika.tgl_pembelian_komika = item.tgl_pembelian;
            this.pembelianPesulap.tgl_pembelian_pesulap = item.tgl_pembelian;
        },
        formatPrice(value) {
            let val = (value / 1).toFixed(2).replace('.', ',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        },
        format_date(value) {
            if (value) {
                return moment(String(value)).format('DD MMMM YYYY')
            }
        },
    },
    setup() {
        const toaster = createToaster({ /* options */ });
        //reactive state
        axios.defaults.headers.common["Authorization"] =
            localStorage.getItem("token_type") + " " + localStorage.getItem("token");

        // const route = useRoute();
        const validation = ref([]);
        const validation1 = ref([]);
        const validation2 = ref([]);
        const validation3 = ref([]);

        let bands = ref([]);
        let pesulaps = ref([]);
        let komikas = ref([]);
        let index = null
        let selectedUser = ref([]);

        const router = useRouter();


        //pembelian
        const pembelianBand = reactive({
            tgl_pembelian_band: "",
        });
        const pembelianKomika = reactive({
            tgl_pembelian_komika: "",
        });
        const pembelianPesulap = reactive({
            tgl_pembelian_pesulap: "",
        });
        // pembayaran
        const pembayaran = reactive({
            metode_pembayaran: "Tunai",
            total_bayar: 0,
        });


        //mounted data semua
        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("pembelianbands")
                .then((response) => {
                    //assign state posts with response data
                    bands.value = response.data.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });

            axios
                .get("pembelianpesulaps")
                .then((response) => {
                    //assign state posts with response data
                    pesulaps.value = response.data.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });

            axios
                .get("pembeliankomikas")
                .then((response) => {
                    //assign state posts with response data
                    komikas.value = response.data.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });

        });
        // detele data semua
        function DeleteBand(id) {

            //delete data post by ID
            axios.delete(`pembelianbands/${id}`)
                .then(() => {
                    index = bands.value.findIndex((band) => band.id == id)
                    //splice posts 
                    bands.value.splice(index, 1);
                    toaster.show(`Berhasil di Hapus`, {
                        type: "success",
                        position: "bottom-right",
                        duration: 3000,
                    });

                }).catch(error => {
                    console.log(error.response.data)
                })

        }
        function DeleteKomika(id) {

            //delete data post by ID
            axios.delete(`pembeliankomikas/${id}`)
                .then(() => {
                    index = komikas.value.findIndex((komika) => komika.id == id)
                    //splice posts 
                    komikas.value.splice(index, 1);
                    toaster.show(`Berhasil di Hapus`, {
                        type: "success",
                        position: "bottom-right",
                        duration: 3000,
                    });

                }).catch(error => {
                    console.log(error.response.data)
                })

        }
        function DeletePesulap(id) {

            //delete data post by ID
            axios.delete(`pembelianpesulaps/${id}`)
                .then(() => {
                    index = pesulaps.value.findIndex((pesulap) => pesulap.id == id)
                    //splice posts 
                    pesulaps.value.splice(index, 1);
                    toaster.show(`Berhasil di Hapus`, {
                        type: "success",
                        position: "bottom-right",
                        duration: 3000,
                    });

                }).catch(error => {
                    console.log(error.response.data)
                })

        }
        // update data semua
        //method update
        function updateBand(id) {
            let tgl_pembelian = pembelianBand.tgl_pembelian_band;
            axios.put(`pembelianbands/${id}`, {
                tgl_pembelian: tgl_pembelian,
            }).then(() => {
                index = bands.value.findIndex((band) => band.id == id)
                //splice posts 
                this.bands[index].tgl_pembelian = tgl_pembelian;
                // console.log(this.bands[index].tgl_pembelian);
                // console.log(index);
                toaster.show(`Berhasil di Edit`, {
                    type: "success",
                    position: "bottom-right",
                    duration: 3000,
                });

                //or in file components
                this.$forceUpdate();
            }).catch(error => {
                //assign state validation with error 
                validation1.value = error.response.data
            })
        }
        function updateKomika(id) {
            let tgl_pembelian = pembelianKomika.tgl_pembelian_komika;
            axios.put(`pembeliankomikas/${id}`, {
                tgl_pembelian: tgl_pembelian,
            }).then(() => {
                index = komikas.value.findIndex((komika) => komika.id == id)
                //splice posts 
                this.komikas[index].tgl_pembelian = tgl_pembelian;
                toaster.show(`Berhasil di Edit`, {
                    type: "success",
                    position: "bottom-right",
                    duration: 3000,
                });
            }).catch(error => {
                //assign state validation with error 
                validation2.value = error.response.data
            })
        }
        function updatePesulap(id) {
            let tgl_pembelian = pembelianPesulap.tgl_pembelian_pesulap;
            axios.put(`pembelianpesulaps/${id}`, {
                tgl_pembelian: tgl_pembelian,
            }).then(() => {
                index = pesulaps.value.findIndex((pesulap) => pesulap.id == id)
                //splice posts 
                this.pesulaps[index].tgl_pembelian = tgl_pembelian;
                toaster.show(`Berhasil di Edit`, {
                    type: "success",
                    position: "bottom-right",
                    duration: 3000,
                });
            }).catch(error => {
                //assign state validation with error 
                validation3.value = error.response.data
            })
        }
        // pembayaran store
        function storePembayaran() {
            bands.value.forEach((item) => {
                pembayaran.total_bayar += parseInt(item.bands.Harga);
            })
            komikas.value.forEach((item) => {
                pembayaran.total_bayar += parseInt(item.komikas.Harga);
            })
            pesulaps.value.forEach((item) => {
                pembayaran.total_bayar += parseInt(item.pesulaps.Harga);
            })

            let metode_pembayaran = pembayaran.metode_pembayaran;
            let total_bayar = pembayaran.total_bayar;
            axios.post("pembayarans/store/" + localStorage.getItem("id_user") + "", {
                metode_pembayaran: metode_pembayaran,
                total_bayar: total_bayar,
            }).then(() => {

                toaster.show(`Berhasil Tambah ke Pembayaran`, {
                    type: "success",
                    position: "bottom-right",
                    duration: 3000,
                });

                router.push({
                    path: "/pembayaran",
                });


            }).catch((error) => {
                //assign state validation with error
                validation.value = error.response.data;
            });

        }
        //return
        return {
            bands,
            pesulaps,
            komikas,
            DeleteBand,
            DeleteKomika,
            DeletePesulap,
            pembelianBand,
            pembelianKomika,
            pembelianPesulap,
            pembayaran,
            validation,
            validation1,
            validation2,
            validation3,
            updateBand,
            updateKomika,
            updatePesulap,
            selectedUser,
            storePembayaran,
        }
    },
};
</script>