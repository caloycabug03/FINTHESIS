<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <!-- BOOTSTRAP PLUG IN -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
    <table class="table table-dark table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Check-in Date:</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody >
        
        @foreach ($bookings as $booking)
       
          <tr>
            <th scope="row">Check-out Date</th>
            <td>{{ $booking->checkinDate }}</td>
            <td>{{ $booking->checkoutDate }}</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">Number of Adults</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">Number of Children</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">Number of Rooms</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          @endforeach

        </tbody>
      </table>
</body>
</html>
