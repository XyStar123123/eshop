<?php 
require_once __DIR__ . '/../../backend/config/paths.php';

// Check for form submission
$showSuccess = false;
$showError = false;
$errorMessage = '';
$fileName = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $recipientRole = filter_input(INPUT_POST, 'recipient_role', FILTER_SANITIZE_STRING);
    
    // Handle file upload if exists
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
        $fileName = basename($_FILES['attachment']['name']);
    }
    
    // Basic validation
    if (empty($name) || empty($email) || empty($subject) || empty($message) || empty($recipientRole)) {
        $showError = true;
        $errorMessage = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $showError = true;
        $errorMessage = 'Please enter a valid email address.';
    } else {
        // Process the form (in a real application, you would send an email or save to database)
        $showSuccess = true;
        
        // Reset form on success
        if ($showSuccess) {
            $name = $email = $subject = $message = $recipientRole = '';
            $fileName = '';
        }
    }
}
?>

<div class="layout">
    <div class="left-side">
        <?php require_once __DIR__ . '/../../frontend/components/Sidebar.php' ?>
    </div>
    <div class="right-side">
        <header class="header">
            <?php require_once __DIR__ . '/../../frontend/components/Navbar.php' ?>
        </header>
        <main class="content">
            <div class="breadcrumb-container"></div>
            <div class="contact-container">
                <div class="contact-header">
                    <h1>Contact Support</h1>
                    <p>Need help? Contact our support team for assistance with any questions or issues you may have.</p>
                </div>

                <?php if ($showSuccess): ?>
                    <div class="alert alert-success">
                        <i class="bi bi-check-circle-fill"></i> Your message has been sent successfully. We'll get back to you soon!
                    </div>
                <?php endif; ?>

                <?php if ($showError): ?>
                    <div class="alert alert-error">
                        <i class="bi bi-exclamation-triangle-fill"></i> <?php echo htmlspecialchars($errorMessage); ?>
                    </div>
                <?php endif; ?>

                <div class="contact-grid">
                    <!-- Contact Form -->
                    <div class="contact-form-container">
                        <h2>Send Us a Message</h2>
                        <form method="POST" action="" class="contact-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" class="form-control" required 
                                       placeholder="Enter your full name"
                                       value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" required
                                       placeholder="your.email@example.com"
                                       value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="recipient_role">Contact Regarding</label>
                                <div class="select-wrapper">
                                    <select id="recipient_role" name="recipient_role" class="form-control" required>
                                        <option value="" disabled selected>Select a department</option>
                                        <option value="superadmin" <?php echo (isset($recipientRole) && $recipientRole === 'superadmin') ? 'selected' : ''; ?>>General Inquiry</option>
                                        <option value="it" <?php echo (isset($recipientRole) && $recipientRole === 'it') ? 'selected' : ''; ?>>Technical Support</option>
                                        <option value="developer" <?php echo (isset($recipientRole) && $recipientRole === 'developer') ? 'selected' : ''; ?>>Bug Report</option>
                                        <option value="data" <?php echo (isset($recipientRole) && $recipientRole === 'data') ? 'selected' : ''; ?>>Data Correction</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" required
                                       placeholder="What's this about?"
                                       value="<?php echo isset($subject) ? htmlspecialchars($subject) : ''; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea id="message" name="message" class="form-control" required 
                                          placeholder="Please describe your inquiry in detail..."><?php 
                                    echo isset($message) ? htmlspecialchars($message) : ''; 
                                ?></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Attachment (Optional)</label>
                                <div class="file-upload">
                                    <input type="file" id="attachment" name="attachment" class="file-upload-input" 
                                           accept=".pdf,.jpg,.jpeg,.png,.docx" 
                                           onchange="updateFileName(this)">
                                    <label for="attachment" class="file-upload-label">
                                        <i class="bi bi-paperclip"></i>
                                        <span class="file-upload-text" id="file-name">
                                            <?php echo !empty($fileName) ? htmlspecialchars($fileName) : 'Choose a file or drag it here'; ?>
                                        </span>
                                        <i class="bi bi-upload"></i>
                                    </label>
                                    <div class="file-upload-preview">
                                        Maximum file size: 5MB. Allowed types: PDF, JPG, PNG, DOCX
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn-submit">
                                <i class="bi bi-send"></i> Send Message
                            </button>
                        </form>
                    </div>
                    
                    <!-- Contact Information -->
                    <div class="contact-info">
                        <div class="contact-card">
                            <span class="role">Super Admin</span>
                            <h3><i class="bi bi-person-badge"></i> General Inquiries</h3>
                            <p>For account management, billing, and general questions.</p>
                            <p><i class="bi bi-envelope"></i> admin@eshop.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4567</p>
                            <p><i class="bi bi-clock"></i> Mon-Fri: 9:00 AM - 6:00 PM</p>
                        </div>
                        
                        <div class="contact-card">
                            <span class="role">IT Support</span>
                            <h3><i class="bi bi-headset"></i> Technical Support</h3>
                            <p>For technical issues, login problems, or system errors.</p>
                            <p><i class="bi bi-envelope"></i> support@eshop.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 987-6543</p>
                            <p><i class="bi bi-clock"></i> 24/7 Support Available</p>
                        </div>
                        
                        <div class="contact-card">
                            <span class="role">Development Team</span>
                            <h3><i class="bi bi-code-slash"></i> Bug Reports</h3>
                            <p>Found a bug? Let our development team know the details.</p>
                            <p><i class="bi bi-github"></i> github.com/eshop/panel/issues</p>
                            <p><i class="bi bi-bug"></i> Report critical issues directly to: dev@eshop.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once __DIR__ . '/../../frontend/components/Footer.php' ?>
    </div>
