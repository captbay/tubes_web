import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";

//import Bootstrap, Popper, jQuery
import "bootstrap/dist/css/bootstrap.css";
import "jquery/dist/jquery.min";
import "popper.js/dist/popper.min";
import "bootstrap/dist/js/bootstrap.min";

import Toaster from "@meforma/vue-toaster";

const app = createApp(App);

//use vue router
app.use(router);
app.use(Toaster, {
  position: "top-right",
});

app.mount("#app");
