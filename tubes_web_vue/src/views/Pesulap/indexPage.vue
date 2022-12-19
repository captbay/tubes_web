<template>

    <body>
        <!-- List Event -->
        <div class="container-fluid bg-light p-5">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-dark font-weight-bold">List Pesulap Terbaik Kami</h1>
                </div>
                <div class="col-lg-10 align-self-baseline">
                    <p class="text-white-75 mb-1">
                        AMP Group menyediakan berbagai macam Pesulap yang bisa kalian pilih
                        sesuai dengan selera dan kebutuhan kalian. Mulai dari yang biasa saja sampai dengan
                        yang ekstrim ada ditempat kami. Jadi, silahkan memilih pesulap sesuai 
                        dengan kebutuhan yang anda inginkan.</p>
                </div>
                <div class="container p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top"
                                    src="../../assets/contohPesulap.jpg" style="height: 75mm;" alt="...">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Demian Aditya</h5>
                                        Aditya Prambudhi adalah seorang pesulap berkebangsaan Indonesia. Ia juga lebih 
                                        dikenal dengan sebutan Demian Sang Illusionist melalui acara yang dibawakan di televisi.
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto"><router-link
                                                :to="{ name: 'detailPesulap' }"
                                                class="dropdown-item">More</router-link></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top"
                                    src="../../assets/contohPesulap2.jpg" style="height: 75mm;" alt="...">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Marcel Radhival</h5>
                                        Marcel Radhival, atau yang lebih dikenal dengan nama panggung Pesulap Merah 
                                        yang bernama asli Haris Setianto adalah seorang pesulap dan YouTuber berkebangsaan Indonesia.
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto"><router-link
                                                :to="{ name: 'detailPesulap' }"
                                                class="dropdown-item">More</router-link></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top"
                                    src="../../assets/contohPesulap3.jpg" style="height: 75mm;" alt="...">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Limbad</h5>
                                        Salim Babad, yang dikenal sebagai Limbad adalah seorang pesulap dan aktor berkebangsaan Indonesia. 
                                        Popularitasnya semakin menanjak semenjak ia dinobatkan sebagai Master Magician dalam acara 
                                        The Master yang ditayangkan oleh RCTI.
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto"><router-link
                                                :to="{ name: 'detailPesulap' }"
                                                class="dropdown-item">More</router-link></a></div>
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
        axios.defaults.headers.common["Authorization"] =
            localStorage.getItem("token_type") + " " + localStorage.getItem("token");
        // const toaster = createToaster({ /* options */ });
        //reactive state
        let pesulaps = ref([]);
        // let index = null
        //mounted
        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("pesulaps")
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
            pesulaps
        }
    },
};
</script>