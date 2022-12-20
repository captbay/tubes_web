<template>
    <!-- Header Card -->
    <div class="container">
        <div class="row header-card">
            <div class="col mt-5 mb-5 pt-md-5 pb-md-5">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img class="img-fluid rounded-start" :src="url + bandsurl + komikas.Image"
                                style="height: 95mm;" alt="...">
                        </div>
                        <div class="col-md-7 align-self-center">
                            <div class="card-body p-5">
                                <p class="card-title h1">{{ komikas.Nama }}</p>
                                <p class="card-title h3">Rp {{ formatPrice(komikas.Harga) }}</p>
                                <p class="card-text body1">
                                    Ingin mendengarkan stand up comedy dengan pembawaan story telling?
                                    {{ komikas.Nama }} jawabannya. Selain membuat kalian tertawa ia juga akan
                                    membuat kalian nyaman dengan mendengarkan cerita stand up nya, membuat
                                    acara kalian menjadi lebih terhibur.
                                </p>
                                <div class="button">
                                    <a class="btn btn-success mt-auto"><router-link :to="{ name: 'detailStandUp' }"
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
                    {{ komikas.Nama }} memulai karirnya sebagai seorang pelawak tunggal pada tahun 2010. Diawali dari
                    Twivate Concert pertama yang ia lakukan di bulan April, {{ komikas.Nama }} memantapkan
                    niatnya untuk membangun awareness masyarakat tentang pelawak tunggal ini sendiri. Sampai
                    sekarang Pandji sudah melaksanakan berbagai tour yang mulai dari lokal bahkan sampai dunia
                    membuat kualitasnya sudah tidak perlu diragukan lagi dalam dunia stand up comedy.
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
        let komikas = ref([]);

        let url = "http://localhost:8000/storage/";
        let bandsurl = "komikas/";
        //vue route
        // const router = useRouter();
        const route = useRoute();
        //mounted
        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("komikas/" + route.params.id + "")
                .then((response) => {
                    //assign state posts with response data
                    komikas.value = response.data.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });

        })


        //return
        return {
            komikas,
            url,
            bandsurl,
        }
    },
};
</script>