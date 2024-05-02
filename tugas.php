<!DOCTYPE html>
<html>
<head>
<?php $nama = "Agustinus Kurniawan";
      $umur = "28";
      $alamat = "Jalan Raya Sesetan Gurita IV No.14";
      $email = "agustinuskurn04@gmail.com";   
      $telefon = "081338328841"   ?>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link/>
    <title>CV</title>
    <style>
        h1, h2, h3 {
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .section ul {
            list-style-type: none;
            padding: 0;
        }
        .section ul li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<nav
      class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top"
      style="background-color: brown"
    >
      <div class="container">
        <a
          class="navbar-brand"
          href="#home"
          ><?php echo $nama ?></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse"
          id="navbarNav"
        >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="#"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#info"
                >Informasi Pribadi</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#pendidikan"
                >Pendidikan</a
              >
            </li>

            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#project"
                >Project</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container">
    <div class="header">
        <h1>Curriculum Vitae</h1>
        <img src="agustinus.jpg" alt="" srcset="" width="20%">
    </div>

    <div class="section" id="info">
        <h2>Informasi Pribadi</h2>
        <ul>
            <li>Nama: <?= $nama; ?></li>
            <li>Umur: <?= $umur; ?></li>
            <li>Alamat: <?= $alamat; ?></li>
            <li>Email: <?= $email; ?></li>
            <li>Telepon: <?= $telefon; ?></li>
        </ul>
    </div>

    <div class="section"id="pendidikan">
        <h2>Pendidikan</h2>
        <ul>
            <li>SMA: SMK TI Bali Global (2014-2015)</li>
        </ul>
    </div>

    <div class="section" id="project">
        <h2>Project Kerja</h2>
        <table>
            <tr>
            <th><img src="recovery.jpg" alt="" width="60%"></th>
            <th><img src="pon.jpg" alt="" width="60%"></th>
            <th><img src="g20.jpg" alt="" width="60%"></th>
            <th><img src="asean.jpg" alt="" width="60%"></th>
            <th><img src="ais.jpg" alt="" width="60%"></th>
            </tr>
            <tr>
            <td><li>Recovery Jaringan Telkom di Labuan Bajo (2020)</li></td>
            <td><li>PON di Timika Papua (2021)</li></td>
            <td> <li>Event KTT G20 Nusa Dua Bali (2022)</li></td>
            <td><li>Event KTT ASEAN di Labuan Bajo (2022) </li></td>
            <td> <li>Event KTT AIS (2023) </li></td>
            </tr>
        </table>
    </div>
</div>

<footer style="background-color: brown;" class="text-white text-center pb-3">
      <p>Created by<a href="https://www.instagram.com/kurniawanagustinus?igsh=MXB5dTZ3b3NmYjB4eA==" class="text-white fw-bold"> <?= $nama ?></a></p>
</footer>
</body>
</html>
