<template>
    <div class="img">
        <div class="p-5"></div>

        <div class="container mt-5 w-75 justivy-content-center">
            <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.5);
          backdrop-filter: blur(30px);
        ">
                <div class="card-body py-5 px-md-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-5 text-light">Buat Akun</h2>
                            <form @submit.prevent="store">
                                <div class="form-outline mb-4">
                                    <label for="inputNama" class="form-label text-light">Nama</label>
                                    <input type="text" class="form-control" id="inputNama" v-model="user.name" />
                                    <!-- validation -->
                                    <div v-if="validation.name" class="mt-2 alert alert-danger">
                                        {{ validation.name[0] }}
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="inputEmail" class="form-label text-light">Email</label>
                                    <input type="text" class="form-control" id="inputEmail" v-model="user.email" />
                                    <!-- validation -->
                                    <div v-if="validation.email" class="mt-2 alert alert-danger">
                                        {{ validation.email[0] }}
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="inputpass" class="form-label text-light">Password</label>
                                    <input type="password" class="form-control" id="inputpass"
                                        v-model="user.password" />
                                    <!-- validation -->
                                    <div v-if="validation.password" class="mt-2 alert alert-danger">
                                        {{ validation.password[0] }}
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="inputTanggalLahir" class="form-label text-light">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="inputTanggalLahir"
                                        v-model="user.tgl_lahir" />
                                    <!-- validation -->
                                    <div v-if="validation.tgl_lahir" class="mt-2 alert alert-danger">
                                        {{ validation.tgl_lahir[0] }}
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="inputGender" class="form-label text-light">Gender</label>
                                    <select class="form-control" id="inputGender" v-model="user.gender">
                                        <option value="1">Laki-laki</option>
                                        <option value="0">Perempuan</option>
                                    </select>
                                    <!-- validation -->
                                    <div v-if="validation.gender" class="mt-2 alert alert-danger">
                                        {{ validation.gender[0] }}
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="inputNoHP" class="form-label text-light">No HP</label>
                                    <input type="text" class="form-control" id="inputNoHP" v-model="user.telepon" />
                                    <!-- validation -->
                                    <div v-if="validation.telepon" class="mt-2 alert alert-danger">
                                        {{ validation.telepon[0] }}
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="inputAlamat" class="form-label text-light">Alamat</label>
                                    <input type="text" class="form-control" id="inputAlamat" v-model="user.alamat" />
                                    <!-- validation -->
                                    <div v-if="validation.alamat" class="mt-2 alert alert-danger">
                                        {{ validation.alamat[0] }}
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <router-link :to="{ name: 'masuk' }" class="nav-link">
                                        <button class="btn btn-danger text-light">
                                            <i class="bi bi-person-fill"></i>
                                            Batal
                                        </button>
                                    </router-link>
                                    <button type="submit" class="btn btn-success text-light">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5"></div>
        </div>
    </div>
</template>
<script>
import { reactive, ref } from "vue";
import { useRouter } from "vue-router";
import axios from "axios";
import { createToaster } from "@meforma/vue-toaster";

export default {
    setup() {
        const toaster = createToaster({
            /* options */
        });

        //state user
        const user = reactive({
            name: "",
            email: "",
            password: "",
            tgl_lahir: "",
            gender: "",
            telepon: "",
            alamat: "",
        });
        //state validation
        const validation = ref([]);
        //departemens
        let users = ref([]);
        //vue router
        const router = useRouter();
        //method store
        function store() {
            let name = user.name;
            let email = user.email;
            let password = user.password;
            let tgl_lahir = user.tgl_lahir;
            let gender = user.gender;
            let telepon = user.telepon;
            let alamat = user.alamat;
            axios
                .post("users/register", {
                    name: name,
                    email: email,
                    password: password,
                    tgl_lahir: tgl_lahir,
                    gender: gender,
                    telepon: telepon,
                    alamat: alamat,
                })
                .then(() => {
                    toaster.show(`Akun Berhasil di Buat, Silahkan Verifikasi Email Anda :)`, {
                        type: "success",
                        position: "bottom-right",
                        duration: 3000,
                    });
                    //redirect ke post index
                    router.push({
                        name: "masuk",
                    });
                })
                .catch((error) => {
                    //assign state validation with error
                    validation.value = error.response.data;
                });
        }
        //return
        return {
            user,
            validation,
            router,
            store,
            users,
        };
    },
};
</script>

<style>
.img {
    background-image: url("../assets/bgregis.jpg");
    background-size: cover;
    height: fit-content;
}
</style>
