<?php
include 'dbcon.php';

// Insert new flight record
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $flightNumber = $_POST['flightNumber'];
    $flightName = $_POST['flightName'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $departureTime = $_POST['departureTime'];
    $arrivalTime = $_POST['arrivalTime'];
    $duration = $_POST['duration'];
    $cost = $_POST['cost'];

    $query = "INSERT INTO FlightRecords (FlightNumber, FlightName, Source, Destination, DepartureTime, ArrivalTime, Duration, Cost)
              VALUES ('$flightNumber', '$flightName', '$source', '$destination', '$departureTime', '$arrivalTime', '$duration', '$cost')";
    mysqli_query($conn, $query);
}

// Retrieve existing flight records
$query = "SELECT * FROM FlightRecords";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Flight Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Insert Flight Record</h1>
        <form method="POST" action="Flight_Insert.php">
            <div class="mb-3">
                <label for="flightNumber" class="form-label">Flight Number</label>
                <input type="text" class="form-control" id="flightNumber" name="flightNumber">
            </div>
            <div class="mb-3">
                <label for="flightName" class="form-label">Flight Name</label>
                <input type="text" class="form-control" id="flightName" name="flightName">
            </div>
            <div class="mb-3">
                <label for="source" class="form-label">Source</label>
                <input type="text" class="form-control" id="source" name="source">
            </div>
            <div class="mb-3">
                <label for="destination" class="form-label">Destination</label>
                <input type="text" class="form-control" id="destination" name="destination">
            </div>
            <div class="mb-3">
                <label for="departureTime" class="form-label">Departure Time</label>
                <input type="text" class="form-control" id="departureTime" name="departureTime">
            </div>
            <div class="mb-3">
                <label for="arrivalTime" class="form-label">Arrival Time</label>
                <input type="text" class="form-control" id="arrivalTime" name="arrivalTime">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration">
            </div>
            <div class="mb-3">
                <label for="cost" class="form-label">Cost</label>
                <input type="text" class="form-control" id="cost" name="cost">
            </div>
            <button type="submit" class="btn btn-primary">Insert Record</button>
        </form>

        <hr>

        <h2>Existing Records</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Flight Number</th>
                    <th>Flight Name</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Duration</th>
                    <th>Cost</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['FlightNumber']; ?></td>
                    <td><?php echo $row['FlightName']; ?></td>
                    <td><?php echo $row['Source']; ?></td>
                    <td><?php echo $row['Destination']; ?></td>
                    <td><?php echo $row['DepartureTime']; ?></td>
                    <td><?php echo $row['ArrivalTime']; ?></td>
                    <td><?php echo $row['Duration']; ?></td>
                    <td><?php echo $row['Cost']; ?></td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
