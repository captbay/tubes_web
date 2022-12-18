<template>
    <div class="container mt-5 mb-5">
        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">

            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Profile</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "../axios";
import { onMounted, ref } from "vue";
// import { createToaster } from "@meforma/vue-toaster";

export default {
    async created() {

    },
    setup() {
        // const toaster = createToaster({ /* options */ });
        //reactive state
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