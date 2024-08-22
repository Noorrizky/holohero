<?php
    include("header.php");

    // Define the number of results per page
    $results_per_page = 6;

    // Determine the total number of pages
    $sql_total = "SELECT COUNT(*) AS total FROM videos";
    $result_total = $db->query($sql_total);
    $total_rows = $result_total->fetch_assoc()['total'];
    $total_pages = ceil($total_rows / $results_per_page);

    // Get the current page number from the query string, default to 1
    $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    if ($current_page < 1) $current_page = 1; // Ensure current page is at least 1
    if ($current_page > $total_pages) $current_page = $total_pages; // Ensure current page does not exceed total pages

    // Calculate the starting row for the current page
    $offset = ($current_page - 1) * $results_per_page;

    // Fetch the records for the current page, ordered by the upload date in descending order
    $sql = "SELECT id, judul, deskripsi, url_youtube, tanggal_upload FROM videos ORDER BY tanggal_upload DESC LIMIT $results_per_page OFFSET $offset";
    $result = $db->query($sql);
?>

<div class="content-card-container mt-5">
    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $judul = $row['judul'];
                $deskripsi = $row['deskripsi'];
                $url_youtube = $row['url_youtube'];
                $tanggal_upload = $row['tanggal_upload'];
                ?>

                <div class="content-card">
                    <div class="content-card__header">
                        <h2><?php echo htmlspecialchars($judul); ?></h2>
                    </div>
                    <div class="content-card__body">
                        <p><?php echo htmlspecialchars($deskripsi); ?></p>
                    </div>
                    <div class="content-card__video">
                        <?php echo $url_youtube; ?>
                    </div>
                    <div class="content-card__footer">
                        <p>Uploaded on: <?php echo htmlspecialchars($tanggal_upload); ?></p>
                    </div>
                </div>

                <?php
            }
        } else {
            echo "<p>No videos found.</p>";
        }
    ?>
</div>

<!-- Pagination Controls -->
<div class="pagination mt-4">
    <?php
        if ($total_pages > 1) {
            // Previous Page Link
            if ($current_page > 1) {
                echo '<a href="clip.php?page=' . ($current_page - 1) . '">&laquo; Previous</a>';
            }

            // Page Number Links
            for ($page = 1; $page <= $total_pages; $page++) {
                if ($page == $current_page) {
                    echo '<span class="current">' . $page . '</span>';
                } else {
                    echo '<a href="clip.php?page=' . $page . '">' . $page . '</a>';
                }
            }

            // Next Page Link
            if ($current_page < $total_pages) {
                echo '<a href="clip.php?page=' . ($current_page + 1) . '">Next &raquo;</a>';
            }
        }
    ?>
</div>

<?php
    include("footer.php");
    $db->close();
?>
