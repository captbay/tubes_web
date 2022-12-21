import axios from "axios";

axios.defaults.baseURL = "https://tubeskelompokg.akordmusic.com/api/";
axios.defaults.headers.common["Authorization"] =
  localStorage.getItem("token_type") + " " + localStorage.getItem("token");
axios.defaults.headers.post["Content-Type"] = "application/json";
