# Bare-bones FSE Starter Theme

A theme that turns off every block-related feature that WordPress enables by default. It provides a clean slate, and has been created with client projects in mind.

The starter theme can be used to build block themes, as well as hybrid themes.

## To Get Started

- Download the ZIP from Github.
- Unzip the files into your empty theme directory.
- Search-replace bbfs_ with your own theme function prefix.
- Search-replace bbfs- with your own theme prefix.
- Activate the theme.
- Start building!

## Features

### Blocks

- Only show allowed blocks in the inserter. Defaults to all WordPress 6.0 Core blocks.

### Patterns

- Disable loading of patterns from the WordPress.org Pattern Directory.
- Disable loading of WordPress Core patterns.

### Styles and Scripts

- Enables improved block style loading.
- Enqueues the main stylesheet on the frontend, and in the editor.

### Templates & Template Parts

- Contains a header and footer template part.
- Contains an index.html with the main archive, as well as the header and footer.
- Contains a 404 template (which is often forgotten in block themes)

### Theme.json

- Includes schema support for WordPress 6.1.
- Disables all available block settings.

## Ressources

- If you are unsure about the difference between a block and a hybrid theme, please watch [Full-Site Editing Themes Explained: Classic, Hybrid, and Block](https://youtu.be/tsCT-18Udpw).
- If you are not familiar with using `theme.json`, please check out the [free Theme.json Explained course](https://wpdevelopment.courses/lp/theme-json-explained/).
- If you are interested in a weekly email with Full-Site Editing tips, strategies, and case studies, please [subscribe to my newsletter](https://wpdevelopment.courses/lp/newsletter/). You can see the past issues [in the archive](https://wpdevelopmentcourses.ck.page/posts).
