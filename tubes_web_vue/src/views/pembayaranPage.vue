<template>
    <div class="container text-center bg-white pt-4">
        <h1>Pembayaran</h1>
        <table class="table table-striped table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Metode Pembayaran</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(pembayaran, id) in pembayarans" :key="id">
                    <td>{{ pembayaran.users.name }}</td>
                    <td>{{ pembayaran.metode_pembayaran }}</td>
                    <td>Rp {{ formatPrice(pembayaran.total_bayar) }}</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm me-2 text-light" data-bs-toggle="modal"
                            data-bs-target="#exampleModalPembayaran" @click.prevent="sendId(pembayaran)">
                            <i class="bi bi-bag-dash-fill"></i>
                            Edit
                        </button>
                        <button @click.prevent="DeletePembayaran(pembayaran.id)" class="btn btn-sm btn-success ms-1"><i
                                class="bi bi-cash-coin"></i> Bayar</button>
                    </td>
                    <div class="alert alert-danger" v-if="pembayarans == []">Data Pembayaran belum tersedia
                    </div>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container text-center bg-white">
        <h1>Yakin membayar?</h1>
        <button @click.prevent="DeletePembayaranAll()" class="btn btn-success btn-lg text-light mt-4 mb-4">
            <i class="bi bi-cash-coin"></i>
            Bayar Semua
        </button>
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
                    <form @submit.prevent="updatePembayaran(selectedUser.id)">
                        <div class="form-outline mb-4">
                            <label for="inputTanggalLahir" class="form-label">Metode Bayar</label>
                            <select class="form-control" id="inputMetodeBayar" v-model="pembayaran.metode_pembayaran">
                                <option value="Tunai">Tunai</option>
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
</template>

<script>
import axios from "axios";
import { onMounted, ref } from "vue";
import { reactive } from "vue";
import { createToaster } from "@meforma/vue-toaster";
// import { useRouter } from "vue-router";


export default {
    methods: {
        sendId(item) {
            this.selectedUser = item;
            this.pembayaran.metode_pembayaran = item.metode_pembayaran;
        },
        formatPrice(value) {
            let val = (value / 1).toFixed(2).replace('.', ',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        },
    },
    setup() {
        const toaster = createToaster({ /* options */ });
        //reactive state
        axios.defaults.headers.common["Authorization"] =
            localStorage.getItem("token_type") + " " + localStorage.getItem("token");

        // const route = useRoute();
        const validation = ref([]);

        let pembayarans = ref([]);

        let index = null
        let selectedUser = ref([]);

        // const router = useRouter();

        // pembayaran
        const pembayaran = reactive({
            metode_pembayaran: "",
            total_bayar: 0,
        });


        //mounted data semua
        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("pembayarans")
                .then((response) => {
                    //assign state posts with response data
                    pembayarans.value = response.data.data;

                })
                .catch((error) => {
                    console.log(error.response.data);
                });

        });
        // detele data id
        function DeletePembayaran(id) {

            //delete data post by ID
            axios.delete(`pembayarans/${id}`)
                .then(() => {
                    index = pembayarans.value.findIndex((pembayaran) => pembayaran.id == id)
                    //splice posts 
                    pembayarans.value.splice(index, 1);
                    toaster.show(`Pembayaran berhasil`, {
                        type: "success",
                        position: "bottom-right",
                        duration: 3000,
                    });

                    // router.push({
                    //     path: "/",
                    // });

                }).catch(error => {
                    console.log(error.response.data)
                })

        }
        function DeletePembayaranAll() {

            //delete data post by ID
            axios.post(`pembayarans/deleteAll`)
                .then(() => {
                    //splice posts 
                    pembayarans.value = [];
                    toaster.show(`Pembayaran Semua berhasil`, {
                        type: "success",
                        position: "bottom-right",
                        duration: 3000,
                    });

                    // router.push({
                    //     path: "/",
                    // });

                }).catch(error => {
                    console.log(error.response.data)
                })

        }
        // update data semua
        //method update
        function updatePembayaran(id) {
            let metode_pembayaran = pembayaran.metode_pembayaran;
            axios.put(`pembayarans/${id}`, {
                metode_pembayaran: metode_pembayaran,
            }).then(() => {
                index = pembayarans.value.findIndex((pembayaran) => pembayaran.id == id)
                //splice posts 
                this.pembayarans[index].metode_pembayaran = metode_pembayaran;
                // console.log(this.pembayarans[index].tgl_pembelian);
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
                validation.value = error.response.data
            })
        }
        //return
        return {
            pembayarans,
            DeletePembayaran,
            pembayaran,
            validation,
            updatePembayaran,
            selectedUser,
            DeletePembayaranAll,
        }
    },
};
</script>