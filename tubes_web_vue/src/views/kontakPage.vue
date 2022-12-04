<template>
    <div class="container mt-5 mb-5">
        <div class="row gx-10">
            <div class="card border-dark mb-3" style="max-width: 35rem; max-height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Hubungi Kami</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, aliquam iure? Hic quisquam provident aut!</p>
                    </div>
            </div>

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
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p></p>
</template>