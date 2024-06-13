@extends('layouts.appclient')
@section('content')
    <!-- Main Start -->
    <div style="padding-top: 70px;">
        <div class="container">
            <h3 style="color: #2f005f;" class="pt-5 pb-5">Talab yuqori bo`lgan kasblar</h3>
            <hr class="mb-4">
            <p class="pb-3">Surxondaryo mehnat bozorida eng yuqori talab buxgalterlarga (jami talabning 7,5%), reklama bo'yicha mutaxassislar (6, 1%),
                jamoat bilan aloqa bo'yicha mutaxassislar (6, 1%), marketologlar (5,9%), savdo bo'yicha mutaxassislar (5,9%),
                dasturchilar (5.5%) va AKT sohalarida tizim ma'murlari va mutaxassislariga (5.4%) ekanligi aniqlandi. Eng past talab esa
                malaka talab etilmaydigan ishchilarga, boxcha tarbiyachisi, geologlar va geofiziklar, aktyorlar va texnik ustalar kabi
                mutaxassislarga ekanligi aniqlandi.</p>
            <div class="row w-100">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="OKED bo'yicha yoki kasb bo'yicha qidirish" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-1">
                    <button type="button" class="custom-btn-outline-success custom-ml"><i class="bi bi-funnel-fill"></i> Filtr</button>
                </div>
                <div class="col-md-2">
                    <select class="form-select" style="width: auto; display: inline-block;">
                        <option selected>Saralash (A-Z)</option>
                        <option value="1">Saralash (Z-A)</option>
                    </select>
                </div>
            </div>
            <div style="border-radius: 10px;" class="report-data bg-light p-3 mb-2">
                <div class="row" style="align-items: center;">
                    <div class="col-md-10">Defitsit</div>
                    <div class="col-md-2"><button type="button" class="custom-btn-outline-success2 custom-ml">Yordam</button></div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div style="display: flex; align-items: center;">
                            <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            <p style="margin: 0;">Defitsit</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="display: flex; align-items: center;">
                            <button style="border: 1px solid #f0a269; color: #252525; background-color: #ffe7d7; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>R</b></button>
                            <p style="margin: 0;">Hududiy defitsit</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="display: flex; align-items: center;">
                            <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            <p style="margin: 0;">Defitsit yo`q</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mt-1 mb-2">Kelajakdagi talab</div>
                    <div class="col-md-3">
                        <div style="display: flex; align-items: center;">
                            <div class="circle-button"><i class="bi bi-chevron-up"></i></div>
                            <p style="margin: 0;">Defitsit</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="display: flex; align-items: center;">
                            <div class="circle-button2"><b><i class="bi bi-dash"></i></b></div>
                            <p style="margin: 0;">Hududiy defitsit</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="display: flex; align-items: center;">
                            <div class="circle-button3"><i class="bi bi-chevron-down"></i></div>
                            <p style="margin: 0;">Defitsit yo`q</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="mt-0 mb-2">Qisqartmalar</div>
                    <div class="col-md-2">
                        <p><b>QR-Qoraqolpoqiston Respublikasi</b></p>
                    </div>
                    <div class="col-md-2">
                        <p><b>AN-Andijon viloyati</b></p>
                    </div>
                    <div class="col-md-2"> <p><b>BX-Buxoro viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>JZ-Jizzax viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>QD-Qashqadaryo viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>NY-Navoiy viloyati</b></p></div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <p><b>NM-Namangan viloyati</b></p>
                    </div>
                    <div class="col-md-2">
                        <p><b>SM-Samarqand viloyati</b></p>
                    </div>
                    <div class="col-md-2"> <p><b>SX-Surxandaryo viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>SR-Sirdaryo viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>TV Toshkent viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>FA-Farg`ona viloyati</b></p></div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <p><b>XR-Xorazm viloyati</b></p>
                    </div>
                    <div class="col-md-2">
                        <p><b>TSH-Toshkent shaxri</b></p>
                    </div>
                    <div class="col-md-4"> <p><b>O`R-O`zbekiston Respublikasi</b></p></div>
                </div>
            </div>
            <div class="report-data mb-2 mt-3">
                <p class="pt-3 ">OKED</p>
                <table class="table pl-3">
                    <thead>
                    <tr>
                        <th scope="col">Kasb <button style="background-color: #fff;border: 1px solid;border-radius: 7px;" class="ml-5 p-1">Kelajakdagi talab</button></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">O`R</th>
                        <th scope="col">TSH</th>
                        <th scope="col">SR</th>
                        <th scope="col">TV</th>
                        <th scope="col">QD</th>
                        <th scope="col">FA</th>
                        <th scope="col">JZ</th>
                        <th scope="col">SX</th>
                        <th scope="col">AN</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <p style="color: #a7a7a7;font-size: 14px;" class="mb-0">422111</p>
                            Buxgalter
                        </th>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <div class="circle-button2"><b><i class="bi bi-dash"></i></b></div>
                            </div>
                        </td>
                        <td>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <p style="color: #a7a7a7;font-size: 14px;" class="mb-0">422111</p>
                            Reklama bo`yicha mutaxassis
                        </th>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <div class="circle-button3"><i class="bi bi-chevron-down"></i></div>
                            </div>
                        </td>
                        <td>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <p style="color: #a7a7a7;font-size: 14px;" class="mb-0">422111</p>
                            Jamoat bilan aloqa bo`yicha mutaxassis
                        </th>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <div class="circle-button"><i class="bi bi-chevron-up"></i></div>
                            </div>
                        </td>
                        <td>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <p style="color: #a7a7a7;font-size: 14px;" class="mb-0">422111</p>
                            Marketolog
                        </th>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <div class="circle-button2"><b><i class="bi bi-dash"></i></b></div>
                            </div>
                        </td>
                        <td>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <p style="color: #a7a7a7;font-size: 14px;" class="mb-0">422111</p>
                            Dasturchi
                        </th>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <div class="circle-button3"><i class="bi bi-chevron-down"></i></div>
                            </div>
                        </td>
                        <td>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            <p style="color: #a7a7a7;font-size: 14px;" class="mb-0">422111</p>
                            Aktyor
                        </th>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <div class="circle-button2"><b><i class="bi bi-dash"></i></b></div>
                            </div>
                        </td>
                        <td>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #4fc930; color: #252525; background-color: #e1fcdb; border-radius: 15px; margin-right: 10px;" class="btn"><b>NS</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <button style="border: 1px solid #e77c78; color: #252525; background-color: #ffdedd; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>S</b></button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="custom-btn-outline-success custom-ml mb-5">Yuklash</button>
        </div>
    </div>
    <!-- Main End -->

    <!-- Sahifa start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-2">
                    <h5>Bu sahifa foydali bo`ldimi?</h5>
                </div>
                <div class="col-md-3">
                    <button style="border: 2.5px solid #370077;color: #370077;" class="btn"><b>Ha</b></button>
                    <button style="border: 2.5px solid #370077;margin-left: 12px;color: #370077;" class="btn"><b>Yo'q</b></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sahifa end -->
@endsection
