<template>
    <!-- List Event -->
    <div class="container-fluid bg-light p-5">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-dark font-weight-bold">List Komika Terbaik Kami</h1>
            </div>
            <div class="col-lg-10 align-self-baseline">
                <p class="text-white-75 mb-1">
                    AMP Group menyediakan berbagai macam Komika yang bisa kalian pilih
                    sesuai dengan selera dan kebutuhan kalian. Kami memastikan stand up 
                    dengan kualitas terjamin dan anda pasti mendapatkan kualitas stand up 
                    terbaik disini. Kami juga memiliki banyak pilihan Komika yang tersedia 
                    dengan gaya stand up nya masing-masing sesuai kebutuhan anda.</p>
            </div>
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="../../assets/contohKomika.jpg" style="height: 75mm;" alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Pandji Pragiwaksono</h5>
                                    Pandji Pragiwaksono adalah seorang aktor, pelawak tunggal, pembawa acara, 
                                    penyiar radio, penulis, rapper, youtuber dan sutradara Indonesia.
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success mt-auto"><router-link
                                            :to="{ name: 'detailStandUp' }" class="dropdown-item">More</router-link></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="../../assets/contohKomika3.jpg" style="height: 75mm;" alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Rigen Rakelna</h5>
                                    Rigen Rakelna atau Rigen adalah seorang pelawak tunggal dan aktor berkebangsaan Indonesia.
                                    Sekarang ia bersama dengan teman Komika lainnya membentuk group lawak bernama GJLS
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success mt-auto"><router-link
                                            :to="{ name: 'detailStandUp' }" class="dropdown-item">More</router-link></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="../../assets/contohKomika2.jpg" style="height: 75mm;" alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Raditya Dika</h5>
                                    Radity Dika adalah seorang komedian, penulis, sutradara, produser, penulis skenario, 
                                    pebisnis, YouTuber, dan aktor Indonesia.
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success mt-auto"><router-link
                                            :to="{ name: 'detailStandUp' }" class="dropdown-item">More</router-link></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { onMounted, ref } from "vue";
// import { createToaster } from "@meforma/vue-toaster";

export default {
    setup() {
        axios.defaults.headers.common["Authorization"] =
            localStorage.getItem("token_type") + " " + localStorage.getItem("token");
        // const toaster = createToaster({ /* options */ });
        //reactive state
        let komikas = ref([]);
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
            komikas
        }
    },
};
</script>