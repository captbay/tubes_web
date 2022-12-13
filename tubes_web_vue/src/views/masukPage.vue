<template>
    <!-- Header -->
    <div class="bg-image" style="
        background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/012.webp');
        height: 85vh;
      ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); height: 85vh;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-center text-white">
                    <h2>AMP Group</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">

            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">LOGIN</h2>
                        <form>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="text" class="form-control" id="inputEmail">
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label for="inputpass" class="form-label">Password</label>
                                <input type="text" class="form-control" id="inputpass">
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