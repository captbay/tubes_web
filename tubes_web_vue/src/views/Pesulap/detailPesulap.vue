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
                                <div class="button">
                                    <a class="btn btn-success mt-auto"><router-link :to="{ name: 'detailPesulap' }"
                                        class="dropdown-item"><strong>Book Now</strong></router-link></a>
                                </div>
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
</template>

<script>
import axios from "axios";
import { onMounted, ref } from "vue";
import { useRoute } from "vue-router";

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

        })


        //return
        return {
            pesulaps,
            url,
            bandsurl,
        }
    },
};
</script>