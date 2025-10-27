<?php include '../common/auth.php'; ?>
<?php
include "../common/dbcon.php";

// Fetch department sliders
function fetchdepartment_slider($conn, $department)
{
  $stmt = $conn->prepare("SELECT * FROM department_slider WHERE department = ?");
  $stmt->bind_param("s", $department);
  $stmt->execute();
  return $stmt->get_result();
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
  data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<?php include('../common/header_link.php'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="text-muted fw-bold py-3 mb-4">Department Slider</h4>

          <div class="card">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#civil">Civil Engineering</a></li>
              <li><a data-toggle="tab" href="#electrical">Electrical Engineering</a></li>
              <li><a data-toggle="tab" href="#mechanical">Mechanical Engineering</a></li>
              <li><a data-toggle="tab" href="#etc">Electronics & Tele-communication</a></li>
              <li><a data-toggle="tab" href="#computer">Computer Engineering</a></li>
              <li><a data-toggle="tab" href="#ai">Artificial Intelligence</a></li>
            </ul>

            <div class="tab-content">
              <?php
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
                $department_slider = fetchdepartment_slider($conn, $deptName);
              ?>
                <div id="<?= $tabId ?>" class="tab-pane fade <?= $first ? 'in active' : '' ?>">
                  <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Department-Slider.php">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr.no.</th>
                          <th>Image</th>
                          <th>Department</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <?php
                        if ($department_slider->num_rows > 0) {
                          $sr = 1;
                          while ($row = $department_slider->fetch_assoc()) {
                            $imagePath = "../assets/img/" . $row['image']; // ✅ fixed path
                            echo "<tr>
                                <td>{$sr}</td>
                                <td>
                                  <img src='{$imagePath}' alt='Department Image' style='height:40px; width:40px; object-fit:cover;'/>
                                </td>
                                <td>{$row['department']}</td>
                                <td>
                                    <a href='edit_Department-Slider.php?id={$row['id']}' class='btn rounded-pill btn-primary'>
                                      <i class='bx bx-edit-alt me-1'></i> Edit
                                    </a>
                                    <a href='delete_Department-Slider.php?id={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this record?');\" class='btn rounded-pill btn-danger'>
                                      <i class='bx bx-trash me-1'></i> Delete
                                    </a>
                                </td>
                              </tr>";
                            $sr++;
                          }
                        } else {
                          echo "<tr><td colspan='4' class='text-center'>No records for $deptName</td></tr>";
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
        </div>

        <?php include('../common/footer.php'); ?>
      </div>
    </div>
  </div>
  <?php include('../common/footer-link.php'); ?>
</body>

</html>