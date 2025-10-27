<?php include '../common/auth.php'; ?>
<?php
// ================= DB Connection =================
$host = "localhost";
$user = "root";     // change if you use another DB user
$pass = "";         // change if your MySQL has a password
$dbname = "csmss";  // your database name

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ================= Fetch Function =================
function fetchToppers($conn, $department) {
  $stmt = $conn->prepare("SELECT * FROM toppers WHERE department = ?");


    $stmt->bind_param("s", $department);
    $stmt->execute();
    return $stmt->get_result();
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-free">

<?php include('../common/header_link.php'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    .nav-tabs {
        display: flex;
        overflow-x: auto;
        white-space: nowrap;
        flex-wrap: nowrap;
    }
    .nav-tabs::-webkit-scrollbar {
        height: 6px;
    }
    .nav-tabs li {
        flex: 0 0 auto;
    }
    .wrap-text {
        white-space: pre-line;
    }
</style>

<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <?php include('../common/sidebar.php'); ?>
        <div class="layout-page">
            <?php include '../common/header.php'; ?>

            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="text-muted fw-bold py-3 mb-4">TOPPERS DETAILS</h4>

                    <div class="card">
                        <ul class="nav nav-tabs ">
                            <li class="active"><a data-toggle="tab" href="#civil">Civil Engineering</a></li>
                            <li><a data-toggle="tab" href="#electrical">Electrical Engineering</a></li>
                            <li><a data-toggle="tab" href="#mechanical">Mechanical Engineering</a></li>
                            <li><a data-toggle="tab" href="#etc">Electronic and Tele-communication Engineering</a></li>
                            <li><a data-toggle="tab" href="#computer">Computer Engineering</a></li>
                            <li><a data-toggle="tab" href="#ai">Artificial intelligence Engineering</a></li>
                        </ul>

                        <div class="tab-content">
                            <?php
                            // Departments list
                            $departments = [
                                "civil" => "Civil Engineering",
                                "electrical" => "Electrical Engineering",
                                "mechanical" => "Mechanical Engineering",
                                "etc" => "Electronic and Tele-communication Engineering",
                                "computer" => "Computer Engineering",
                                "ai" => "Artificial intelligence Engineering"
                            ];

                            $first = true;
                            foreach ($departments as $tabId => $deptName) {
                                $toppers = fetchToppers($conn, $deptName);
                                ?>
                                <div id="<?= $tabId ?>" class="tab-pane fade <?= $first ? 'in active' : '' ?>">
                                    <div class="row">
                                        <div class="col-lg-6 "></div>
                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Toppers.php">
                                                <button type="button" class="btn btn-primary me-4">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.no.</th>
                                                    <th>Name of Student</th>
                                                    <th>Percentage</th>
                                                    <th>Class Awarded</th>
                                                    <th>Department</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                            <?php
                                            if ($toppers->num_rows > 0) {
                                                $sr = 1;
                                                while ($row = $toppers->fetch_assoc()) {
                                                    echo "<tr>
                                                        <td>{$sr}</td>
                                                        <td><strong>{$row['student_name']}</strong></td>
                                                        <td>{$row['percentage']}%</td>
                                                        <td>{$row['class_awarded']}</td>
                                                        <td>{$row['department']}</td>
                                                        <td>{$row['year']}</td>
                                                        <td>
                                                            <a href='edit_Toppers.php?id={$row['id']}' class='btn rounded-pill btn-primary'>
                                                                <i class='bx bx-edit-alt me-1'></i> Edit
                                                            </a>
                                                            <a href='delete_Toppers.php?id={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this record?');\" class='btn rounded-pill btn-danger'>
                                                                <i class='bx bx-trash me-1'></i> Delete
                                                            </a>
                                                        </td>
                                                    </tr>";
                                                    $sr++;
                                                }
                                            } else {
                                                echo "<tr><td colspan='7' class='text-center'>No toppers found for $deptName</td></tr>";
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php
                                $first = false;
                            }
                            ?>
                        </div>
                    </div>

                    <hr class="my-5" />
                    <?php include('../common/footer.php'); ?>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
</div>
<?php include('../common/footer-link.php'); ?>
</body>
</html>
