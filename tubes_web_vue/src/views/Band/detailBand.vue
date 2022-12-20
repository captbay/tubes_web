<template>
    <!-- Header Card -->
    <div class="container">
        <div class="row header-card">
            <div class="col mt-5 mb-5 pt-md-5 pb-md-5">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img class="img-fluid rounded-start" :src="url + bandsurl + bands.Image"
                                style="height: 95mm;" alt="...">
                        </div>
                        <div class="col-md-7 align-self-center">
                            <div class="card-body p-5">
                                <p class="card-title h1">{{ bands.Nama }}</p>
                                <p class="card-title h3">Rp {{ formatPrice(bands.Harga) }}</p>
                                <p class="card-text body1">
                                    Untuk kamu yang menyukai musik Hard Rock, Pop, Rock {{ bands.Nama }} adalah
                                    pilihannya.
                                    Lagu-lagu meraka siap mengguncang acara kamu.
                                </p>
                                <div class="button">
                                    <a class="btn btn-success mt-auto"><router-link :to="{ name: 'detailBand' }"
                                            class="dropdown-item">Book Now</router-link></a>
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
                <p class="h1 text-center">
                    Biografi
                </p>
                <p class="body1 text-center mt-5 mb-md-5">
                    {{ bands.Nama }} adalah grup musik Rock yang terbentuk dari ajang The Dream Band pada tahun 2004 dan
                    sampai
                    sekarang masih aktif dengan beranggotakan Tantri (Tantri Syalindri Ichlasari),
                    Chua (Swasti Sabdastantri) dan Cella (Marion Marcella). Band ini sudah meraih berbagai
                    penghargaan dibidangnya, jadi tidak perlu diragukan lagi kualitas dari band satu ini.
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
        let bands = ref([]);

        let url = "http://localhost:8000/storage/";
        let bandsurl = "bands/";
        //vue route
        // const router = useRouter();
        const route = useRoute();
        //mounted
        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("bands/" + route.params.id + "")
                .then((response) => {
                    //assign state posts with response data
                    bands.value = response.data.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });

        })


        //return
        return {
            bands,
            url,
            bandsurl,
        }
    },
};
</script>