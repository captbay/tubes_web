<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="daftarband">


    <!-- Header -->
    <div class="row text-center justify-content-center align-items-center jumbotron" style="position: relative;">
        <div class="text-header row justify-content-center">
            <p class="text-white headerlarge me-2 ms-2">Temui Band-Band Keren Kami!</p>
            <p class="text-white header3 col-md-8 me-2 ms-2">
                Akordmusic Production selalu memastikan band dengan kualitas terjamin dan Anda pasti mendapatkan
                kualitas band terbaik di Bali. Kita juga memiliki banyak pilihan band yang tersedia dengan gaya band nya
                masing-masing sesuai kebutuhan Anda. Jadi, Anda bisa memilih band dengan kebutuhan yang Anda inginkan.
            </p>
        </div>
        <img src="/asset/header-daftarband.png" alt="...">
    </div>

    <div class="container">
        <div class="row my-5 pt-5">
            <p class="header1 text-center">FAQ</p>
            <p class="body1 text-center">
                Beberapa pertanyaan yang sering ditanya oleh para customer tercinta kita
            </p>
        </div>

        <div class="row mb-5">
            <p class="text-center header3">Penampilan</p>
            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Jam berapa talent akan tiba?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Talent biasanya akan tiba 60 menit sebelum acara dimulai. Pada acara pernikahan dan acara perusahaan pihak talent akan selalu menyiapkan peralatan 3 jam lebih awal sebelum acara dimulai dan ini bersifat situasional sesuai dengan kebutuhan dan perjanjian 2 belah pihak. Jika anda memerlukan talent untuk mengatur lebih awal pada hari itu, maka akan dikenakan biaya tambahan.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Berapa lama waktu yang dibutuhkan talent untuk mengatur peralatan tampil?

                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Sebagian besar talent akan membutuhkan waktu sekitar 60 menit. Namun, ini akan bervariasi tergantung pada ukuran band dan jenis acara.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Berapa lama band akan bermain?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Setiap talent akan bermain selama 2 x 45 menit dan akan diselingi waktu istirahat selama 1 x 30 menit
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Jam berapa talent mulai bermain?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Ini sepenuhnya sesuai dengan keinginan anda dan menyesuaikan dengan jadwal yang anda miliki dalam acara anda.
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Akankah talent mempelajari lagu tertentu untuk dimainkan di acara kami?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Talent akan mempelajari satu lagu khusus secara gratis, jadi jika Anda memiliki lagu pertama atau lagu di penghujung malam, beri tahu kami pada saat pemesanan atau selambat-lambatnya H-3 dari hari berlangsungnya acara. Harap dicatat bahwa ini tidak berlaku untuk semua talent kami sehingga Anda mungkin ingin menjalankan permintaan lagu Anda melewati salah satu tim kami sebelum melakukan pemesanan.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Bisakah kita memilih set list?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Anda dipersilakan untuk mengirimkan daftar lagu favorit Anda dan talent akan mencoba memasukkan ini ke dalam set mereka. Ingatlah bahwa kemungkinan talent akan mengubah set mereka agar sesuai dengan reaksi penonton.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Apakah talent menyediakan musik antara sebelum dan sesudah set?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Tidak, talent tidak menyediakan musik antara sebelum maupun sesudah set. Hal ini akan tetap disiapkan oleh pihak penyelenggara event.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Apakah pakaian yang digunakan talent saat bermain?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEightr" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Talent akan menggunakan pakaian bebas, rapi dan sopan. Menggunakan celana panjang dan juga sepatu tertutup. Namun, jika anda memiliki keinginan tertentu untuk pakaian yang akan digunakan hal ini bisa dikomunikasikan paling lambat H+7 dari pemesanan.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Apakah band membutuhkan penyegaran?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Kami meminta band ini diberikan minuman ringan gratis selama mereka tinggal di venue dan makan, biasanya setelah mereka bersiap dan pada saat talent melakukan istirahat selama 1 x 30 menit.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <p class="text-center header3">Booking Band atau Artist</p>
            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                            Bagaimana cara saya mengkonfirmasi pemesanan?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Jika Anda ingin memesan sebuah talent, kami memerlukan waktu pelaksanaan kegiatan, alamat lengkap dan detail kontak Anda beserta alamat venue. Kami kemudian akan mengirimkan kontrak dengan syarat dan ketentuan lengkap yang disertakan. Setelah kontrak dan down payment usai maka akan dikirimkan invoice oleh admin kami yang menyatakan bahwa proses pemesanan anda telah usai
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            Apakah harga yang dikutip sudah termasuk biaya perjalanan dan pengeluaran?
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Ya, semua penawaran sudah termasuk biaya perjalanan. Namun, jika penyelenggaraan acara berada di luar kota jangkauan talent maka akan dikenakan biaya tambahan.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwelve">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            Bagaimana jika band atau anggota band tidak dapat hadir pada hari itu karena sakit?
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Jika seorang talent tidak dapat hadir pada hari acara karena sakit, talent akan digantikan dengan talent lain yang memiliki spesifikasi yang sama dengan talent sebelumnya. Hal ini juga akan memerlukan persetujuan dari 2 belah pihak untuk menyetujuinya.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5 pb-5">
            <p class="text-center header3">The Venue</p>
            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading13">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                            Apakah Talent menyediakan sistem PA / peralatan Sound mereka sendiri?
                        </button>
                    </h2>
                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Tidak, untuk kebutuhan sistem PA/peralatan sound akan disiapkan oleh penyelenggara kegiatan. Talent hanya menyediakan alat music dan alat penunjang bermain yang dibutuhkan oleh talent.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading14">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                            Apakah kita perlu menyewa panggung yang ditinggikan?
                        </button>
                    </h2>
                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Panggung selalu merupakan tambahan yang bagus untuk pertunjukan tetapi bukan merupakan persyaratan
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading15">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                            Apa persyaratan daya minimum untuk band?
                        </button>
                    </h2>
                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Kebanyakan band membutuhkan setidaknya 2-3 soket 13 amp independen. Ini dapat bervariasi tergantung pada ukuran band dan sistem suara. Detail akan disertakan dalam kontrak.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?= $this->endSection(); ?>