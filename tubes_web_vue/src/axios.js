import axios from "axios";

axios.defaults.baseURL = "http://localhost:8000/api/";
axios.defaults.headers.common["Authorization"] =
  localStorage.getItem("token_type") + " " + localStorage.getItem("token");
axios.defaults.headers.post["Content-Type"] = "application/json";
