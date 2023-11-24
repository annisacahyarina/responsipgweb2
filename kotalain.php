<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GudegIn</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.css"
    integrity="sha512-nnNXPeQKvNOEUd+TrFbofWwHT0ezcZiFU5E/Lv2+JlZCQwQ/ACM33FxPoQ6ZEFNnERrTho8lF0MCEH9DBZ/wWw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

  </script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }

    img {
      padding: 5pt;
    }

    body {
      background-color: rgb(228, 241, 255);
      
    }

    button {
      padding: 50px;
    }
  </style>
</head>

<body>

<!--navbar-->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="font-size: 23pt"><i class="fa-solid fa-bowl-rice"></i> GudegIn</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wfs1.html">Peta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="turis.html">Intip Turis</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lainnya
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://cookpad.com/id/resep/16913148-gudeg-jogja-komplit?ref=search&search_term=gudeg%20yogya">Resep Gudeg</a></li>
              <li><a class="dropdown-item" href="https://www.traveloka.com/id-id/activities/indonesia/city/yogyakarta-107442">Wisata Jogja</a></li>
              <li><a class="dropdown-item" href="makan.html">Video Lainnya</a></li>
            </ul>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-2">


<h2>Cari Gudeg Di Kotamu</h2>
                <br>
    <?php
    //sesuaikan dengan setting MySQL
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "responsiweb";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //check connection
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM kotalain";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1px'><tr>
    <th>Nama Tempat</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Provinsi</th>
    <th>No Telpon</th>";

    // output data of each row
    while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["Nama_Tempat"]."</td><td>".
    $row["Alamat"]."</td><td>". 
    $row["Kota"]."</td><td>". 
    $row["Provinsi"]."</td><td align='right'>".
    $row["No_Telpon"]."</td></tr>";
    }
     echo "</table>";
    } else {
    echo "0 results";
    }
    $conn->close();

    ?>
    </div>
</div>

<br>

<a href="inputform.html">
<button type="button" class="btn btn-primary" style="margin-left: 580px;">Isi form input</button>

</body>
</html>