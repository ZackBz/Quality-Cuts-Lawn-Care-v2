<!-- Start Form -->
<div class="container">
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Request an Estimate:</h1>
    </div>
    <form class="mx-auto" action="/contact" method="post">
        @csrf
        <!-- NAME -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="input" name="name" class="form-control" placeholder="Enter name" required>
        </div>

        <!-- Phone Number -->
        <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input class="form-control" name="phone" type="tel" pattern="^\d{3}[- ]?\d{3}[- ]?\d{4}$" placeholder="Enter Phone Number" required oninvalid="this.setCustomValidity('Phone format should be 123-123-1234')"
            oninput="setCustomValidity('')">
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
        </div>

        <!-- Address -->
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="input" name="address" class="form-control" placeholder="Enter address" required>
        </div>

        <!-- Property -->
        <div class="form-check form-check-inline">
          <label class="form-check-label mr-3" for="residentialRadio">
              <input class="form-check-input" id="residentialRadio" type="radio" name="property" value="residential" required>Residential
          </label>

          <label class="form-check-label" for="commercialRadio">
              <input class="form-check-input" id="commercialRadio" type="radio" name="property" value="commercial" required>Commercial
          </label>
        </div>

        <!-- Message -->
        <div class="form-group">
      <label for="textarea">Message:</label>
      <textarea class="form-control" placeholder="Enter Message:" rows="3"  name="message" required></textarea>
    </div>

    <!-- Button -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

</div>
