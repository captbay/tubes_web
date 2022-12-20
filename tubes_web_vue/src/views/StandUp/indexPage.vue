<template>

    <body>
        <!-- List Event -->
        <div class="container-fluid bg-light p-5">
            <div class="row gx-4 gx-lg-5 h-100 d-flex align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-dark font-weight-bold">List StandUP Terbaik Kami</h1>
                </div>
                <div class="col-lg-10 align-self-baseline">
                    <p class="text-white-75 mb-1">
                        AMP Group menyediakan berbagai macam StandUP yang bisa kalian pilih
                        sesuai dengan selera dan kebutuhan kalian. Sesuaikan genre dan musik
                        yang kalian mau untuk memeriahkan acara kalian.</p>
                </div>
                <div>
                    <div class="container ps-5">
                        <div class="row h-100 d-flex align-items-center justify-content-center text-center">
                            <div class="col-md-4" v-for="(komika, index) in komikas" :key="index">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" :src="url + bandsurl + komika.Image" alt="..."
                                        style="max-height: 200px;">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h3 class="fw-bolder">{{ komika.Nama }}</h3>
                                        </div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-success mt-auto">
                                                <router-link :to="{ name: 'detailStandUp', params: { id: komika.id }, }"
                                                    class="dropdown-item">Lebih detail</router-link>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</template>

<script>
import axios from "axios";
import { onMounted, ref } from "vue";
// import { createToaster } from "@meforma/vue-toaster";

export default {
    setup() {
        // const toaster = createToaster({ /* options */ });
        //reactive state
        axios.defaults.headers.common["Authorization"] =
            localStorage.getItem("token_type") + " " + localStorage.getItem("token");
        let komikas = ref([]);

        let url = "http://localhost:8000/storage/";
        let bandsurl = "komikas/";
        // let index = null
        //mounted
        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("komikas")
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