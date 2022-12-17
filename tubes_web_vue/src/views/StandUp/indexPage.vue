<template>
    <!-- List Event -->
    <div class="container-fluid bg-light p-5">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-dark font-weight-bold">List Komika Terbaik Kami</h1>
            </div>
            <div class="col-lg-10 align-self-baseline">
                <p class="text-white-75 mb-1">Akordmusic Production selalu memastikan band dengan kualitas terjamin dan
                    Anda
                    pasti mendapatkan kualitas band terbaik di Bali. Kita juga memiliki banyak pilihan band yang
                    tersedia
                    dengan gaya band nya masing-masing sesuai kebutuhan Anda. Jadi, Anda bisa memilih band dengan
                    kebutuhan
                    yang Anda inginkan.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="https://cdn.antaranews.com/cache/730x487/2020/10/02/e9018782-0ef5-446e-83d0-3db221524a96.jpg"
                                alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Komika 1</h5>
                                    Akordkustik ipsum dolor sit amet, consectetur adipiscing elit. Semper duis tellus
                                    suspendisse
                                    felis, odio vitae ultrices quam placerat. Est nisl massa placerat facilisis etiam
                                    vulputate
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success mt-auto"><router-link
                                            :to="{ name: 'detailStandUp' }" class="dropdown-item">More</router-link></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="https://cdn.antaranews.com/cache/730x487/2020/10/02/e9018782-0ef5-446e-83d0-3db221524a96.jpg"
                                alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Komika 2</h5>
                                    Akordkustik ipsum dolor sit amet, consectetur adipiscing elit. Semper duis tellus
                                    suspendisse
                                    felis, odio vitae ultrices quam placerat. Est nisl massa placerat facilisis etiam
                                    vulputate
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success mt-auto"><router-link
                                            :to="{ name: 'detailStandUp' }" class="dropdown-item">More</router-link></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="https://cdn.antaranews.com/cache/730x487/2020/10/02/e9018782-0ef5-446e-83d0-3db221524a96.jpg"
                                alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Komika 3</h5>
                                    Akordkustik ipsum dolor sit amet, consectetur adipiscing elit. Semper duis tellus
                                    suspendisse
                                    felis, odio vitae ultrices quam placerat. Est nisl massa placerat facilisis etiam
                                    vulputate
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success mt-auto"><router-link
                                            :to="{ name: 'detailStandUp' }" class="dropdown-item">More</router-link></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>