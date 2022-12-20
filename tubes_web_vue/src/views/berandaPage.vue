<template>
    <div class="p-0"></div>

    <!-- Header -->
    <div class="bg-image">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); height: 85vh;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <h1 class="text-white mb-0">Hi {{ users.name }}, Silahkan cari Band, Komika dan Pesulap Untuk Event
                    Anda!
                </h1>
            </div>
        </div>
    </div>

    <!-- Biografi -->
    <div class="container-fluid bg-white p-5">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-dark font-weight-bold">Biografi</h1>
            </div>
            <div class="col-lg-10 align-self-baseline">
                <p class="text-white-75 mb-5">
                    Akordmusic Production Group adalah penyelenggara acara yang menyediakan 
                    berbagai macam event yang anda butuhkan. Dari event band, pertunjukan stand up comedy, 
                    serta pertunjukan sulap yang siap menghibur anda. Kami memastikan talenta yang dipilih 
                    merupakan yang terbaik dibidangnya agar dapat memeriahkan event anda.</p>
                <router-link :to="{ name: 'tentangKami' }" class="nav-link">
                    <button class="btn btn-success">
                        Find Out More
                    </button>
                </router-link>
            </div>
        </div>
    </div>


    <!-- List Event -->
    <div class="container-fluid bg-light p-5">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-dark font-weight-bold">List Event Terbaik Kami</h1>
            </div>
            <div class="col-lg-10 align-self-baseline">
                <p class="text-white-75 mb-1">
                    Akordmusic Production selalu memastikan Band, Komika, dan Pesulap dengan kualitas terjamin 
                    dan kami memastikan anda mendapatkan kualitas terbaik di sini. Kami juga memiliki banyak pilihan 
                    Band, Komika, dan Pesulap yang tersedia dengan gayanya masing-masing sesuai kebutuhan anda. 
                    Jadi, anda bisa memilih mereka sesuai dengan yang anda inginkan.</p>
            </div>
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="../assets/contohBand.jpg" style="height:75mm;" alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Daftar Band</h5>
                                    AMP Group menyediakan berbagai macam Band yang bisa kalian pilih
                                    sesuai dengan selera dan kebutuhan kalian...
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <router-link :to="{ name: 'band' }" class="nav-link">
                                        <a class="btn btn-outline-success mt-auto" href="#">More</a>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="../assets/contohKomika.jpg" style="height:75mm;" alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Daftar Komika</h5>
                                    AMP Group menyediakan berbagai macam Komika yang bisa kalian pilih
                                    sesuai dengan selera dan kebutuhan kalian...
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <router-link :to="{ name: 'standUp' }" class="nav-link">
                                        <a class="btn btn-outline-success mt-auto" href="#">More</a>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="../assets/contohPesulap.jpg" style="height:75mm;" alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Daftar Pesulap</h5>
                                    AMP Group menyediakan berbagai macam Pesulap yang bisa kalian pilih
                                    sesuai dengan selera dan kebutuhan kalian...
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <router-link :to="{ name: 'pesulapIndex' }" class="nav-link">
                                        <a class="btn btn-outline-success mt-auto" href="#">More</a>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kontak -->
    <div class="container-fluid bg-white p-5">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-dark font-weight-bold">Kontak</h1>
            </div>
            <div class="col-lg-10 align-self-baseline">
                <p class="text-white-75 mb-5">
                    Kami adalah agensi yang selalu menerima masukan dan kritikan untuk berubah 
                    menjadi agensi yang lebih baik untu kedepannya. Maka dari itu, jangan ragu
                    untuk terhubung dengan kami</p>
                <router-link :to="{ name: 'kontak' }" class="nav-link">
                    <button class="btn btn-success">
                        Hubungi Kami
                    </button>
                </router-link>
            </div>
        </div>
    </div>

    <!-- Kenapa Kami? -->
    <div class="container-fluid bg-light p-5">
        <div class="container bg-light">
            <div class="col-lg-12 align-self-end">
                <h1 class="text-dark font-weight-bold">Kenapa Harus Layanan Kami?</h1>
            </div>
            <div class="col-lg-10 align-self-baseline">
                <div class="d-flex">
                    <i class="bi bi-check-circle"></i>
                    <p class="body1 ms-3">
                        Ratusan review dari pelanggan setia kami
                    </p>
                </div>
                <div class="d-flex">
                    <i class="bi bi-check-circle"></i>
                    <p class="body1 ms-3">
                        Kontrak terpercaya dari kami
                    </p>
                </div>
                <div class="d-flex">
                    <i class="bi bi-check-circle"></i>
                    <p class="body1 ms-3">
                        Pilihan Band, Komika, Pesulap terbaik dan langsung diseleksi oleh tim kami
                    </p>
                </div>
                <div class="d-flex">
                    <i class="bi bi-check-circle"></i>
                    <p class="body1 ms-3">
                        Kemudahan booking dan transaksi
                    </p>
                </div>
                <router-link :to="{ name: 'tentangKami' }" class="nav-link">
                    <button class="btn btn-success">
                        Kenali Kami
                    </button>
                </router-link>
                <p></p>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { onMounted, ref } from "vue";

export default {
    setup() {
        axios.defaults.headers.common["Authorization"] =
            localStorage.getItem("token_type") + " " + localStorage.getItem("token");
        //reactive state
        let users = ref([]);
        let id_user = localStorage.getItem("id_user");
        //mounted
        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("users/" + id_user + "")
                .then((response) => {
                    //assign state posts with response data
                    users.value = response.data.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });

        })


        //return
        return {
            users,
        }
    },
};
</script>

<style>
.bg-image {
    background-image: url('../assets/event.png');
    background-size: cover;
}

</style>