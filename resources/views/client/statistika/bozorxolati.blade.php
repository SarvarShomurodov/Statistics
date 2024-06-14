@extends('layouts.bozorxolatiapp')
@section('content')
            <div class="col-md-4 all-div2 mb-3 p-4 h-100">
                <h4>Labour Market</h4>
                <select class="form-select" aria-label="Default select example">
                    <option selected>O`zbekiston Respublikasi
                    </option>
                    <option value="1">Samarqand viloyati
                    </option>
                    <option value="2">Qoraqalpog'iston Respublikasi
                    </option>
                    <option value="3">Andijon viloyati
                    </option>
                    <option value="4">Buxoro viloyati
                    </option>
                    <option value="5">Jizzax viloyati
                    </option>
                    <option value="6">Qashqadaryo viloyati
                    </option>
                    <option value="7">Navoiy viloyati
                    </option>
                    <option value="8">Namangan viloyati
                    </option>
                    <option value="10">Surxondaryo viloyati
                    </option>
                    <option value="11">Sirdaryo viloyati
                    </option>
                    <option value="12">Toshkent viloyati
                    </option>
                    <option value="13">Farg'ona viloyati
                    </option>
                    <option value="14">Xorazm viloyati
                    </option>
                    <option value="15">Toshkent shahri
                    </option>
                </select>
                <div class="container mt-5">
                    <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('population')">
                        <h6 style="text-align: left;">Mehnatga layoqatli yoshdagi mehnatga layoqatli aholi soni</h6>
                        <div class="row">
                            <div class="col-md-2"><h4>22.33M</h4></div>
                            <div class="col-md-10">
                                <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                                <b>+0.8%  (1-yr)</b>
                            </div>
                        </div>
                    </button>
                    <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('employment')">
                        <h6 style="text-align: left;">Iqtisodiyotda bandlar soni</h6>
                        <div class="row">
                            <div class="col-md-2"><h4>18.45M</h4></div>
                            <div class="col-md-10">
                                <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                                <b>+1.2%  (1-yr)</b>
                            </div>
                        </div>
                    </button>
                    <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('unemployment')">
                        <h6 style="text-align: left;">Ishsizlik darajasi</h6>
                        <div class="row">
                            <div class="col-md-2"><h4>12.45M</h4></div>
                            <div class="col-md-10">
                                <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                                <b>-7.3%  (1-yr)</b>
                            </div>
                        </div>
                    </button>
                    <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('faollik')">
                        <h6 style="text-align: left;">Aholining iqtisodiy faollik darajasi</h6>
                        <div class="row">
                            <div class="col-md-2"><h4>15.45M</h4></div>
                            <div class="col-md-10">
                                <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                                <b>-0.5%  (1-yr)</b>
                            </div>
                        </div>
                    </button>
                    <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('nofaollik')">
                        <h6 style="text-align: left;">Iqtisodiy nofaol aholi soni</h6>
                        <div class="row">
                            <div class="col-md-2"><h4>10.45M</h4></div>
                            <div class="col-md-10">
                                <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                                <b>-0.2%  (1-yr)</b>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col-md-5 all-div2 ml-3 p-3">
                <div id="container" style="width:100%; height:500px;"></div>
                <div class="">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <button style="text-align: left;" class="btn bg-light w-100">
                                <p id="first"></p>
                                <h4 id="countMale"></h4>
                                <p id="prasentMale"></p>
                            </button>

                        </div>
                        <div class="col-md-6">
                            <button style="text-align: left;" class="btn bg-light w-100">
                                <p id="second"></p>
                                <h4 id="countFamale"></h4>
                                <p id="prasentFamale"></p>
                            </button>

                        </div>
                    </div>
                </div>
            </div>

    <script>
        var chart = Highcharts.chart('container', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Umumiy o`sish'
            },
            xAxis: {
                categories: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022']
            },
            yAxis: {
                title: {
                    text: 'O`sish yillari (Millions)'
                },
                labels: {
                    formatter: function () {
                        return this.value + '';
                    }
                }
            },
            series: [{
                name: 'O`zbekiston',
                data: [16.534, 17.170, 17.452, 17.699, 17.938, 18.168, 18.372, 18.549, 18.712, 18.858, 19.076, 19.238, 19.939]
            }]
        });

        // Function to update chart
        function updateChart(type) {
            if (type === 'population') {
                chart.update({
                    title: { text: 'Mehnatga layoqatli yoshdagi mehnatga layoqatli aholi soni' },
                    series: [{
                        name: 'Aholi o`sish',
                        data: [16.534, 17.170, 17.452, 17.699, 17.938, 18.168, 18.372, 18.549, 18.712, 18.858, 19.076, 19.238, 19.939]
                    }]
                });
                document.getElementById('first').innerHTML = '';
                document.getElementById('second').innerHTML = '';
                document.getElementById('countMale').innerHTML = '';
                document.getElementById('countMale').innerHTML = '';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '';
                document.getElementById('prasentFamale').innerHTML = '';
            } else if (type === 'employment') {
                chart.update({
                    title: { text: 'Iqtisodiyotda bandlar soni' },
                    series: [{
                        name: 'O`zbekiston',
                        data: [14.934, 15.070, 15.452, 15.799, 16.138, 16.368, 16.572, 16.749, 16.912, 17.058, 17.276, 17.438, 17.939]
                    }]
                });
                document.getElementById('first').innerHTML = 'Male';
                document.getElementById('second').innerHTML = 'Famale';
                document.getElementById('countMale').innerHTML = '8058.6';
                document.getElementById('prasentMale').innerHTML = '58.80%';
                document.getElementById('countFamale').innerHTML = '5647.6';
                document.getElementById('prasentFamale').innerHTML = '41.20%';
            }else if (type === 'unemployment') {
                chart.update({
                    title: { text: 'Ishsizlik darajasi' },
                    series: [{
                        name: 'O`zbekiston',
                        data: [5.4,5,4.9,4.9,5.1,5.2,5.2,5.8,9.3,9,10.5,9.6,8.9]
                    }]
                });
                document.getElementById('first').innerHTML = 'Male';
                document.getElementById('second').innerHTML = 'Famale';
                document.getElementById('countMale').innerHTML = '13.4';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '5.4';
                document.getElementById('prasentFamale').innerHTML = '';
            }else if (type === 'faollik') {
                chart.update({
                    title: { text: 'Aholining iqtisodiy faollik darajasi' },
                    series: [{
                        name: 'O`zbekiston',
                        data: [70.7,69.7,70,70.5,71.3,71.9,72.5,73.5,74.3,75,73.8,74.1,73.7]
                    }]
                });
                document.getElementById('first').innerHTML = '';
                document.getElementById('second').innerHTML = '';
                document.getElementById('countMale').innerHTML = '';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '';
                document.getElementById('prasentFamale').innerHTML = '';
            }else if (type === 'nofaollik') {
                chart.update({
                    title: { text: 'Iqtisodiy nofaol aholi soni' },
                    series: [{
                        name: 'O`zbekiston',
                        data: [4439.4,4744.9,4478.6,4714.2,4651.1,4542.6,4508.4,4466.5,4309,4187.9,4072.6,4360.8,4354.2]
                    }]
                });
                document.getElementById('first').innerHTML = 'Qishloq';
                document.getElementById('second').innerHTML = 'Shahar';
                document.getElementById('countMale').innerHTML = '5.4';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '5.4';
                document.getElementById('prasentFamale').innerHTML = '';
            }

        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.form-select').addEventListener('change', function() {
                if (this.value === "1") { // Assuming 'Two' has the value '2'
                    window.location.href = 'bozorxolatiSamarqand.html'; // Redirect to about.html
                }else if(this.value === "2"){
                    window.location.href = 'bozorxolatiQoraqolpoq.html';
                }else if(this.value === "3"){
                    window.location.href = 'bozorxolatiAndijon.html';
                }else if(this.value === "4"){
                    window.location.href = 'bozorxolatiBuxoro.html';
                }else if(this.value === "5"){
                    window.location.href = 'bozorxolatiJizzax.html';
                }else if(this.value === "6"){
                    window.location.href = 'bozorxolatiQashqadaryo.html';
                }else if(this.value === "7"){
                    window.location.href = 'bozorxolatiNavoiy.html';
                }else if(this.value === "8"){
                    window.location.href = 'bozorxolatiNamangan.html';
                }else if(this.value === "10"){
                    window.location.href = 'bozorxolatiSurxondaryo.html';
                }else if(this.value === "11"){
                    window.location.href = 'bozorxolatiSirdaryo.html';
                }else if(this.value === "12"){
                    window.location.href = 'bozorxolatiToshkent.html';
                }else if(this.value === "13"){
                    window.location.href = 'bozorxolatiFargona.html';
                }else if(this.value === "14"){
                    window.location.href = 'bozorxolatiXorazm.html';
                }else if(this.value === "15"){
                    window.location.href = 'bozorxolatiToshkentsh.html';
                }
            });
        });
    </script>
@endsection
