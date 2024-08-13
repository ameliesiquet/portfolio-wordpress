<?php
$errors = $_SESSION['form_errors'] ?? [];
unset($_SESSION['form_errors']);
?>

<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="contact__formulaire">
    <input type="hidden" name="action" value="contact_form">
    <fieldset>
        <legend class="visually-hidden">Contact form</legend>
        <div class="contact__form__firstname">
            <label for="firstname" data-type="required">Name</label>
            <input type="text" name="firstname" id="firstname" placeholder="Your firstname" autocomplete="name"
                   required>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['nom'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <div class="contact__form__name">
            <label for="name" data-type="required">Lastname</label>
            <input type="text" name="name" id="name" placeholder="Your lastname" autocomplete="family-name"
                   required>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['prenom'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <div class="contact__form__email">
            <label for="email" data-type="required">Email</label>
            <input type="email" name="email" id="email" placeholder="Your email" autocomplete="email"
                   required>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['email'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <div class="contact__form__subject">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Project,...">
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['subject'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <div class="contact__form__message">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="40" rows="3"
                      placeholder="I have a project,..."></textarea>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['message'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <button type="submit" class="contact__form__button">send</button>
</form>

