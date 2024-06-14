@extends('layouts.appclient')
@section('content')
    <!-- All start -->
    <div style="margin-top: 70px;" class="all bg-white pt-5 pl-5 pb-2">
        <h4 style="color: #2f005f;"><i class="bi bi-house-door"></i> Mehnat bozori holati</h4>
    </div>
    <hr>
    <div class="all bg-white pl-5 pt-3 pb-3">
        <div class="row justify-content-between">
            <div class="col-4 btn-row">
                <button style="background-color: #f5e8ff;" class="btn m-1">Respublika va hududlar</button>
                <button style="border: 1px solid;" class="btn m-1">Mintaqa</button>
                <button style="border: 1px solid;" class="btn m-1">Taqqoslash</button>
            </div>
            <div class="col-4 btn-row">
                <button style="border: 1px solid;" class="btn m-1">Biz haqimizda</button>
                <button style="border: 1px solid;" class="btn m-1">Tariflar</button>
                <button style="border: 1px solid;" class="btn m-1">Foydalanish qoidalari</button>
            </div>
        </div>
    </div>
    <hr>

    <div class="all bg-white pl-5 pt-3 pb-3">
        <div class="row">
            <div class="col-md-2 umumiy">
                <div class="p-3 all-div bg-light mb-1">
                    <a style="text-decoration: none;color: black;" href="{{url('team')}}"><i class="bi bi-map"></i> Umumiy ko`rinish</a>
                </div>
                <div class="p-3 all-div bg-light mb-1">
                    <a style="text-decoration: none;color: black;" href="{{url('statistic/index')}}"><i class="bi bi-people"></i> Mehnat bozori</a>
                </div>
                <div class="p-3 all-div bg-light mb-1">
                    <a style="text-decoration: none;color: black;" href=""><i class="bi bi-inboxes"></i> Sanoat tarmoqlari</a>
                </div>
                <div class="p-3 all-div bg-light mb-1">
                    <a style="text-decoration: none;color: black;" href=""><i class="bi bi-download"></i> Yuklash</a>
                </div>
            </div>
            <div style="display: flex;align-items: center;" class="col-md-4 all-div2 mb-3 pr-0">
                <div style="width: 100%;margin-left: -13px;" id="map">

                </div>
            </div>
            <div class="col-md-5 all-div2 ml-3 p-3">
                <div class="containerr">
                    <h6 style="color: #2f005f;">Mehnat bozori</h6>
                    <span class="work-spann p-1">March 2024</span>
                </div>
                <div class="row roww">
                    <div class="col-md-6">
                        <div class="stat-card">
                            <i class="fa-solid fa-person icon"></i>
                            <div style="margin-left: 10px;">
                                <div class="data">19,39 mln.</div>
                                <div class="label">Aholi (15+)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-card">
                            <i class="fa-solid fa-briefcase icon3"></i>
                            <div style="margin-left: 10px;">
                                <div class="data">14.0 mln.</div>
                                <div class="label">Ish bilan taminlangan aholi soni</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row roww">
                    <div class="col-md-6">
                        <div class="stat-card">
                            <i class="fa-solid fa-briefcase icon3"></i>
                            <div style="margin-left: 10px;">
                                <div class="data">6,8%</div>
                                <div class="label">Ishsizlik darajasi</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-card">
                            <i class="fa-solid fa-business-time icon2"></i>
                            <div style="margin-left: 10px;">
                                <div class="data">64,1%</div>
                                <div class="label">Aholining balandligi nisbati (15-64)</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row roww">
                    <div class="col-md-6">
                        <div class="stat-card">
                            <i class="fa-solid fa-business-time icon2"></i>
                            <div style="margin-left: 10px;">
                                <div class="data">60,5%</div>
                                <div class="label">Ishtirok etish darajasi (15+)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-card">
                            <i class="fa-solid fa-person icon"></i>
                            <div style="margin-left: 10px;">
                                <div class="data">10,6%</div>
                                <div class="label">Yoshlar ishsizlik darajasi</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="containerr mt-3">
                    <h6 style="color: #2f005f;">Tarmoqlar (eng yaxshi 5)</h6>
                    <span class="work-spann p-1">March 2024</span>
                </div>
                <div class="containerr2 mt-3">
                    <p>Qishloq va o'rmon va baliq xo'jaligi</p>
                    <span class="work-spann2 p-1">3,50 mln.</span>
                </div>
                <div class="containerr2">
                    <p>Sanoat</p>
                    <span class="work-spann2 p-1">3,50 mln.</span>
                </div>
                <div class="containerr2">
                    <p>Savdo</p>
                    <span class="work-spann2 p-1">3,50 mln.</span>
                </div>
                <div class="containerr2">
                    <p>Qurilish</p>
                    <span class="work-spann2 p-1">3,50 mln.</span>
                </div>
                <div class="containerr2">
                    <p>Talim</p>
                    <span class="work-spann2 p-1">3,50 mln.</span>
                </div>
                <div class="containerr2 mt-3">
                    <p><b>Manba:</b></p>
                </div>
                <div class="containerr2">
                    <p><b>O`zbekiston:</b></p>
                </div>
                <div class="containerr2">
                    <p><b>Mehnat bozori:</b>O'zbekiston Respublikasi Kambag`likni qisqartirish va bandlik vazirligi ishchi kuchi tadqiqoti. mavsumiy tuzatilgan ma'lumotlar.</p>
                </div>
                <div class="containerr2">
                    <p><b>Sanoat:</b>O'zbekiston Respublikasi Kambag`allikni qisqartirish va bandlik vazirligi. Ishchi kuchining batafsil tadqiqoti.</p>
                </div>
                <div class="containerr2">
                    <p><b>Shtat va hududlar:</b></p>
                </div>
                <div class="containerr2">
                    <p><b>Mehnat bozori:</b>Ozbekiston Respublikasi Kambag`allikni qisqartirish va bandlik vazrligi. Mehnat resurslari tadqiqoti. mavsum.y tuzatilgan
                        ma'lumotlar. dastlabki ma'lumotlarning 3 oylik o'rtacha ko'rsatkichi bo'lgan bandlik va aholi nisbati va dastlabki ma'lumotlarning 12 oylik
                        o'rtacha ko'rsatkichi bo'lgan yoshlarning ishsizlik darajasi bundan mustasno.</p>
                </div>
                <div class="containerr2">
                    <p><b>Sanoat:</b>O'zbekiston Respublikasi Kambag`allikni qisqartirish va bandlik vazirligi. Ishchi kuchining batafsil tadqiqoti.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- All end -->

    <!-- Sahifa start -->
    <div class="container-fluid bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-2">
                    <h5>Bu sahifa foydali bo`ldimi?</h5>
                </div>
                <div class="col-md-3 m">
                    <button style="border: 2.5px solid #370077;color: #370077;" class="btn"><b>Ha</b></button>
                    <button style="border: 2.5px solid #370077;margin-left: 12px;color: #370077;" class="btn"><b>Yo'q</b></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sahifa end -->

@endsection
