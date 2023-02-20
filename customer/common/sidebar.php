
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <span class="fs-4">eNepal</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="?page=home" class="nav-link link-dark" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Home
        </a>
      </li>
      <li>
        <a href="?page=dashboard" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="?page=product&action=order" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="?page=product&action=cart" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Products
        </a>
      </li>
    </ul>
    <hr>

    <?php
$email = $_SESSION['email'];
                // retrieve the content from the database
                      $sql = "SELECT `name`, `filename` FROM `tbl_customer` WHERE email = '$email'";
                      $result = $conn->query($sql);

                      $row = $result->fetch_assoc();
                      ?>
    
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="profile-pic/<?php echo $row['filename'];?>" alt="Jane" width="32" height="32" class="rounded-circle me-2">
        
        <strong><?php echo $row['name'];?></strong><br>

      </a>
      <ul class="dropdown-menu text-small shadow">
        <!-- <li><a class="dropdown-item" href="?page=setting">Settings</a></li> -->
        <li><a class="dropdown-item" href="?page=profile">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="?page=logout" onclick="return confirm('are your sure you want to logout?');">Sign out</a></li>
      </ul>
    </div>
  </div>