<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Flight Information</title>
    </head>
    <body>
    <div>
        <h1 class="mb-5 mt-5 text-center">Flight Information</h1>
        <table class="table container w-100 table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>Flight Status</th>
                <th>Departure Date and Time</th>
                <th>Departure Airport</th>
                <th>Arrival Date and Time</th>
                <th>Arrival Airport</th>
                <th>Airline Name</th>
                <th>Flight Number</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Altitude</th>
                <th>Horizontal Speed</th>
            </tr>
            </thead>
            <tbody id="table-body">

            </tbody>
        </table>
    </div>

    <script>
        var depCity = "<?php echo $_POST['departureCity']; ?>";
        var arrCity = "<?php echo $_POST['arrivalCity'] ?>";
        var flightStatus = "<?php echo $_POST['flightStatus']; ?>";

        const table_body = document.getElementById("table-body");

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var json = JSON.parse(xhr.responseText);
                const obj_arr = json.data;

                for (var i=0; i<obj_arr.length; i++) {
                    var obj_i = obj_arr[i];
                    var row = document.createElement("tr");
                    row.innerHTML += "<td>" + obj_i.flight_status + "</td>";
                    row.innerHTML += "<td>" + obj_i.departure.scheduled.replace("T", " ") + "</td>";
                    row.innerHTML += "<td>" + obj_i.departure.airport + "</td>";
                    row.innerHTML += "<td>" + obj_i.arrival.scheduled.replace("T", " ") + "</td>";
                    row.innerHTML += "<td>" + obj_i.arrival.airport + "</td>";
                    row.innerHTML += "<td>" + obj_i.airline.name + "</td>";
                    row.innerHTML += "<td>" + obj_i.flight.number + "</td>";

                    if (obj_i.live === null) {
                        row.innerHTML += "<td>Not available</td>";
                        row.innerHTML += "<td>Not available</td>";
                        row.innerHTML += "<td>Not available</td>";
                        row.innerHTML += "<td>Not available</td>";
                    } else {
                        row.innerHTML += "<td>" + obj_i.live.latitude + "</td>";
                        row.innerHTML += "<td>" + obj_i.live.longitude + "</td>";
                        row.innerHTML += "<td>" + obj_i.live.altitude + "</td>";
                        row.innerHTML += "<td>" + obj_i.live.speed_horizontal + "</td>";
                    }

                    table_body.appendChild(row);

                }
            }
        }

        xhr.open("GET", "http://api.aviationstack.com/v1/flights?access_key=256ea40303e46294f32827afdfa504de&flight_status=" + flightStatus + "&dep_iata=" + depCity + "&arr_iata=" + arrCity, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send();
    </script>
    </body>
    </html>



<?php } ?>