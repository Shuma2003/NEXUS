
<?php
include '../include/header.php';
include '../include/profile.php';
?>

<main>
  <div class="container">
    <div class="profile-header">
      <img src="<?php echo $profileData['avatar']; ?>" alt="Аватар" class="avatar">
      <div class="profile-info">
        <h1><?php echo $profileData['name']; ?></h1>
        <p class="status"><?php echo $profileData['status']; ?></p>
        <div class="counters">
            <span><?php echo $profileData['followers']; ?> подписчиков</span>
           <span><?php echo $profileData['friends']; ?> друзей</span>
        </div>
      </div>
    </div>

    <div class="content-wrapper">
     <div class="sidebar">
       <h3>Информация</h3>
       <ul class="info-list">
           <li><label>Город:</label><span> <?php echo $profileData['city']; ?></span></li>
           <li><label>Дата рождения:</label><span> <?php echo $profileData['birthdate']; ?></span></li>
            <li><label>Место работы:</label><span> <?php echo $profileData['job']; ?></span></li>
          </ul>
     </div>
     <div class="wall">
         <h2>Стена</h2>
          <div class="post">
           <h3>Пост 1</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <span class="post-date">2024-07-26 10:00</span>
          </div>
           <div class="post">
           <h3>Пост 2</h3>
           <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <span class="post-date">2024-07-26 15:00</span>
           </div>
     </div>
   </div>
  </div>
</main>


    <script src="../js/dasboard.js"></script>
</body>
</html>
