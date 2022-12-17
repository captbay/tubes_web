<template>
    <div class="container mt-5 mb-5">
        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">

            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">LOGIN</h2>
                        <form @submit.prevent="store">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="text" class="form-control" id="inputEmail" v-model="user.email">
                                <!-- validation -->
                                <div v-if="validation.email" class="mt-2 alert alert-danger">
                                    {{ validation.email[0] }}
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="inputpass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputpass" v-model="user.password">
                                <!-- validation -->
                                <div v-if="validation.password" class="mt-2 alert alert-danger">
                                    {{ validation.password[0] }}
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-success text-light">Masuk</button>
                            <p></p>
                            <p></p>

                            <div class="d-flex align-items-center justify-content-center pb-4">
                                <p class="mb-0 me-2">Belum punya akun?</p>
                                <router-link :to="{ name: 'daftar' }" class="nav-link text-light"><button
                                        class="btn btn-success">Daftar</button></router-link>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
        const toaster = createToaster({ /* options */ });

        //state user
        const user = reactive({
            email: "",
            password: "",
        });
        //state validation
        const validation = ref([]);
        //departemens
        let users = ref([]);
        //vue router
        const router = useRouter();
        //method store
        function store() {
            let email = user.email;
            let password = user.password;
            axios.post("http://localhost:8000/api/users/login", {
                email: email,
                password: password
            }).then(() => {
                toaster.show(`Berhasil Login`, {
                    type: "success",
                    position: "bottom-right",
                    duration: 3000,
                });
                //redirect ke post index
                router.push({
                    name: "beranda",
                });
            }).catch((error) => {
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
            users
        };
    },
};
</script>