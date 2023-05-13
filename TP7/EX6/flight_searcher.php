<!-- This only works with firefox browser -->

<!DOCTYPE html>
<html>
<head>
    <title>Flight Information Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container col col-6 p-5" id="main-container">
    <h1 class="mt-5">Flight Information Search</h1>
    <form action="result.php" method="POST">
        <div class="form-group">
            <label for="departureCity">Departure City</label>
            <select class="form-select form-control" id="departureCity" name="departureCity">
                <option selected value="">Select Departure City</option>
            </select>
        </div>
        <div class="form-group">
            <label for="destinationCity">Destination City</label>
            <select class="form-select form-control" id="arrivalCity" name="arrivalCity">
                <option selected value="">Select Arrival City</option>
            </select>
        </div>
        <div class="form-group">
            <label for="departureDate">Flight Status</label>
            <select class="form-control form-select" id="flightStatus" name="flightStatus">
                <option value="" selected>Select Flight Status</option>
                <option value="scheduled">Scheduled</option>
                <option value="active">Active</option>
                <option value="landed">Landed</option>
                <option value="cancelled">Cancelled</option>
                <option value="incident">Incident</option>
                <option value="diverted">Diverted</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    const departureCitySelect = document.getElementById("departureCity");
    const arrivalCitySelect = document.getElementById("arrivalCity");

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var json = JSON.parse(xhr.responseText);
            const obj_arr = json.data;
            obj_arr.sort(function (a, b) {
                return a.city_name.localeCompare(b.city_name);
            });

            for (var i = 0; i < json.data.length; i++) {
                const city_obj = json.data[i];
                const city_name = city_obj.city_name;
                const iata_code = city_obj.iata_code;
                const option_element = document.createElement("option");
                const option_element2 = document.createElement("option");
                option_element.setAttribute("value", iata_code);
                option_element2.setAttribute("value", iata_code);
                option_element.innerHTML = city_name;
                option_element2.innerHTML = city_name;
                departureCitySelect.appendChild(option_element);
                arrivalCitySelect.appendChild(option_element2);
            }
        }
    }

    xhr.open("GET", "http://api.aviationstack.com/v1/cities?access_key=256ea40303e46294f32827afdfa504de&offset=9000", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send();

</script>
</body>
</html>
