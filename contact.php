<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>

<main id="primary" class="site-main flex flex-column gap-xl pt-32">

    <!-- Contact Hero Section -->
    <section class="container px-container mt-md">
        <div class="contact-hero text-center flex flex-column justify-center items-center">
            <h1 class="font-heading text-white" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500;">
                Contact Support
            </h1>
        </div>
    </section>

    <!-- Contact Content Section -->
    <section class="container px-container contact-section">
        <div class="contact-grid">
            
            <!-- Left Column -->
            <div class="contact-info flex flex-column">
                <div class="mb-lg">
                    <div class="contact-badge mb-sm">
                        <span class="contact-badge-dot"></span>
                        GET IN TOUCH
                    </div>
                    <h2 class="font-heading cta-title" style="color: var(--color-text-dark); margin-bottom: 1rem;">
                        Get in touch with us
                    </h2>
                    <p class="contact-subtitle ">
                        Submit your question through the form on the right,<br>or send us an email to:
                    </p>
                </div>

                <!-- Email Card -->
                <div class="email-card flex items-center gap-sm mt-lg">
                    <div class="contact-email-icon flex justify-center items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div>
                        <div class="contact-email-title">Email</div>
                        <a href="mailto:contact@trusthabit.com" class="contact-email-link">contact@trusthabit.com</a>
                    </div>
                </div>
            </div>

            <!-- Right Column (Form) -->
            <div class="contact-form-wrapper">
                <h3 class="font-heading contact-form-title">
                    Send us a message
                </h3>
                
                <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                    <div class="msg-success">
                        Your message has been sent successfully. We will be in touch soon!
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['error'])) : ?>
                    <div class="msg-error">
                        There was an error sending your message. Please try again.
                    </div>
                <?php endif; ?>

                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" enctype="multipart/form-data" class="contact-form flex flex-column gap-sm">
                    <input type="hidden" name="action" value="submit_contact_form">
                    <?php wp_nonce_field( 'contact_form_nonce', 'contact_nonce' ); ?>

                    <!-- Name Row -->
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" name="first_name" placeholder="First Name" required class="form-input">
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" placeholder="Last Name" required class="form-input">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your email address*" required class="form-input">
                    </div>

                    <!-- Subject -->
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject*" required class="form-input">
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <textarea name="description" placeholder="Description*" rows="5" required class="form-input"></textarea>
                    </div>

                    <!-- Requester Country -->
                    <div class="form-group">
                        <input type="text" name="country" placeholder="Requester Country*" required class="form-input">
                    </div>

                    <!-- Attachments -->
                    <div class="form-group file-upload-group flex items-center justify-between form-input">
                        <span class="file-label-text">Attachments (Optional)</span>
                        <label for="attachment" class="file-upload-btn">
                            <span>Add File</span>
                            <span class="file-upload-hint">or drop files here</span>
                        </label>
                        <input type="file" id="attachment" name="attachment" class="hidden-file-input" style="display: none;">
                    </div>
                    <div id="file-name-display" class="file-name-display"></div>

                    <!-- Honeypot for Spam Protection -->
                    <div style="display: none; position: absolute; left: -9999px;" aria-hidden="true">
                        <label for="user_website">Website</label>
                        <input type="text" name="user_website" id="user_website" autocomplete="off" tabindex="-1">
                    </div>

                    <!-- Submit -->
                    <div class="form-submit mt-sm">
                        <button type="submit" class="btn btn-primary bg-primary text-white font-medium rounded-sm btn-submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('attachment');
    const fileNameDisplay = document.getElementById('file-name-display');
    
    if (fileInput && fileNameDisplay) {
        fileInput.addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                fileNameDisplay.textContent = 'Selected: ' + this.files[0].name;
                fileNameDisplay.style.display = 'block';
            } else {
                fileNameDisplay.style.display = 'none';
            }
        });
    }
});
</script>

<?php get_footer(); ?>
