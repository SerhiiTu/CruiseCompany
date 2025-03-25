<?php
  include("partipicals/header.php");
?>

  <main>
  <div class="row justify-content-center">
  <div class="col-10">

    <h2 class="text-center">Your data:</h2>
    <?php
        print_form_data();
    ?>
    <div class="col-12 text-center">
      <a href="contact.php"><button type="button" class="btn btn-secondary">Change data</button></a>
      <a href="index.php"><button type="button" class="btn btn-success">Continue</button></a>
    </div>

  </div>
  </div>
  </main>

<?php
  include("partipicals/footer.php");
?>