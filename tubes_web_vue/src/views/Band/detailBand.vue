<template>
    <!-- Header Card -->
    <div class="container">
        <div class="row header-card">
            <div class="col mt-5 mb-5 pt-md-5 pb-md-5">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img class="img-fluid rounded-start" src="../../assets/contohBand.jpg" alt="...">
                        </div>
                        <div class="col-md-7 align-self-center">
                            <div class="card-body p-5">
                                <p class="card-title h1">Kotak</p>
                                <p class="card-title h3">Rp 2.000.000,-</p>
                                <p class="card-text body1">
                                    Untuk kamu yang menyukai musik Hard Rock, Pop, Rock Kotak adalah pilihannya.
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
                    Kotak adalah grup musik Rock yang terbentuk dari ajang The Dream Band pada tahun 2004 dan sampai
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
// import { createToaster } from "@meforma/vue-toaster";

export default {
    setup() {
        // const toaster = createToaster({ /* options */ });
        //reactive state
        axios.defaults.headers.common["Authorization"] =
            localStorage.getItem("token_type") + " " + localStorage.getItem("token");
        let bands = ref([]);
        // let index = null
        //mounted
        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("bands")
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
            bands
        }
    },
};
</script>