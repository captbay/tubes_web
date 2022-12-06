<template>
   <div class="p-5"></div>

    <div class="container mt-5 mb-5">
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
    ">
    
    <div class="card-body py-5 px-md-5">
        
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
            <h2 class="fw-bold mb-5">DAFTAR</h2>
            <form>
                <div class="form-outline mb-4">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="inputNama">
                </div>
                <div class="form-outline mb-4">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputEmail">
                </div>
                <div class="form-outline mb-4">
                    <label for="inputpass" class="form-label">Password</label>
                    <input type="text" class="form-control" id="inputpass">
                </div>
                <div class="form-outline mb-4">
                    <label for="inputTanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="inputTanggalLahir">
                </div>
                <div class="form-outline mb-4">
                    <label for="inputGender" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="inputGender">
                </div>
                <div class="form-outline mb-4">
                    <label for="inputNoHP" class="form-label">No HP</label>
                    <input type="text" class="form-control" id="inputNoHP">
                </div>
                <div class="form-outline mb-4">
                    <label for="inputAlamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="inputAlamat">
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary text-light">Daftar</button><p></p>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</template>