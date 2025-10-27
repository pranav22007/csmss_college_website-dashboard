<?php
$current_page = $_SERVER['PHP_SELF']; // full relative path

function isActive($pages)
{
  global $current_page;
  foreach ((array)$pages as $page) {
    // Match at the end of the string to avoid substring conflicts
    if (str_ends_with($current_page, $page)) {
      return 'active';
    }
  }
  return '';
}

function isMenuOpen($pages)
{
  global $current_page;
  foreach ((array)$pages as $page) {
    if (str_ends_with($current_page, $page)) {
      return 'active open';
    }
  }
  return '';
}

// For PHP versions < 8
if (!function_exists('str_ends_with')) {
  function str_ends_with($haystack, $needle)
  {
    $length = strlen($needle);
    return $length === 0 || (substr($haystack, -$length) === $needle);
  }
}
?>


<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.php" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
      <img src="../assets/img/logo/logo-csmss.png" class="w-100" alt="csmss-logo">
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>


  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item <?= isActive(['index.php', 'admin_index.php']) ?>">
      <a href="../admin_index/index.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <!-- Home Menu -->
      <li class="menu-item <?= isMenuOpen(['slider.php', 'latest_update.php', 'latest_news_home.php', 'event.php', 'gallery/gallery.php', 'courses.php', 'testimonials.php', 'counters.php', 'members.php', 'partner.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Home</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive('slider/slider.php') ?>">
          <a href="../slider/slider.php" class="menu-link">
            <div>Slider</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('latest_update/latest_update.php') ?>">
          <a href="../latest_update/latest_update.php" class="menu-link">
            <div>Latest Updates</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('latest_news/latest_news_home.php') ?>">
          <a href="../latest_news/latest_news_home.php" class="menu-link">
            <div>latest News</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('event-home/event.php') ?>">
          <a href="../event-home/event.php" class="menu-link">
            <div>Events</div>
          </a>
        </li>
        <!-- <li class="menu-item <?= isActive('gallery/gallery.php') ?>">
          <a href="../gallery/gallery.php" class="menu-link">
            <div>Gallery</div>
          </a>
        </li> -->
        <li class="menu-item <?= isActive('courses/courses.php') ?>">
          <a href="../courses/courses.php" class="menu-link">
            <div>Courses</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('testimonials/testimonials.php') ?>">
          <a href="../testimonials/testimonials.php" class="menu-link">
            <div>Feedback Modal</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('counters/counters.php') ?>">
          <a href="../counters/counters.php" class="menu-link">
            <div>Counters</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('members/members.php') ?>">
          <a href="../members/members.php" class="menu-link">
            <div>Members</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('partner/partner.php') ?>">
          <a href="../partner/partner.php" class="menu-link">
            <div>Partner</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Example: College Menu -->
    <li class="menu-item <?= isMenuOpen(['features.php', 'programs.php', 'principal-desk.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div>College</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive('features/features.php') ?>">
          <a href="../features/features.php" class="menu-link">
            <div>Features</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('programs/programs.php') ?>">
          <a href="../programs/programs.php" class="menu-link">
            <div>Programs</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('principal_desk/principal-desk.php') ?>">
          <a href="../principal_desk/principal-desk.php" class="menu-link">
            <div>Principal desk</div>
          </a>
        </li>
      </ul>
    </li>


    <!-- Audit Report FY -->
    <li class="menu-item <?= isMenuOpen(['extension_approval.php', 'audit_report.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div>Audit Report FY</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive('extension_approval/extension_approval.php') ?>">
          <a href="../extension_approval/extension_approval.php" class="menu-link">
            <div>Extension Approval</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('audit_report/audit_report.php') ?>">
          <a href="../audit_report/audit_report.php" class="menu-link">
            <div>Audit Report</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Placement -->
    <li class="menu-item <?= isMenuOpen(['placement.php', 'placement-gallery.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div>Placement</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive('placement_data/placement.php') ?>">
          <a href="../placement_data/placement.php" class="menu-link">
            <div>Placement Data</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('placement_gallery/placement-gallery.php') ?>">
          <a href="../placement_gallery/placement-gallery.php" class="menu-link">
            <div>Placement Gallery</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Marquee -->

    <li class="menu-item <?= isActive('marque_home/home_marque.php') ?>">
      <a href="../marque_home/home_marque.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div>Marquee</div>
      </a>
    </li>

    <!-- contact  -->
    <li class="menu-item <?= isActive('contact_us/contact_us.php') ?>">
      <a href="../contact_us/contact_us.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div>Contact</div>
      </a>
    </li>


    <!-- Notice -->
    <li class="menu-item <?= isMenuOpen(['notice.php', 'academic_schedule.php', 'exam_timetable.php', 'college_timetable.php', 'committees.php', 'forms_to_download.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div>Notice</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive('notice/notice.php') ?>">
          <a href="../notice/notice.php" class="menu-link">
            <div>Notice</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('academic_schedule/academic_schedule.php') ?>">
          <a href="../academic_schedule/academic_schedule.php" class="menu-link">
            <div>Academic Schedule</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('exam_timetable/exam_timetable.php') ?>">
          <a href="../exam_timetable/exam_timetable.php" class="menu-link">
            <div>Exam Timetable</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('college_timetable/college_timetable.php') ?>">
          <a href="../college_timetable/college_timetable.php" class="menu-link">
            <div>College Timetable</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('committees/committees.php') ?>">
          <a href="../committees/committees.php" class="menu-link">
            <div>Committees</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('forms_to_download/forms_to_download.php') ?>">
          <a href="../forms_to_download/forms_to_download.php" class="menu-link">
            <div>Forms To Download</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Curriculum -->
    <li class="menu-item <?= isMenuOpen(['artificial_intelligence_and_machine_learning.php', 'civil_engineering.php', 'computer_engineering.php', 'electrical_engineering.php', 'electronics_and_telecommunication_engineering.php', 'mechanical_engineering.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div>Curriculum</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive('ai&ml/artificial_intelligence_and_machine_learning.php') ?>">
          <a href="../ai&ml/artificial_intelligence_and_machine_learning.php" class="menu-link">
            <div>AI & ML</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('civil_engineering/civil_engineering.php') ?>">
          <a href="../civil_engineering/civil_engineering.php" class="menu-link">
            <div>Civil Engineering</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('computer_engineering/computer_engineering.php') ?>">
          <a href="../computer_engineering/computer_engineering.php" class="menu-link">
            <div>Computer Engineering</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('electrical_engineering/electrical_engineering.php') ?>">
          <a href="../electrical_engineering/electrical_engineering.php" class="menu-link">
            <div>Electrical Engineering</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('electronics_and_telecommunication_engineering/electronics_and_telecommunication_engineering.php') ?>">
          <a href="../electronics_and_telecommunication_engineering/electronics_and_telecommunication_engineering.php" class="menu-link">
            <div>Electronics & Telecommunication Engineering</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('mechanical_engineering/mechanical_engineering.php') ?>">
          <a href="../mechanical_engineering/mechanical_engineering.php" class="menu-link">
            <div>Mechanical Engineering</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- News and Events -->
    <li class="menu-item <?= isMenuOpen(['news.php', 'events.php', 'news-media.php', 'award.php', 'photo.php', 'video.php']) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div>News and Events</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?= isActive('news/news.php') ?>">
          <a href="../news/news.php" class="menu-link">
            <div>News</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('events/events.php') ?>">
          <a href="../events/events.php" class="menu-link">
            <div>Events</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('news-media/news-media.php') ?>">
          <a href="../news-media/news-media.php" class="menu-link">
            <div>News Media</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('award-recognition/award.php') ?>">
          <a href="../award-recognition/award.php" class="menu-link">
            <div>Awards and Recognitions</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('photo-gallery/photo.php') ?>">
          <a href="../photo-gallery/photo.php" class="menu-link">
            <div>Photo Gallery</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('video-gallery/video.php') ?>">
          <a href="../video-gallery/video.php" class="menu-link">
            <div>Video Gallery</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Department -->
    <li class="menu-item <?= isMenuOpen([
                            'show_Department.php',
                            'show_Toppers.php',
                            'show_Student-Achivement.php',
                            'show_Department-Advisory.php',
                            'show_Program-Assessment.php',
                            'show_List-Laboratries.php',
                            'show_Our-Alumni.php',
                            "show_Department-Mou's.php"
                          ]) ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Department</div>
      </a>

      <ul class="menu-sub">
        <!-- Department -->
        <li class="menu-item <?= isActive('department/show_Department.php') ?>">
          <a href="../department/show_Department.php" class="menu-link">
            <div data-i18n="Without menu">Department</div>
          </a>
        </li>

        <!-- Toppers as submenu -->
        <li class="menu-item <?= isActive('/department/show_Toppers.php') ?>">
          <a href="../department/show_Toppers.php" class="menu-link">
            <div>Toppers</div>
          </a>
        </li>

        <!-- Student Achievement -->
        <li class="menu-item <?= isActive('department/show_Student-Achivement.php') ?>">
          <a href="../department/show_Student-Achivement.php" class="menu-link">
            <div data-i18n="Without menu">Student Achievement</div>
          </a>
        </li>

        <!-- DAB -->
        <li class="menu-item <?= isActive('department/show_Department-Advisory.php') ?>">
          <a href="../department/show_Department-Advisory.php" class="menu-link">
            <div data-i18n="Without navbar">Department Advisory Board (DAB)</div>
          </a>
        </li>

        <!-- Program Assessment -->
        <li class="menu-item <?= isActive('department/show_Program-Assessment.php') ?>">
          <a href="../department/show_Program-Assessment.php" class="menu-link">
            <div data-i18n="Without menu">Program Assessment</div>
          </a>
        </li>

        <!-- Labs -->
        <li class="menu-item <?= isActive('department/show_List-Laboratries.php') ?>">
          <a href="../department/show_List-Laboratries.php" class="menu-link">
            <div data-i18n="Container">List of Laboratories</div>
          </a>
        </li>

        <!-- Alumni -->
        <li class="menu-item <?= isActive('department/show_Our-Alumni.php') ?>">
          <a href="../department/show_Our-Alumni.php" class="menu-link">
            <div data-i18n="Fluid">Our Alumni</div>
          </a>
        </li>

        <!-- MOUs -->
        <li class="menu-item <?= isActive("department/show_Department-Mou's.php") ?>">
          <a href="../department/show_Department-Mou's.php" class="menu-link">
            <div data-i18n="Fluid">Department Mou's</div>
          </a>
        </li>
        <li class="menu-item <?= isActive('department/show_Faculty-Details.php') ?>">
        <a href="../department/show_Faculty-Details.php" class="menu-link">
            <div data-i18n="Fluid">Faculty Details</div>
        </a>
    </li>

    <!-- Student Association -->
    <li class="menu-item <?= isActive('department/show_Student-Association.php') ?>">
        <a href="../department/show_Student-Association.php" class="menu-link">
            <div data-i18n="Fluid">Student Association</div>
        </a>
    </li>

    <!-- Department Slider -->
    <li class="menu-item <?= isActive('department/show_Department-Slider.php') ?>">
        <a href="../department/show_Department-Slider.php" class="menu-link">
            <div data-i18n="Fluid">Department Slider</div>
        </a>
    </li>
      </ul>

    </li>


  </ul>
</aside>