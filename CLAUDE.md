# Francisco Guemes Portfolio Website

## Project Overview
Personal portfolio website built with W3.CSS framework hosted on GitHub Pages.

## Project Structure
- `index.html` - Main landing page
- `cv.html` - CV/Resume page
- `styles.css` - Custom CSS styles (extends W3.CSS)
- `scripts.js` - Client-side JavaScript
- `originals/` - Template reference files from W3.CSS
- W3.CSS framework for responsive design

## Key Technologies
- **Framework**: W3.CSS (responsive design library)
- **Markup**: HTML5
- **Styling**: CSS3 with W3.CSS utility classes
- **Scripting**: Vanilla JavaScript
- **Hosting**: GitHub Pages
- **Version Control**: Git

## Responsive Breakpoints
- Small screens (0-600px): `.w3-hide-small`
- Medium screens (601-1079px): `.w3-hide-medium`
- Large screens (1080px+): `.w3-hide-large`

## Build & Testing
- **Live Preview**: Live Server extension (VS Code)
- **Code Quality**: ESLint for JavaScript
- **Formatting**: Prettier for HTML/CSS/JS
- **Auto-refresh**: `browser-sync start --server --files *.html *.css *.js`

## Development Workflow
1. Create feature branch: `git checkout -b [name_of_your_new_branch]`
2. Make changes locally with Live Server preview
3. Push branch: `git push origin [name_of_your_new_branch]`
4. Create Pull Request on GitHub
5. Merge to main when satisfied

## Common Tasks for Claude Code
- **Update portfolio content**: Modify HTML sections with new projects/experience
- **Add responsive navigation**: Collapsible navbar using W3.CSS patterns
- **Implement navigation sidebar**: Using W3.CSS sidebar templates
- **Add contact form**: HTML form that integrates with desired backend
- **Refactor CSS**: Consolidate duplicate styles, optimize for performance
- **Add smooth scrolling**: JavaScript enhancements for UX
- **Template improvements**: Adapt Dark Portfolio or CV templates

## Before Accepting Changes
- Run `prettier --write [file]` on modified HTML/CSS/JS files
- Run `eslint [file]` on JavaScript files
- Visually verify with Live Server on desktop and mobile breakpoints
- Check against the custom breakpoints (1080px critical point)

## After Accepting Changes
- Test responsive design at 600px, 1079px, and 1080px breakpoints
- Validate HTML with W3 standards
- Ensure all links work correctly (internal and external)