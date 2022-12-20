<template>
    <!-- Header Card -->
    <div class="container">
        <div class="row header-card">
            <div class="col mt-5 mb-5 pt-md-5 pb-md-5">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img class="img-fluid rounded-start" :src="url + bandsurl + pesulaps.Image"
                                style="height: 95mm;" alt="...">
                        </div>
                        <div class="col-md-7 align-self-center">
                            <div class="card-body p-5">
                                <p class="card-title h1">{{ pesulaps.Nama }}</p>
                                <p class="card-title h3">Rp {{ formatPrice(pesulaps.Harga) }}</p>
                                <p class="card-text body1">
                                    Pertunjukan dari pesulap {{ pesulaps.Nama }} ini pasti akan
                                    membuat acara kalian semakin seru dan menegangkan tentunya.
                                </p>
                                <button type="button" class="button btn btn-success mt-auto text-white"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Masukan Ke Keranjang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="container-fluid">
        <div class="row about-section justify-content-center">
            <div class="col-md-8 mt-5 mb-5 pt-md-5 pb-md-5">
                <p class="h1 text-center"><strong>
                    Biografi
                </strong></p>
                <p class="body1 text-center mt-5 mb-md-5">
                    {{ pesulaps.Nama }} mulai menggeluti dunia sulap semenjak umur 10 tahun secara otodidak. Awal
                    kariernya pada tahun 2002 adalah dengan mengikuti sebuah kompetisi pemilihan Abang
                    dan None Kep. Seribu & Jakarta dan berhasil memenangi dua gelar yaitu sebagai Abang
                    Persahabatan 2002 dan Abang Favorit 2002. Pada awal 2007 Demian membintangi acara tv
                    pertamanya yang menggunakan namanya sendiri berjudul Demian Sang Illusionist, tayang selama
                    hampir dua tahun di ANTV. Di Tahun 2017 Demian mengikuti salah satu acara terbaik di America
                    yaitu America’s Got Talent dan memainkan ilusi-ilusi terbaiknya.
                </p>
            </div>
        </div>
    </div>


    <!-- modal -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan masukan Tanggal Pesanan Anda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="store">
                        <div class="form-outline mb-4">
                            <label for="inputTanggalLahir" class="form-label">Tanggal Pesanan</label>
                            <input type="date" class="form-control" id="inputTanggalLahir"
                                v-model="pembelian.tgl_pembelian_passing" />
                            <!-- validation -->
                            <div v-if="validation.tgl_pembelian" class="mt-2 alert alert-danger">
                                {{ validation.tgl_pembelian[0] }}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="button submit" class="btn btn-primary">Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { reactive } from "vue";
import { onMounted, ref } from "vue";
import { useRoute } from "vue-router";
import { createToaster } from "@meforma/vue-toaster";
// import { createToaster } from "@meforma/vue-toaster";

export default {
    methods: {
        formatPrice(value) {
            let val = (value / 1).toFixed(2).replace('.', ',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        },
    },
    setup() {
        // const toaster = createToaster({ /* options */ });
        //reactive state
        axios.defaults.headers.common["Authorization"] =
            localStorage.getItem("token_type") + " " + localStorage.getItem("token");
        let pesulaps = ref([]);

        let url = "http://localhost:8000/storage/";
        let bandsurl = "pesulaps/";
        //vue route
        // const router = useRouter();
        const route = useRoute();

        //pembelian
        const pembelian = reactive({
            tgl_pembelian_passing: "",
        });
        const validation = ref([]);
        const toaster = createToaster({ /* options */ });

        //mounted
        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("pesulaps/" + route.params.id + "")
                .then((response) => {
                    //assign state posts with response data
                    pesulaps.value = response.data.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });

        });

        function store() {
            let tgl_pembelian = pembelian.tgl_pembelian_passing;
            axios.post("pembelianpesulaps/store/" + localStorage.getItem("id_user") + "/" + route.params.id + "", {
                tgl_pembelian: tgl_pembelian
            }).then(() => {

                toaster.show(`Berhasil Tambah ke Keranjang`, {
                    type: "success",
                    position: "bottom-right",
                    duration: 3000,
                });

            }).catch((error) => {
                //assign state validation with error
                validation.value = error.response.data;
            });

        }


        //return
        return {
            pesulaps,
            url,
            bandsurl,
            validation,
            pembelian,
            store,
        }
    },
};
</script>