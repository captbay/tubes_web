<template>
    <div class="container mt-5 mb-5">
        <!-- <div
      class="card mx-4 mx-md-5 shadow-5-strong"
      style="background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px)"
    > -->
        <div class="container">
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img :src="url + userurl + users.image_user" alt="User" class="rounded-circle"
                                        width="164" />
                                    <div class="mt-3">
                                        <h4>{{ users.name }}</h4>
                                        <p class="text-secondary mb-3">User</p>
                                        <button class="btn btn-outline-info">
                                            <i class="bi bi-chat-right-text-fill"></i>
                                            Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">{{ users.name }}</div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">{{ users.email }}</div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date Birth</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ format_date(users.tgl_lahir) }}
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Gender</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" v-if="users.gender == 1">
                                        Laki-laki
                                    </div>
                                    <div class="col-sm-9 text-secondary" v-if="users.gender == 0">
                                        Perempuan
                                    </div>
                                </div>

                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ users.alamat }}
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ users.telepon }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#editUser">
                                            <i class="bi bi-pencil-fill"></i>
                                            Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        Edit Profile
                                    </h1>
                                    <!-- <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                </div>
                                <div class="modal-body">
                                    <form @submit.prevent="update()">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" v-model="user.name"
                                                placeholder="Masukkan Nama" />
                                            <!-- validation -->
                                            <div v-if="validation.name" class="mt-2 alert alert-danger">
                                                {{ validation.name[0] }}
                                            </div>
                                        </div>
                                        <div>
                                            <label>Password</label>
                                            <input type="password" class="form-control" v-model="user.password"
                                                placeholder="Masukkan Password" />
                                            <!-- validation -->
                                            <div v-if="validation.password" class="mt-2 alert alert-danger">
                                                {{ validation.password[0] }}
                                            </div>
                                        </div>
                                        <div>
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" v-model="user.tgl_lahir"
                                                placeholder="Masukkan tanggal lahir" />
                                            <!-- validation -->
                                            <div v-if="validation.tgl_lahir" class="mt-2 alert alert-danger">
                                                {{ validation.tgl_lahir[0] }}
                                            </div>
                                        </div>
                                        <div>
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" v-model="user.alamat"
                                                placeholder="Masukkan alamat" />
                                            <!-- validation -->
                                            <div v-if="validation.alamat" class="mt-2 alert alert-danger">
                                                {{ validation.alamat[0] }}
                                            </div>
                                        </div>
                                        <div>
                                            <label>Gender</label>
                                            <select class="form-control" id="inputGender" v-model="user.gender">
                                                <option value="1">Laki-laki</option>
                                                <option value="0">Perempuan</option>
                                            </select>
                                            <!-- validation -->
                                            <div v-if="validation.gender" class="mt-2 alert alert-danger">
                                                {{ validation.gender[0] }}
                                            </div>
                                        </div>
                                        <div>
                                            <label>Telepon</label>
                                            <input type="text" class="form-control" v-model="user.telepon"
                                                placeholder="Masukkan telepon" />
                                            <!-- validation -->
                                            <div v-if="validation.telepon" class="mt-2 alert alert-danger">
                                                {{ validation.telepon[0] }}
                                            </div>
                                        </div>
                                        <div>
                                            <label>Gambar</label>
                                            <input type="file" class="form-control" @change="onFileChange"
                                                accept="image/*" />
                                            <!-- validation -->
                                            <div v-if="validation.image_user" class="mt-2 alert alert-danger">
                                                {{ validation.image_user[0] }}
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button class="btn btn-success" type="submit">
                                                Save changes
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        Keluar
                                    </h1>
                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">Anda Yakin Ingin Keluar?</div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        Batal
                                    </button>
                                    <button class="btn btn-success" value="logout" data-bs-dismiss="modal"
                                        @click="logout()">
                                        Yakin
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
</template>

<script>
import { reactive } from "vue";
import axios from "axios";
import { onMounted, ref } from "vue";
import { useRouter } from "vue-router";
import { createToaster } from "@meforma/vue-toaster";
import moment from "moment";


