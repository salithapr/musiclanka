<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // පරිශීලකයා ලොගින් වී නොමැතිනම් login පිටුවට යොමු කරයි
    exit();
}
?>

<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>ඔබ සාර්ථකව ලොගින් වී ඇත.</p>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Lanka.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>mUSIC LANKA</h2>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="songs.html">Songs</a></li>
                <li><a href="artist.html">Artists</a></li>
                <li><a href="download.html">Download</a></li>
                <li><a href="playlist.html">Playlist</a></li>
                <li><a href="index.html" onclick="window.location ">Sign Out</a></li>
               <li><a href=""><img src="user.png" alt="user" style="height: 25px;"></a></li> 
            </ul>
        </nav>
    </header>
    <section class="video-section">
    <a href=https://www.youtube.com/@musiclanka.com><img src="new song.png" alt="" style="height: 400px;">
  </a>
    </section>
    <div class="listcat" style="text-align:center">
        <a href="https://www.youtube.com/@musiclanka.com" style="color: black;">Subscribe you Tube Chanel</a>
      </div>

      <div style="overflow:auto" style="display: flex; justify-content: center; margin: 0 auto; max-width: 90%;" >
        <div class="main" style="height: auto !important; text-align: center;
    width: 100%;">
          <h2 class="titel1">NEW UPLOADS</h2> 
          
          <div class="list-group-item">
            <font color="#198523"> 
              <div class="listcat">
                <a href="download.html" style="color: #396a93;">Manoparakata sindu | Best new sinhala DJ Nonstop | Sinhala songs | Sinhala sindu</a>
            </div> was added 1 second ago </font></div>
            <div class="list-group-item">
                <font color="#198523"> 
                  <div class="listcat">
                    <a href="download.html" style="color: #396a93;">Manoparakata sindu | Best new sinhala DJ Nonstop | Sinhala songs | Sinhala sindu</a>
                </div> was added 1 second ago </font></div>
                          <div class="list-group-item">
            <font color="#198523"> 
              <div class="listcat">
                <a href="download.html" style="color: #396a93;">Manoparakata sindu | Best new sinhala DJ Nonstop | Sinhala songs | Sinhala sindu</a>
            </div> was added 1 second ago </font></div>
            <div class="list-group-item">
                <font color="#198523"> 
                  <div class="listcat">
                    <a href="download.html" style="color: #396a93;">Manoparakata sindu | Best new sinhala DJ Nonstop | Sinhala songs | Sinhala sindu</a>
                </div> was added 1 second ago </font></div>
                <div class="list-group-item">
                    <font color="#198523"> 
                      <div class="listcat">
                        <a href="download.html" style="color: #396a93;">Manoparakata sindu | Best new sinhala DJ Nonstop | Sinhala songs | Sinhala sindu</a>
                    </div> was added 1 second ago </font></div>
                    <div class="list-group-item">
                        <font color="#198523"> 
                          <div class="listcat">
                            <a href="download.html" style="color: #396a93;">Manoparakata sindu | Best new sinhala DJ Nonstop | Sinhala songs | Sinhala sindu</a>
                        </div> was added 1 second ago </font></div>
                        <div class="list-group-item">
                            <font color="#198523"> 
                              <div class="listcat">
                                <a href="download.html" style="color: #396a93;">Manoparakata sindu | Best new sinhala DJ Nonstop | Sinhala songs | Sinhala sindu</a>
                            </div> was added 1 second ago </font></div>
                            <div class="list-group-item">
                                <font color="#198523"> 
                                  <div class="listcat">
                                    <a href="download.html" style="color: #396a93;">Manoparakata sindu | Best new sinhala DJ Nonstop | Sinhala songs | Sinhala sindu</a>
                                </div> was added 1 second ago </font></div>
                                <div class="list-group-item">
                                    <font color="#198523"> 
                                      <div class="listcat">
                                        <a href="download.html" style="color: #396a93;">Manoparakata sindu | Best new sinhala DJ Nonstop | Sinhala songs | Sinhala sindu</a>
                                    </div> was added 1 second ago </font></div>
                                    <div class="list-group-item">
                                        <font color="#198523"> 
                                          <div class="listcat">
                                            <a href="download.html" style="color: #396a93;">Manoparakata sindu | Best new sinhala DJ Nonstop | Sinhala songs | Sinhala sindu</a>
                                        </div> was added 1 second ago </font></div>
                                        <br>
                                        <a href="songs.html"><button style="background-color: black; color: white; border: #396a93;border-radius: 5px; width: 100px; height: 35px; cursor: pointer;">See More</button></a><br><br>
                                       

    <footer>
        <p>&copy; 2024 mUSIC LANKA. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

