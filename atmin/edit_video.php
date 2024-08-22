<?php
session_start();
include('../config/connection.php');

$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $url_youtube = $_POST['url_youtube'];
    $tanggal_upload = $_POST['tanggal_upload'];
    
    // Server-side validation
    if (strlen($deskripsi) > 30) {
        echo '<div class="alert alert-danger">Description must be less than or equal to 30 characters.</div>';
    } else {
        $sql = "UPDATE videos SET judul=?, deskripsi=?, url_youtube=?, tanggal_upload=? WHERE id=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssssi", $judul, $deskripsi, $url_youtube, $tanggal_upload, $id);
        $stmt->execute();
        header("Location: admin_dashboard.php");
        exit();
    }
}

$sql = "SELECT * FROM videos WHERE id=?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$video = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Video</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Link to Bootstrap CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .edit-video-container {
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
        .form-group label {
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
        textarea {
            resize: none;
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
    <div class="container edit-video-container">
        <h2>Edit Video</h2>
        <?php
        if (isset($error_message)) {
            echo '<div class="alert alert-danger">' . htmlspecialchars($error_message) . '</div>';
        }
        ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="judul">Title:</label>
                <input type="text" id="judul" name="judul" class="form-control" value="<?php echo htmlspecialchars($video['judul']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="deskripsi">Description:</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4" maxlength="30" required><?php echo htmlspecialchars($video['deskripsi']); ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="url_youtube">YouTube URL:</label>
                <input type="text" id="url_youtube" name="url_youtube" class="form-control" value="<?php echo htmlspecialchars($video['url_youtube']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="tanggal_upload">Upload Date:</label>
                <input type="datetime-local" id="tanggal_upload" name="tanggal_upload" class="form-control" value="<?php echo date("Y-m-d\TH:i", strtotime($video['tanggal_upload'])); ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Video</button>
        </form>
    </div>

    <!-- Optional: Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
