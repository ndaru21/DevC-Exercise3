<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .heading {
            margin-bottom: 20px;
            font-size: 30px;
            font-family: calibri;
            border-left: 5px double #343A40;
            color: #343A40;
            padding: 0 10px;
        }
        .table{
            font-family: calibri;
            font-size: 17px;
        }
    </style>
</head>

<body>
    <div class="col-md-11" style="margin: 3% auto;">
        <h1 class="heading">Daftar Planet</h1>
        <pre width="100%">
            <table class="table">
                <tr>
                    <thead class="thead-dark">
                        <th>No</th>
                        <th>Name</th>
                        <th>Rotation</th>
                        <th>Orbital</th>
                        <th>Diameter</th>
                        <th>Climate</th>
                        <th>Gravity</th>
                        <th>Terrain</th>
                        <th>Surface</th>
                        <th>Population</th>
                        <th style="width: 5%">Residents</th>
                        <th>Films</th>
                        <th>Created</th>
                        <th>Edited</th>
                        <th>Url</th>
                    </thead>
                </tr>
                <tbody id="planet" class="table"></tbody>
            </table>
        </pre>
    </div>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="jquery.min.js"></script>
<script>
    $(document).ready(function () {
        loadData();
    });

    function loadData() {
        $.get('data.json', function (data) {
            var data = data.results;
            var number = 1;

            for (i = 0; i < data.length; i++) {
                var items = Object.values(data[i]);
                $('#planet').append("<tr id=datake" + i + ">");

                $('#planet').append("<td>" + number + "</td>");

                for (const item of items) {
                    $('#planet').append("<td>" + item + "</td>");
                }

                $('#planet').append("</tr>");

                number++;
            }
        });
    }
</script>

</html>
