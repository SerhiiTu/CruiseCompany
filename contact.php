<?php
  include("partipicals/header.php");
?>

  <main>
  <div class="row justify-content-center">
  <div class="col-10">
    <form id="contact-form" method="POST" action="data_check.php">
    <div class="form-group">
        <label for="name">Your name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Serhii" required>
    </div>
    <div class="form-group">
        <label for="email">Your email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
    </div>
    <div class="form-group">
        <label for="counrty">Your Country</label>
        <select class="form-control" id="country" name="country">
        <option>Slovakia</option>
        <option>Poland</option>
        <option>Czech Republic</option>
        <option>Ukraine</option>
        <option>USA</option>
        </select>
    </div>
    <div class="form-group">
        <label for="notes">Additional notes</label>
        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="true" id="accept" name="accept" required>
        <label class="form-check-label" for="accept">
            Accept to data processing
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
    </form>

  </div>
  </div>
  </main>

<?php
  include("partipicals/footer.php");
?>