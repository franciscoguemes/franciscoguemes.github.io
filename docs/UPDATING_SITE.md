# Updating the Portfolio Website

This guide explains how to update content on the portfolio website and how to change the CV portrait picture.

## Table of Contents
- [General Workflow](#general-workflow)
- [Updating the CV Portrait](#updating-the-cv-portrait)
- [Updating Page Content](#updating-page-content)
- [Testing Changes](#testing-changes)
- [Deploying Changes](#deploying-changes)

## General Workflow

All updates to the website should follow this workflow:

1. **Create a feature branch**
   ```bash
   git checkout -b [name_of_your_new_branch]
   ```

2. **Make your changes locally**
   - Edit HTML, CSS, or JavaScript files
   - Preview changes using Live Server in VS Code

3. **Test your changes**
   - Check responsive design at breakpoints: 600px, 1079px, and 1080px
   - Validate HTML with W3C standards
   - Ensure all links work correctly

4. **Commit your changes**
   ```bash
   git add [files]
   git commit -m "Description of changes"
   ```

5. **Push to GitHub**
   ```bash
   git push origin [name_of_your_new_branch]
   ```

6. **Create a Pull Request**
   - Go to GitHub repository
   - Create PR from your branch to `master`
   - Review changes and merge when satisfied

## Updating the CV Portrait

The website uses a **symbolic link system** for the CV portrait, making it easy to update the picture without modifying HTML code.

### Current Setup

- **Symbolic link**: `assets/images/cv/cv_portrait.png`
- **Current target**: `cv_portrait_zoomed-150x150.png`
- **Used in**: `index.html` (line 245)

### How to Change the Portrait

**Method 1: Replace the existing file (simplest)**

If your new picture has the same name:
```bash
# Just replace the file
cp /path/to/new/cv_portrait_zoomed-150x150.png assets/images/cv/
git add assets/images/cv/cv_portrait_zoomed-150x150.png
git commit -m "Update CV portrait"
```

**Method 2: Use a new filename (recommended for version control)**

If you want to use a different filename:
```bash
# Copy your new picture
cp /path/to/new/my_new_portrait.png assets/images/cv/

# Update the symbolic link to point to the new file
cd assets/images/cv/
ln -sf my_new_portrait.png cv_portrait.png

# Commit changes
git add cv_portrait.png my_new_portrait.png
git commit -m "Update CV portrait to new version"

# Optionally, delete the old picture file
git rm cv_portrait_zoomed-150x150.png
```

### Picture Requirements

- **Recommended size**: 150x150 pixels (or similar square ratio)
- **Format**: PNG (preferred) or JPG
- **Aspect ratio**: Square (1:1) works best with the current styling
- **File size**: Keep under 100KB for fast loading

### Technical Notes

The HTML code references the symbolic link:
```html
<img src="./assets/images/cv/cv_portrait.png" style="width:60%" class="w3-image w3-round w3-hover-grayscale" alt="Francisco Güemes">
```

This means you **never need to edit index.html** when updating the portrait. Just update what the symbolic link points to.

## Updating Page Content

### Main Portfolio Page (index.html)

**Header Section**
- Name and title: Lines around 180-190
- Social links: Lines around 200-220

**About Section**
- Personal description: Lines around 230-260
- Skills list: Lines around 270-300

**Portfolio Section**
- Project entries: Lines around 320-400
- Each project has title, description, and technologies

**Contact Section**
- Contact form: Lines around 450-480
- Uses Formspree (see [FORMSPREE_SETUP.md](FORMSPREE_SETUP.md))

### CV Page (cv.html)

**Work Experience**
- Located in the main column (right side)
- Each position has title, company, dates, and description

**Education**
- Below work experience
- Includes degrees, institutions, and dates

**Skills & Languages**
- Located in the left sidebar
- Technical skills and language proficiencies

## Testing Changes

### Local Testing

1. **Use Live Server** (VS Code extension)
   - Right-click on `index.html`
   - Select "Open with Live Server"
   - Changes auto-refresh in browser

2. **Alternative: Browser Sync**
   ```bash
   browser-sync start --server --files "*.html" "*.css" "*.js"
   ```

### Responsive Testing

Test at these critical breakpoints:
- **600px**: Mobile to tablet transition
- **1079px**: Tablet to desktop transition
- **1080px**: Desktop view

Use browser DevTools:
1. Press `F12` or `Ctrl+Shift+I`
2. Click device toolbar icon (or `Ctrl+Shift+M`)
3. Set custom dimensions to test breakpoints

### Code Quality

Before committing, run:
```bash
# Format code
prettier --write index.html cv.html styles.css scripts.js

# Check JavaScript
eslint scripts.js
```

## Deploying Changes

The site is hosted on **GitHub Pages** and deploys automatically from the `master` branch.

1. **Merge your PR to master**
   - Changes deploy automatically within 1-2 minutes

2. **Verify deployment**
   - Check https://franciscoguemes.github.io
   - Test all updated sections
   - Verify on mobile and desktop

3. **Rollback if needed**
   ```bash
   git revert [commit-hash]
   git push origin master
   ```

## Common Issues

### Picture Not Updating
- **Browser cache**: Hard refresh with `Ctrl+F5`
- **Symbolic link broken**: Verify with `ls -la assets/images/cv/`
- **File permissions**: Ensure file is readable `chmod 644 [file]`

### Styling Issues
- Check W3.CSS class names (case-sensitive)
- Verify custom CSS doesn't override W3.CSS
- Test in multiple browsers (Chrome, Firefox, Safari)

### Responsive Layout Broken
- Verify correct W3.CSS responsive classes:
  - `.w3-hide-small` - Hidden on screens < 601px
  - `.w3-hide-medium` - Hidden on screens 601-1079px
  - `.w3-hide-large` - Hidden on screens > 1079px

## Additional Resources

- [W3.CSS Documentation](https://www.w3schools.com/w3css/)
- [W3.CSS Templates](https://www.w3schools.com/w3css/w3css_templates.asp)
- [Project README](../README.md)
- [Claude Code Configuration](../.claude/CLAUDE.md)
- [Formspree Setup](FORMSPREE_SETUP.md)
