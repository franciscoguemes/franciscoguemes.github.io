# TODO List

## High Priority

- [ ] **Optimize the website** - Pass GTmetrix performance test
  - Target: https://gtmetrix.com/reports/franciscoguemes.com/nBg4xNSC
  - Minimize HTML/JS/CSS
  - Separate HTML from CSS and JS into external files

- [ ] **Customize 404 error page** - Create custom 404.html for GitHub Pages
  - GitHub Pages serves 404.html automatically for not-found routes

## Medium Priority

- [ ] **Deployment automation** - Create GitHub Actions workflow for automatic deployment
  - Auto-deploy on push to master
  - Optional: Add build/minification step

- [ ] **Automated testing** - Set up basic website testing
  - HTML validation
  - Link checker
  - Responsive design tests

## Low Priority / Future Enhancements

- [ ] Add custom JavaScript file (currently all JS is inline)
- [ ] Add custom CSS file (currently using W3.CSS + inline styles)
- [ ] Performance optimization (image compression, lazy loading, etc.)

## Completed ✓

- [x] Convert from PHP to static HTML (Formspree integration)
- [x] Remove PHP backend dependencies
- [x] Reorganize assets directory structure (wfiles → assets)
- [x] Remove unused template files (originals directory)
- [x] Set up Claude Code configuration

## Notes

- Site URL: https://franciscoguemes.com/
- Templates: Dark Portfolio + CV from W3Schools
- Framework: W3.CSS
- Hosting: GitHub Pages
