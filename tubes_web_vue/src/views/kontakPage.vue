<template>
    <!-- Header -->
    <div class="bg-image3">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); height: 85vh;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-center text-white">
                    <h2>AMP</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="p-3"></div>
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2 ">
                    <div class="card border-dark mb-3" style="max-width: 35rem; max-height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Hubungi Kami</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, aliquam iure? Hic quisquam provident aut!</p>
                    </div>
            </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-0">
                        <div class="col">
                            <div class="p-3">
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="inputNama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="inputNama">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputNohp" class="form-label">No HP</label>
                                        <input type="text" class="form-control" id="inputNohp">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputKota" class="form-label">Kota</label>
                                        <input type="text" class="form-control" id="inputKota">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputPesan" class="form-label">Pesan</label>
                                        <textarea class="form-control" id="inputPesan" rows="5"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success text-light">Kirim Pesan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <p></p>
</template>

<style>
    .bg-image3 {
        background-image: url('../assets/bgpesulap.jpg');
        background-size: cover;
    }
</style>