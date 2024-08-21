<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>
    <div class="container">
<p><a href="Flight_Insert.php">Add Flight Record</a></p>
        <!-- Static Text and Images -->
        <div class="jumbotron mt-4">
            <h1 class="display-4">Welcome to FlightFinder!</h1>
            <p class="lead">Find the best flights at unbeatable prices.</p>
            <hr class="my-4">
            <p>Search for flights from multiple airlines all in one place.</p>
            <img width="100%" style="height: 250px;" src="https://www.shutterstock.com/image-vector/luggage-blue-air-ticket-float-600nw-2170367829.jpg" class="img-fluid" alt="Airplane Image">
        </div>

        <!-- Search Form -->
        <div class="mt-4">
            <h2>Search for Flights</h2>
            <form method="POST" action="index.php">
                <div class="mb-3">
                    <label for="source" class="form-label">Source</label>
                    <input type="text" class="form-control" id="source" name="source" required>
                </div>
                <div class="mb-3">
                    <label for="destination" class="form-label">Destination</label>
                    <input type="text" class="form-control" id="destination" name="destination" required>
                </div>
                <div class="mb-3">
                    <label for="travelDate" class="form-label">Travel Date</label>
                    <input type="date" class="form-control" id="travelDate" name="travelDate" required>
                </div>
                <div class="mb-3">
                    <label for="passengers" class="form-label">No. of Passengers</label>
                    <select class="form-control" id="passengers" name="passengers" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="radio" id="oneway" name="tripType" value="oneway" checked>
                    <label for="oneway">One-way</label>
                    <input type="radio" id="roundtrip" name="tripType" value="roundtrip">
                    <label for="roundtrip">Round-trip</label>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Display Results -->
        <div class="mt-4">
            <h2>Search Results</h2>
            <table class="table table-striped">
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'dbcon.php';
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $source = $_POST['source'];
                        $destination = $_POST['destination'];
                        $travelDate = $_POST['travelDate'];

                        $query = "SELECT * FROM FlightRecords WHERE Source='$source' AND Destination='$destination'";
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['FlightNumber']}</td>
                                        <td>{$row['FlightName']}</td>
                                        <td>{$row['Source']}</td>
                                        <td>{$row['Destination']}</td>
                                        <td>{$row['DepartureTime']}</td>
                                        <td>{$row['ArrivalTime']}</td>
                                        <td>{$row['Duration']}</td>
                                        <td>{$row['Cost']}</td>
                                        <td><button class='btn btn-success'>Book Now</button></td>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='9'>No flights found for your search criteria.</td></tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