export default {
    methods: {
        format_date(value) {
            if (value) {
                return moment(String(value)).format('DD MMMM YYYY')
            }
        },
    },
    data() {
        return {
            formEdit: {
                name: "",
                password: "",
                tgl_lahir: "",
                alamat: "",
                gender: "",
                telepon: "",
                image_user: "",
            },
        };
    },
    setup() {
        // const toaster = createToaster({ /* options */ });
        const toaster = createToaster({
            /* options */
        });
        //reactive state
        const user = reactive({
            name: "",
            email: "",
            password: "",
            tgl_lahir: "",
            gender: "",
            telepon: "",
            alamat: "",
            image_user: "",
        });
        //state validation
        const validation = ref([]);
        let users = ref([]);
        let id_user_temp = localStorage.getItem("id_user");
        axios.defaults.headers.common["Authorization"] =
            localStorage.getItem("token_type") + " " + localStorage.getItem("token");

        const router = useRouter();
        let url = "http://localhost:8000/storage/";
        let userurl = "users/";
        // let index = null
        //mounted
        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("users/" + id_user_temp + "")
                .then((response) => {
                    //assign state posts with response data
                    users.value = response.data.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        });

        onMounted(() => {
            //get API from Laravel Backend
            axios
                .get("users/" + id_user_temp + "")
                .then((response) => {
                    //assign state posts with response data
                    user.name = response.data.data.name;
                    user.password = response.data.data.password;
                    user.tgl_lahir = response.data.data.tgl_lahir;
                    user.gender = response.data.data.gender;
                    user.telepon = response.data.data.telepon;
                    user.alamat = response.data.data.alamat;
                    user.image_user = response.data.data.image_user;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        });

        function update() {
            let name = user.name;
            let password = user.password;
            let tgl_lahir = user.tgl_lahir;
            let gender = user.gender;
            let telepon = user.telepon;
            let alamat = user.alamat;
            let image_user = user.image_user;
            axios
                .post("users/update/" + id_user_temp + "", {
                    name: name,
                    password: password,
                    tgl_lahir: tgl_lahir,
                    gender: gender,
                    telepon: telepon,
                    alamat: alamat,
                    image_user: image_user,
                }, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(() => {
                    this.users.name = name;
                    this.users.password = password;
                    this.users.tgl_lahir = tgl_lahir;
                    this.users.gender = gender;
                    this.users.telepon = telepon;
                    this.users.alamat = alamat;
                    this.users.image_user = image_user;


                    toaster.show(`Akun Berhasil di Update :)`, {
                        type: "success",
                        position: "bottom-right",
                        duration: 3000,
                    });

                    window.location.reload();
                    //redirect ke post index
                    // router.push({
                    //     name: "profile",
                    // });
                })
                .catch((error) => {
                    validation.value = error.response.data
                });
        }
        //logout
        function logout() {
            axios
                .get("users/logout", {})
                .then(() => {
                    // console.log(res.data);
                    localStorage.removeItem("id_user");
                    localStorage.removeItem("token");
                    localStorage.removeItem("token_type");

                    window.location.reload();

                    router.push({
                        name: "masuk",
                    });
                })
                .catch((err) => {
                    console.log(err.response.data);
                });
        }

        // onFileChange(e) {
        //  console.log(e);
        //  const file = e.target.files[0];
        //  this.url = URL.createObjectURL(file);
        //  var imagefile = document.querySelector('#imageUpload');
        //  console.log(file)
        //  console.log(imagefile.files[0])
        //  let formData = new FormData();
        //  formData.append("image",file);
        // this.$store.dispatch("uploadImage", formData);
        // }

        const onFileChange = (e) => {
            user.image_user = e.target.files[0];
        };


        //return
        return {
            user,
            update,
            users,
            validation,
            id_user_temp,
            logout,
            url,
            userurl,
            onFileChange,
        };
    },
};
</script>

<style>
body {
    margin-top: 20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}

.main-body {
    padding: 15px;
}

.card {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col,
.gutters-sm>[class*="col-"] {
    padding-right: 8px;
    padding-left: 8px;
}

.mb-3,
.my-3 {
    margin-bottom: 1rem !important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}

.h-100 {
    height: 100% !important;
}

.shadow-none {
    box-shadow: none !important;
}
</style>