@extends('layouts.main')

@section('home')
<!--Content 1-->
<section class="contact_us">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="contact_inner">
                    <div class="row">
                        <div class="col-md-10 p-0">
                            <div class="contact_form_inner">
                                <div class="contact_field text-start">
                                    <h1 class="fw-semibold">Kirim Kami <span class="fw_normal" style="color:#007AFF">Pesan</span> </h1>
                                    <p class="fw-normal" style="color: #09244B">Kami siap melayani dan menjawab segala pertanyaanmu! Hubungi kami sekarang dan temukan solusi terbaik untuk kebutuhanmu.</p>
                                    <input type="text" class="form-control form-group" placeholder="Name" />
                                    <input type="text" class="form-control form-group" placeholder="Phone Number"/>
                                    <textarea class="form-control form-group" placeholder="Tulis Pesan"></textarea>
                                    <button class="contact_form_submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="right_conatct_social_icon d-flex align-items-end">
                            </div>
                        </div>
                    </div>
                        <section class="map_sec">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                            <div class="map_bind">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126757.97528787913!2d108.05070270131192!3d-6.868214964754832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2dd2c29a61a1%3A0xc57f04a120b07b9c!2sKec.%20Jatigede%2C%20Kabupaten%20Sumedang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1684228252058!5m2!1sid!2sid" width="100%" height="500" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                </div>
            </div>
        </div>
    </div>
</section>


<!--End Content 1-->
@endsection