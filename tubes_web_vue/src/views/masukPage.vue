<template>
    <!-- Background image -->
    <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
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
                <button type="submit" class="btn btn-primary text-light">Masuk</button><p></p>

                <!-- Register buttons -->
                <div class="text-center">
                <p>or login with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="bi bi-facebook"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="bi bi-google"></i>
                </button>
                </div><p></p>

                <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Belum punya akun?</p>
                    <router-link :to="{name: 'daftar'}" class="nav-link btn btn-primary text-light">Daftar</router-link>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <p></p>
</template>