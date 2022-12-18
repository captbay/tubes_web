import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import "./axios";

//import Bootstrap, Popper, jQuery
import "bootstrap/dist/css/bootstrap.css";
import "jquery/dist/jquery.min";
import "popper.js/dist/popper.min";
import "bootstrap/dist/js/bootstrap.min";

import Toaster from "@meforma/vue-toaster";

const app = createApp(App);

//use vue router
// app.use(axios);

app.use(router);
app.use(Toaster, {
  position: "bottom-right",
});

app.mount("#app");
