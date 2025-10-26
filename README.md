# Francisco Güemes - Personal Portfolio Website

Personal portfolio website showcasing my work as a Computer Science Engineer and Full Stack Developer.

🌐 **Live Site:** [franciscoguemes.com](https://franciscoguemes.com/)

## Overview

This is a static website built with W3.CSS framework and hosted on GitHub Pages. The site features a responsive design with sections for About Me, CV/Resume, and a contact form.

## Tech Stack

- **Framework:** [W3.CSS](https://www.w3schools.com/w3css/)
- **Markup:** HTML5
- **Styling:** CSS3 with W3.CSS utility classes
- **Icons:** Font Awesome 4.7
- **Forms:** [Formspree](https://formspree.io/) for contact form
- **Hosting:** GitHub Pages

## Project Structure

```
├── index.html              # Main landing page
├── assets/                 # Static assets
│   ├── css/               # Custom stylesheets
│   └── images/            # Images (icons, photos, cv)
├── docs/                   # Project documentation
│   └── FORMSPREE_SETUP.md # Formspree integration guide
├── CLAUDE.md              # Project overview for AI assistance
├── .claude/               # Claude Code configuration
├── TODO.md                # Task tracking
└── README.md              # This file
```

## Design & Templates

This site is based on W3.CSS templates:

### Primary Templates
- **Dark Portfolio** - Main design inspiration
  - [Live Demo](https://www.w3schools.com/w3css/tryw3css_templates_dark_portfolio.htm)
  - [Source Code](https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_dark_portfolio&stacked=h)

- **CV Template** - Resume section
  - [Live Demo](https://www.w3schools.com/w3css/tryw3css_templates_cv.htm)
  - [Source Code](https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_cv&stacked=h)

### Additional Template References
- [Black & White Portfolio](https://www.w3schools.com/w3css/tryw3css_templates_bw_portfolio.htm)
- [Nature Portfolio](https://www.w3schools.com/w3css/tryw3css_templates_portfolio.htm)
- [People Portfolio](https://www.w3schools.com/w3css/tryw3css_templates_portfolio2.htm) - Contact section reference
- [All W3.CSS Templates](https://www.w3schools.com/w3css/w3css_templates.asp)

## Responsive Design

### W3.CSS Standard Breakpoints
```
0 - 600px     : Small screens   (.w3-hide-small)
601 - 992px   : Medium screens  (.w3-hide-medium)
993px+        : Large screens   (.w3-hide-large)
```

### Custom Breakpoints (This Project)
```
0 - 600px     : Small screens   (.w3-hide-small)
601 - 1079px  : Medium screens  (.w3-hide-medium)
1080px+       : Large screens   (.w3-hide-large)
```

**Note:** The 1080px breakpoint was chosen to ensure the CV section displays properly.

## Development

### Prerequisites
- Git
- Modern web browser
- (Optional) [Browser-sync](https://www.browsersync.io/) for live reload

### Local Development

1. **Clone the repository**
   ```bash
   git clone https://github.com/franciscoguemes/franciscoguemes.github.io.git
   cd franciscoguemes.github.io
   ```

2. **Open in browser**
   - Simply open `index.html` in your browser
   - Or use a local server for better development experience

3. **Live reload with Browser-sync** (optional)
   ```bash
   browser-sync start --server --files "*.html" "assets/css/*.css" "*.js"
   ```

### Git Workflow

```bash
# List all branches
git branch -a

# Update master branch
git pull origin master

# Create and switch to new branch
git checkout -b feature/your-feature-name

# Push new branch to remote
git push origin feature/your-feature-name
```

## Contact Form Setup

The contact form uses Formspree for backend processing. See [docs/FORMSPREE_SETUP.md](docs/FORMSPREE_SETUP.md) for detailed setup instructions.

## Useful Resources

### W3.CSS Components
- [Navigation Bar with Collapse](https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_hide)
- [Sidebar](https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_over)
- [W3.CSS Reference](https://www.w3schools.com/w3css/default.asp)

### Font Awesome
- [Font Awesome 4.7 Icons](https://fontawesome.com/v4.7.0/icons/)

## Contributing

This is a personal portfolio website. However, if you find bugs or have suggestions, feel free to open an issue.

## License

© 2025 Francisco Güemes. All rights reserved.

---

**Built with** ❤️ **using W3.CSS**
