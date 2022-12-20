<template>
    <div class="masthead">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-6 col-lg-4 mt-5">
                        <h3 class="mb-4 text-center text-light">Punya akun?</h3>
                        <form @submit.prevent="store">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control" placeholder="Email" id="inputEmail"
                                    v-model="user.email">
                                <!-- validation -->
                                <div v-if="validation.email" class="mt-2 alert alert-danger">
                                    {{ validation.email[0] }}
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" class="form-control" placeholder="Password" id="inputpass"
                                    v-model="user.password">
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <!-- validation -->
                                <div v-if="validation.password" class="mt-2 alert alert-danger">
                                    {{ validation.password[0] }}
                                </div>
                            </div>

                            <!-- Submit button -->
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-success submit px-3">
                                    Masuk
                                </button>
                            </div>
                            <p></p>
                            <p></p>

                            <p class="w-100 text-center text-light">&mdash; Atau Mendaftar &mdash;</p>
                            <div class="form-group">
                                <router-link :to="{ name: 'daftar' }" class="nav-link text-light">
                                    <button type="submit" class="form-control btn btn-success submit px-3">
                                        Daftar
                                    </button>
                                </router-link>
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
        //email validation error
        let email = null;
        //vue router
        const router = useRouter();
        //method store
        function store() {
            let email = user.email;
            let password = user.password;
            axios.post("users/login", {
                email: email,
                password: password
            }).then((response) => {

                toaster.show(`Berhasil Login`, {
                    type: "success",
                    position: "bottom-right",
                    duration: 3000,
                });
                localStorage.setItem('token', response.data.access_token);
                localStorage.setItem('token_type', response.data.token_type);
                localStorage.setItem('id_user', response.data.user.id);


                //redirect ke post index
                router.push({
                    path: "/",
                });
            }).catch((error) => {
                //assign state validation with error
                validation.value = error.response.data;
                email = error.response.data.message;

                toaster.show("" + email + "", {
                    type: "error",
                    position: "bottom-right",
                    duration: 3000,
                });
            });

        }
        //return
        return {
            user,
            validation,
            router,
            store,
            users,
            email
        };
    },
};
</script>

<style>
.masthead {
    background-image: url('../assets/event.png');
    background-size: cover;
    min-height: 100vh;
    position: relative;
    color: white;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, .5);
}

h3 {
    font-size: 3rem;
}

@media (max-width: 768px) {
    .masthead {
        min-height: 30vh;
    }

    h3 {
        font-size: calc(1.525rem + 3.3vw);
    }
}
</style>