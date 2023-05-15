<?php
    require 'conn.php';
    require 'model.php';
    $db = new Database();
    $last = new data($db);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
        }
    </style>
    <title>Main</title>
</head>
<div class="data">

</div>
<body>
    <!--Header  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Main</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!-- <a class="nav-item nav-link active" href="#">Main <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Reading</a>
                <a class="nav-item nav-link" href="#">Info</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
            </div>
        </div>
    </nav>

    <div class="container-fluid ma-5 text-blue bg-primary">
        <div class="row">

            <!-- Gambar  -->
            <div class="col-sm-4 m-auto">
                <img class="img-fluid mx-2 my-5 d-block pannable-image" src="img/kandang_ayam.jpg" alt="kandang_ayam">
            </div>

            <!-- Data Pembacaan Sensor DHT-->
            <div class="col-sm-3">
                <h6 class="mt-4">Reading DHT</h6>
                <div class="list-group text-dark mt-2">
                    <div class="list-group-item">Sensor 1 : </div>
                    <div class="list-group-item">Sensor 2 : </div>
                    <div class="list-group-item">Sensor 3 : </div>
                    <div class="list-group-item">Sensor 4 : </div>
                    <div class="list-group-item">Sensor 5 : </div>
                    <div class="list-group-item">Sensor 6 : </div>
                </div>
            </div>

            <!-- Data Pembacaan Sensor DHT -->
            <div class="col-sm-3">
                <h6 class="mt-4">Reading MQ</h6>
                <div class="list-group text-dark mt-2">
                    <div class="list-group-item">Sensor 1 : </div>
                    <div class="list-group-item">Sensor 2 : </div>
                    <div class="list-group-item">Sensor 3 : </div>
                    <div class="list-group-item">Sensor 4 : </div>
                    <div class="list-group-item">Sensor 5 : </div>
                    <div class="list-group-item">Sensor 6 : </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik Pembacaan sensor 7 hari terakhir -->
    <div class="card-group bg-white">
        <!-- Pembacaan Sensor DHT Kelembaban -->
        <div class="card m-5 mw-30% ">

            <!-- Grafik Pembacaan Sensor DHT Suhu -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <canvas id="grafik-dht-suhu" style="width:100%;max-width:500px"></canvas>

            <script>
                const x_hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

                new Chart("grafik-dht-suhu", {
                    type: "line",
                    data: {
                        labels: x_hari,
                        datasets: [{
                            data: [32, 32, 28, 30, 28, 29, 31],
                            borderColor: "crimson",
                            fill: false
                        }, {
                            data: [29, 30, 28, 27, 28, 29, 31],
                            borderColor: "green",
                            fill: false
                        }, {
                            data: [30, 32, 28, 30, 28, 29, 31],
                            borderColor: "blue",
                            fill: false
                        }, {
                            data: [34, 30, 28, 27, 28, 29, 29],
                            borderColor: "teal",
                            fill: false
                        }, {
                            data: [34, 32, 28, 29, 29, 30, 30],
                            borderColor: "magenta",
                            fill: false
                        }, {
                            data: [34, 30, 28, 29, 28, 30, 31],
                            borderColor: "lime",
                            fill: false
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        }
                    }
                });
            </script>
            <div class="card-body">
                <h4 class="card-text">Suhu Minggu Ini</h4>
            </div>
        </div>

        <!-- Pembacaan Sensor DHT Kelembaban -->
        <div class="card m-5 mw-30%">

            <!-- Grafik Pembacaan Sensor DHT Kelembaban -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <canvas id="grafik-dht-kelembaban" style="width:100%;max-width:500px"></canvas>

            <script>
                new Chart("grafik-dht-kelembaban", {
                    type: "line",
                    data: {
                        labels: x_hari,
                        datasets: [{
                            data: [65, 60, 75, 80, 75, 70, 60],
                            borderColor: "crimson",
                            fill: false
                        }, {
                            data: [70, 65, 75, 80, 75, 70, 60],
                            borderColor: "green",
                            fill: false
                        }, {
                            data: [65, 60, 75, 80, 80, 70, 65],
                            borderColor: "blue",
                            fill: false
                        }, {
                            data: [65, 65, 70, 80, 75, 70, 60],
                            borderColor: "teal",
                            fill: false
                        }, {
                            data: [65, 60, 75, 75, 75, 70, 60],
                            borderColor: "magenta",
                            fill: false
                        }, {
                            data: [65, 60, 75, 75, 75, 70, 60],
                            borderColor: "lime",
                            fill: false
                        }, ]
                    },
                    options: {
                        legend: {
                            display: false
                        }
                    }
                });
            </script>

            <div class="card-body">
                <h4 class="card-text">Kelembaban Minggu Ini</h4>
            </div>
        </div>

        <!-- Pembacaan Sensor MQ Gas Metana -->
        <div class="card m-5 mw-30%">

            <!-- Grafik Pembacaan Sensor DHT Kelembaban -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <canvas id="grafik-mq-gas" style="width:100%;max-width:500px"></canvas>

            <script>
                new Chart("grafik-mq-gas", {
                    type: "line",
                    data: {
                        labels: x_hari,
                        datasets: [{
                            data: [500, 400, 450, 500, 600, 700, 300],
                            borderColor: "crimson",
                            fill: false
                        }, {
                            data: [500, 400, 450, 500, 600, 700, 300],
                            borderColor: "green",
                            fill: false
                        }, {
                            data: [500, 400, 450, 500, 600, 700, 300],
                            borderColor: "blue",
                            fill: false
                        }, {
                            data: [500, 400, 450, 500, 600, 700, 300],
                            borderColor: "teal",
                            fill: false
                        }, {
                            data: [500, 400, 450, 500, 600, 700, 300],
                            borderColor: "magenta",
                            fill: false
                        }, {
                            data: [500, 400, 450, 500, 600, 700, 300],
                            borderColor: "lime",
                            fill: false
                        }, ]
                    },
                    options: {
                        legend: {
                            display: false
                        }
                    }
                });
            </script>

            <div class="card-body">
                <h4 class="card-text">Kondisi Gas Minggu Ini</h4>
            </div>
        </div>
    </div>

    




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>