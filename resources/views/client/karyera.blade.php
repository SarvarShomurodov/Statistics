@extends('layouts.appclient')
@section('content')
    <!-- Karyera start -->
    <!-- Newsletter Start -->
    <div style="padding-top: 70px;">
        <div class="container mt-5 mb-4">
            <div class="subscription-banner-about">
                <div class="subscription-form">
                    <div class="text">
                        <h3 style="color: white;">Karyera yoki malaka oshirish</h3>
                    </div>
                    <input type="text" placeholder="Qo`llanmani qidirish">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Main Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <h4>Maosh yuqori bo`lgan kasblar</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr class="bg-light">
                            <th scope="col">Nomi</th>
                            <th scope="col">Grafik</th>
                            <th scope="col">Maosh</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dasturchi</td>
                            <td><div style="background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 250,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Bugalter</td>
                            <td><div style="width: 90%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 220,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Fermer</td>
                            <td><div style="width: 70%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 190,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Agranom</td>
                            <td><div style="width: 65%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 150,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Xizmatchi</td>
                            <td><div style="width: 25%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 50,000 mln so`m</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4>Kelajakda talab yuqori bo`lgan kasblar</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr class="bg-light">
                            <th scope="col">Nomi</th>
                            <th scope="col">Grafik</th>
                            <th scope="col">Maosh</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dasturchi</td>
                            <td><div style="background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 250,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Bugalter</td>
                            <td><div style="width: 90%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 220,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Fermer</td>
                            <td><div style="width: 70%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 190,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Agranom</td>
                            <td><div style="width: 65%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 150,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Xizmatchi</td>
                            <td><div style="width: 25%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 50,000 mln so`m</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="resurs mt-5 mb-5">
            <h4>Karyera va malaka oshirish bo`yicha manbalar</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="p-3 mb-1">
                        <form action="https://www.ulife.uz/allUniversity">
                            <button class="btn bg-light p-3 w-100">Malakaga ega bo‘lish uchun Oliy o‘quv yurtlari ro‘yxati</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 mb-1">
                        <form action="https://rank.uz/ru/ec">
                            <button class="btn bg-light p-3 w-100">Malaka oshirish uchun kurslar ro`yxati</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h4>Rezumeni to`g`ri to`ldirish</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Interyuda o`zini to`g`ri tutish</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tGDyrKKrCBc"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main End -->
@endsection
