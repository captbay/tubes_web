<template>
    <!-- Header Card -->
    <div class="container">
        <div class="row header-card">
            <div class="col mt-5 mb-5 pt-md-5 pb-md-5">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img class="img-fluid rounded-start" src="../../assets/contohPesulap.jpg" style="height: 95mm;"
                                alt="...">
                        </div>
                        <div class="col-md-7 align-self-center">
                            <div class="card-body p-5">
                                <p class="card-title h1">Demian Aditya</p>
                                <p class="card-title h3">Rp 2.000.000,-</p>
                                <p class="card-text body1">
                                    Pertunjukan dari pesulap ini pasti akan
                                    membuat acara kalian semakin seru dan menegangkan tentunya.
                                </p>
                                <div class="button">
                                    <a class="btn btn-success mt-auto"><router-link :to="{ name: 'detailPesulap' }"
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
                    Demian mulai menggeluti dunia sulap semenjak umur 10 tahun secara otodidak. Awal 
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