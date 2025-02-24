<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/applyform.css')); ?>">
</head>
<body>
    <div class="mx-auto container">
        <h3>Jobshub - Driver Application Form</h3>
        <!-- Progress Form -->
        <form id="progress-form" class="p-4 progress-form" action="" lang="en" novalidate>

          <!-- Step Navigation -->
          <div class="d-flex align-items-start mb-3 sm:mb-5 progress-form__tabs" role="tablist">
            <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-1" aria-selected="true">
              <span class="d-block step" aria-hidden="true">Step 1 <span class="sm:d-none">of 3</span></span>
              Applicant Details
            </button>
            <button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1" aria-disabled="true">
              <span class="d-block step" aria-hidden="true">Step 2 <span class="sm:d-none">of 3</span></span>
              Test Series one
            </button>
            <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1" aria-disabled="true">
              <span class="d-block step" aria-hidden="true">Step 3 <span class="sm:d-none">of 3</span></span>
              Survey
            </button>
          </div>
          <!-- / End Step Navigation -->

          <!-- Step 1 -->
          <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0">
            <div class="sm:d-grid sm:grid-col-2 sm:mt-3">
              <div class="mt-3 sm:mt-0 form__field">
                <label for="first-name">
                  First name
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="first-name" type="text" name="first-name" autocomplete="given-name" required>
              </div>

              <div class="mt-3 sm:mt-0 form__field">
                <label for="last-name">
                  Last name
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="last-name" type="text" name="last-name" autocomplete="family-name" required>
              </div>
            </div>

            <div class="mt-3 form__field">
              <label for="email-address">
                Email address
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <input id="email-address" type="email" name="email-address" autocomplete="email" inputmode="email" required>
            </div>

            <div class="mt-1 form__field">
              <label class="form__choice-wrapper">
                <input id="email-newsletter" type="checkbox" name="email-newsletter" value="Yes" checked>
                <span>Yes, I would like to sign up to receive the newsletter</span>
              </label>
            </div>

           

            <div class="mt-3 form__field">
              <label for="phone-number">
                Phone number (optional)
              </label>
              <input id="phone-number" type="tel" name="phone-number" autocomplete="tel" inputmode="tel">
            </div>

            <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
              <button type="button" data-action="next">
                Continue
              </button>
            </div>
          </section>
          <!-- / End Step 1 -->

          <!-- Step 2 -->
          <section id="progress-form__panel-2" role="tabpanel" aria-labelledby="progress-form__tab-2" tabindex="0" hidden>
            <div class="mt-3 form__field">
              <label for="address">
                Address
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <input id="address" type="text" name="address" autocomplete="shipping address-line1" required>
            </div>

            <div class="mt-3 form__field">
              <label for="address-2">
                Apartment or suite (optional)
              </label>
              <input id="address-2" type="text" name="address-2" autocomplete="shipping address-line2">
            </div>

            <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
              <div class="mt-3 sm:mt-0 form__field">
                <label for="address-city">
                  City
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="address-city" type="text" name="address-city" autocomplete="shipping address-level2" required>
              </div>

              <div class="mt-3 sm:mt-0 form__field">
                <label for="address-state">
                  State
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <select id="address-state" name="address-state" autocomplete="shipping address-level1" required>
                  <option value="" disabled selected>Please select</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AK">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="DC">Washington DC</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>

              <div class="mt-3 sm:mt-0 form__field">
                <label for="address-zip">
                  Postal code
                  <span data-required="true" aria-hidden="true"></span>
                </label>
                <input id="address-zip" type="text" name="address-zip" autocomplete="shipping postal-code" inputmode="numeric" required>
              </div>
            </div>

            <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
              <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
                Back
              </button>
              <button type="button" data-action="next">
                Continue
              </button>
            </div>
          </section>
          <!-- / End Step 2 -->

          <!-- Step 3 -->
          <section id="progress-form__panel-3" role="tabpanel" aria-labelledby="progress-form__tab-3" tabindex="0" hidden>
            <div class="mt-3 form__field">
              <label for="product-satisfaction">
                How would you rate your level of satisfaction with the service you received?
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <select id="product-satisfaction" name="product-satisfaction" required>
                <option value="" disabled selected>Please select</option>
                <option value="Highly satisfied">Highly satisfied</option>
                <option value="Very satisfied">Very satisfied</option>
                <option value="Satisfied">Satisfied</option>
                <option value="Very dissatisfied">Very dissatisfied</option>
                <option value="Highly dissatisfied">Highly dissatisfied</option>
              </select>
            </div>
            <div class="mt-3 form__field">
              <label for="product-recommendation">
                How likely are you to recommend our products to friends or family?
                <span data-required="true" aria-hidden="true"></span>
              </label>
              <select id="product-recommendation" name="product-recommendation" required>
                <option value="" disabled selected>Please select</option>
                <option value="Highly likely">Highly likely</option>
                <option value="Very likely">Very likely</option>
                <option value="Likely">Satisfied</option>
                <option value="Very unlikely">Very unlikely</option>
                <option value="Highly unlikely">Highly unlikely</option>
              </select>
            </div>

            <fieldset id="product-purchase" class="mt-3 form__field">
              <legend>
                Which of the following products have you purchased in the past 6 months? Please check all that apply.
              </legend>
              <label class="form__choice-wrapper">
                <input type="checkbox" name="product-purchase" value="A">
                <span>Product A</span>
              </label>
              <label class="form__choice-wrapper">
                <input type="checkbox" name="product-purchase" value="B">
                <span>Product B</span>
              </label>
              <label class="form__choice-wrapper">
                <input type="checkbox" name="product-purchase" value="C">
                <span>Product C</span>
              </label>
            </fieldset>

            <div class="mt-3 form__field">
              <label for="product-feedback">
                Do you have any additional feedback or comments about our products?
              </label>
              <textarea id="product-feedback" name="product-feedback" rows="5"></textarea>
            </div>

            <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
              <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
                Back
              </button>
              <button type="submit">
                Submit
              </button>
            </div>
          </section>
          <!-- / End Step 3 -->

          <!-- Thank You -->
          <section id="progress-form__thank-you" hidden>
            <p>Thank you for your submission!</p>
            <p>We appreciate you contacting us. One of our team members will get back to you very&nbsp;soon.</p>
          </section>
          <!-- / End Thank You -->

        </form>
        <!-- / End Progress Form -->

      </div>
      <script src="<?php echo e(asset('assets/js/applyform.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\E COM BUYER\OneDrive\Documents\GitHub\JobsHubV2\resources\views\users\applyjob.blade.php ENDPATH**/ ?>