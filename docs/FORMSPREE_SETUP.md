# Formspree Setup Instructions

## What is Formspree?
Formspree is a free form backend service that allows you to receive form submissions via email without needing a PHP backend or server-side code. It's perfect for static sites hosted on GitHub Pages.

## Setup Steps

### 1. Create a Formspree Account
1. Go to [https://formspree.io/](https://formspree.io/)
2. Click "Get Started" or "Sign Up"
3. Create a free account (you can sign up with GitHub, Google, or email)

### 2. Create a New Form
1. Once logged in, click "New Project" or "+" to create a new form
2. Give your form a name (e.g., "Portfolio Contact Form")
3. Formspree will generate a unique form ID for you

### 3. Get Your Form Endpoint
1. After creating the form, you'll see your form endpoint URL
2. It will look like: `https://formspree.io/f/YOUR_FORM_ID`
3. Copy this URL

### 4. Update Your Website
1. Open `index.html` in your text editor
2. Find the contact form section (around line 454)
3. Replace `YOUR_FORM_ID` in the form action with your actual Form ID:
   ```html
   <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
   ```
4. Save the file

### 5. Deploy and Test
1. Commit and push your changes to GitHub
2. Wait a few moments for GitHub Pages to rebuild your site
3. Visit your website and navigate to the contact form
4. Submit a test message
5. On first submission, Formspree will ask you to confirm your email address
6. After confirmation, you'll receive all form submissions via email

## Features

### Included with Free Plan
- ✅ 50 submissions per month
- ✅ Spam filtering (no need for reCAPTCHA!)
- ✅ Email notifications
- ✅ File uploads
- ✅ AJAX submissions
- ✅ Archive of submissions in dashboard

### Optional: Custom "Thank You" Page
You can redirect users to a custom page after submission by adding a hidden input:

```html
<input type="hidden" name="_next" value="https://franciscoguemes.com/thank-you.html">
```

### Optional: Custom Email Subject
You can customize the email subject by adding a hidden input:

```html
<input type="hidden" name="_subject" value="New contact form submission!">
```

### Optional: Disable reCAPTCHA
Formspree has built-in spam filtering, but if you want extra protection:

```html
<input type="text" name="_gotcha" style="display:none">
```

## Troubleshooting

### Form not working?
1. Make sure you've replaced `YOUR_FORM_ID` with your actual Form ID
2. Check that your email is confirmed in Formspree
3. Check your spam folder for Formspree emails
4. Verify the form endpoint URL is correct

### Not receiving emails?
1. Log into your Formspree dashboard to see if submissions are being received
2. Check your email notification settings in Formspree
3. Verify your email address in Formspree settings

## Alternative Services

If you need more than 50 submissions per month, consider:
- **EmailJS** - [https://www.emailjs.com/](https://www.emailjs.com/)
- **GetForm** - [https://getform.io/](https://getform.io/)
- **Basin** - [https://usebasin.com/](https://usebasin.com/)
- **Formcarry** - [https://formcarry.com/](https://formcarry.com/)

## More Information
- Formspree Documentation: [https://help.formspree.io/](https://help.formspree.io/)
- Formspree Features: [https://formspree.io/features](https://formspree.io/features)
