# Claude Code Extended Configuration

## Lint & Format Hooks

### Pre-Accept Hook (validate before edits)
Run these checks before accepting any code changes:
```bash
prettier --check src/
eslint src/ --ext .js
```

### Post-Accept Hook (validation after edits)
After accepting changes, run:
```bash
prettier --write src/
eslint src/ --ext .js --fix
```

## Coding Standards for This Project

### HTML Guidelines
- Use semantic HTML5 tags
- Include proper ARIA labels for accessibility
- Follow W3.CSS class naming conventions
- Keep indentation consistent (2 spaces)

### CSS Guidelines
- Use W3.CSS utilities first, custom CSS as supplement
- Group related styles together
- Use CSS custom properties for repeated values
- Comment complex style logic

### JavaScript Guidelines
- Use vanilla JS (no frameworks)
- Prefix private functions with underscore: `_privateFunction()`
- Add comments for complex logic
- Test DOM manipulations for accessibility

## Specific Editing Rules

### When modifying index.html:
- Maintain navbar structure using W3.CSS patterns
- Keep section IDs consistent for anchor links
- Test mobile responsiveness at 600px viewport
- Preserve accessibility attributes

### When updating styles.css:
- Check for existing W3.CSS classes before adding new rules
- Follow the breakpoint system: 600px / 1079px / 1080px
- Update media queries if modifying layouts
- Document non-obvious CSS rules

### When adding JavaScript:
- Check for lint errors with ESLint
- Avoid global variables where possible
- Use event delegation for dynamic elements
- Add error handling for API calls

## Git Commit Guidelines

### Commit Message Format
- Write clear, concise commit messages describing the changes
- Use present tense ("Add feature" not "Added feature")
- Include bullet points for multiple changes
- DO NOT include "Co-Authored-By: Claude" or similar AI attribution
- DO NOT add any AI-generated footers or signatures

### Example Commit Message
```
Update languages section to use standardized CEFR levels

- Changed to professional CEFR standard
- Spanish: C2 - Native
- English: C2 - Proficient
- German: B2 - Upper Intermediate
```

## References
- W3.CSS Documentation: https://www.w3schools.com/w3css/
- W3.CSS Templates: https://www.w3schools.com/w3css/w3css_templates.asp
- Current References:
  - Dark Portfolio: https://www.w3schools.com/w3css/tryw3css_templates_dark_portfolio.htm
  - CV Template: https://www.w3schools.com/w3css/tryw3css_templates_cv.htm