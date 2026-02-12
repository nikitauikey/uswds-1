<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Contact Us - RFPMart + USWDS</title>

  <meta name="description"
    content="Submit questions or requests using this responsive USWDS contact form template." />

  <!-- Global Head Include -->
  <?php require_once '1_head.php'; ?>
</head>

<body>

  <!-- Navigation Include -->
  <?php require_once '2_nav.php'; ?>

  <main id="main-content">

    <!-- Light Background Wrapper -->
    <div class="bg-base-lightest">

      <section class="usa-section">
        <div class="grid-container">

          <!-- Centered Responsive Layout -->
          <div class="grid-row flex-justify-center">

            <!-- Responsive Form Column -->
            <div class="grid-col-12 tablet:grid-col-9 desktop:grid-col-7">

              <!-- Contact Form Card -->
              <div class="bg-white padding-4 border border-base-lighter radius-lg shadow-2">

                <!-- Breadcrumb -->
                <nav class="usa-breadcrumb bg-transparent margin-bottom-3"
                  aria-label="Breadcrumbs">

                  <ol class="usa-breadcrumb__list">

                    <li class="usa-breadcrumb__list-item">
                      <a href="./" class="usa-breadcrumb__link">
                        Home
                      </a>
                    </li>

                    <li class="usa-breadcrumb__list-item usa-current"
                      aria-current="page">
                      Contact
                    </li>

                  </ol>
                </nav>

                <!-- Page Title -->
                <h1 class="usa-heading-xl margin-top-0">
                  Contact Us
                </h1>

                <!-- Intro Text -->
                <p class="usa-intro">
                  Please complete the form below and our team will respond within
                  <strong>48 business hours</strong>.
                </p>

                <!-- USWDS Contact Form -->
                <form class="usa-form usa-form--large maxw-full">

                  <fieldset class="usa-fieldset">

                    <!-- First Name -->
                    <label class="usa-label" for="first-name">
                      First Name <span class="text-red">*</span>
                    </label>
                    <input class="usa-input"
                      id="first-name"
                      name="first-name"
                      type="text"
                      required />

                    <!-- Last Name -->
                    <label class="usa-label" for="last-name">
                      Last Name <span class="text-red">*</span>
                    </label>
                    <input class="usa-input"
                      id="last-name"
                      name="last-name"
                      type="text"
                      required />

                    <!-- Email -->
                    <label class="usa-label" for="email">
                      Email Address <span class="text-red">*</span>
                    </label>
                    <input class="usa-input"
                      id="email"
                      name="email"
                      type="email"
                      required />

                    <!-- Subject -->
                    <label class="usa-label" for="subject">
                      Subject <span class="text-red">*</span>
                    </label>
                    <input class="usa-input"
                      id="subject"
                      name="subject"
                      type="text"
                      required />

                    <!-- Message -->
                    <label class="usa-label" for="message">
                      Inquiry / Message <span class="text-red">*</span>
                    </label>
                    <textarea class="usa-textarea"
                      id="message"
                      name="message"
                      rows="5"
                      required></textarea>

                    <!-- Submit Button -->
                    <button class="usa-button margin-top-3" type="submit">
                      Submit Message
                    </button>

                  </fieldset>

                </form>

              </div>
              <!-- End Contact Card -->

            </div>
          </div>

        </div>
      </section>

    </div>

  </main>

  <!-- Popular Services Section -->
  <?php require_once 'utility-popular-services.php'; ?>

  <!-- Footer Include -->
  <?php require_once '9_footer.php'; ?>

  <!-- USWDS JavaScript -->
  <script src="uswds/dist/js/uswds.min.js"></script>

</body>

</html>