</div>

<!-- Include the contact page specific CSS -->
<link rel="stylesheet" href="/eshop/panel/frontend/assets/css/contact.css">

<!-- Include the contact form JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Update file name display
    window.updateFileName = function(input) {
        const fileName = input.files.length > 0 
            ? input.files[0].name 
            : 'Choose a file or drag it here';
        document.getElementById('file-name').textContent = fileName;
        
        // Add/remove active class for styling
        const label = input.parentElement.querySelector('.file-upload-label');
        if (input.files.length > 0) {
            label.classList.add('has-file');
        } else {
            label.classList.remove('has-file');
        }
    };
    
    // Add drag and drop functionality
    const fileUpload = document.querySelector('.file-upload');
    const fileInput = document.getElementById('attachment');
    const fileLabel = document.querySelector('.file-upload-label');
    
    if (fileUpload) {
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            fileUpload.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            fileUpload.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            fileUpload.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight() {
            fileLabel.classList.add('highlight');
        }
        
        function unhighlight() {
            fileLabel.classList.remove('highlight');
        }
        
        fileUpload.addEventListener('drop', handleDrop, false);
        
        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            fileInput.files = files;
            updateFileName(fileInput);
        }
    }
    
    // Form validation
    const form = document.querySelector('.contact-form');
    const maxFileSize = 5 * 1024 * 1024; // 5MB
    const allowedTypes = ['application/pdf', 'image/jpeg', 'image/png', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    
    if (form) {
        form.addEventListener('submit', function(e) {
            let isValid = true;
            
            // Reset previous errors
            document.querySelectorAll('.form-control').forEach(input => {
                input.classList.remove('error');
            });
            
            // Validate required fields
            const requiredFields = form.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                    isValid = false;
                }
            });
            
            // Validate email format
            const email = document.getElementById('email');
            if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
                email.classList.add('error');
                isValid = false;
            }
            
            // File validation if a file is selected
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                
                if (file.size > maxFileSize) {
                    showError('File size exceeds the 5MB limit.');
                    isValid = false;
                }
                
                if (!allowedTypes.includes(file.type)) {
                    showError('Invalid file type. Please upload a PDF, JPG, PNG, or DOCX file.');
                    isValid = false;
                }
            }
            
            if (!isValid) {
                e.preventDefault();
                if (!document.querySelector('.form-error')) {
                    showError('Please fill in all required fields correctly.');
                }
                return false;
            }
            
            // If validation passes, the form will submit
            return true;
        });
    }
    
    function showError(message) {
        // Remove any existing error messages
        const existingError = document.querySelector('.form-error');
        if (existingError) {
            existingError.remove();
        }
        
        // Create and show new error message
        const errorDiv = document.createElement('div');
        errorDiv.className = 'alert alert-error form-error';
        errorDiv.innerHTML = `<i class="bi bi-exclamation-triangle-fill"></i> ${message}`;
        
        const form = document.querySelector('.contact-form');
        if (form) {
            form.insertBefore(errorDiv, form.firstChild);
            
            // Scroll to error
            errorDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }
    
    // Add focus/blur effects to form controls
    const formControls = document.querySelectorAll('.form-control');
    formControls.forEach(control => {
        control.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        control.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
        
        // Add input event for real-time validation
        control.addEventListener('input', function() {
            this.classList.remove('error');
        });
    });
});
</script>