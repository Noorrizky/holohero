<?php
session_start();
include('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $url_youtube = $_POST['url_youtube'];
    $tanggal_upload = $_POST['tanggal_upload'];
    
    // Limit the description to 30 characters
    $deskripsi = substr($deskripsi, 0, 30);
    
    $sql = "INSERT INTO videos (judul, deskripsi, url_youtube, tanggal_upload) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ssss", $judul, $deskripsi, $url_youtube, $tanggal_upload);
    $stmt->execute();
    header("Location: admin_dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Video</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Link to Bootstrap CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .create-video-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        textarea,
        input[type="datetime-local"] {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container create-video-container">
        <h2>Create New Video</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="judul">Title:</label>
                <input type="text" id="judul" name="judul" class="form-control" maxlength="30" required>
            </div>
            
            <div class="form-group">
                <label for="deskripsi">Description:</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4" maxlength="30" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="url_youtube">YouTube URL:</label>
                <input type="text" id="url_youtube" name="url_youtube" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="tanggal_upload">Upload Date:</label>
                <input type="datetime-local" id="tanggal_upload" name="tanggal_upload" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Video</button>
        </form>
    </div>

    <!-- Optional: Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
