# Step-by-Step WordPress Child Theme Guide

This guide explains how to build a WordPress site safely in a child theme, move a static HTML design into WordPress templates, and load CSS, fonts, images, and JavaScript correctly.

The examples use this project:

- Parent theme: `blankslate`
- Child theme: `blankslate-child`
- Custom assets: `blankslate-child/assets/`
- Front-page template: `blankslate-child/front-page.php`

## 1. Why use a child theme?

A child theme keeps your custom design separate from the parent theme. You can update the parent without replacing your child theme's templates, styles, scripts, fonts, and images.

Do not edit the parent theme for custom design changes. Put custom PHP, CSS, JavaScript, and media in the child theme.

## 2. Create the child theme files

Create a folder under `wp-content/themes/`, alongside the parent theme:

```text
wp-content/themes/
  blankslate/
  blankslate-child/
    style.css
    functions.php
    header.php
    footer.php
    index.php
    front-page.php
    assets/
      css/
      fonts/
      img/
      js/
```

The `Template` value in the child theme's `style.css` must exactly match the parent theme's **folder name**, not merely its display name.

### `style.css` starter

```css
/*
Theme Name: BlankSlate Child
Description: Custom child theme for BlankSlate
Author: Your Name
Template: blankslate
Version: 1.0.0
Text Domain: blankslate-child
*/

/* Add child-theme overrides below. */
```

For this project, the parent folder is `blankslate`, so `Template: blankslate` is correct. The current child theme stylesheet has been corrected to describe BlankSlate as its parent.

## 3. Start `functions.php` with a safe child-theme pattern

Do not copy the parent theme's whole `functions.php` into the child theme. WordPress loads both files; copying functions with the same names can cause a fatal error such as `Cannot redeclare blankslate_setup()`.

Use uniquely named child functions. A basic guard prevents direct access to the PHP file:

```php
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
```

### Parent and child stylesheet loading

Check how the parent theme enqueues its styles before adding enqueue code. Avoid loading the same stylesheet twice.

In this BlankSlate project, the parent enqueues `get_stylesheet_uri()`, which resolves to the active child theme's `style.css`. The child `functions.php` additionally enqueues the parent `style.css` before that child stylesheet. If a different parent theme already loads both parent and child stylesheets correctly, do not add duplicate enqueue calls.

### Enqueue CSS, fonts, and JavaScript

Use WordPress's `wp_enqueue_scripts` action instead of putting stylesheet and script tags directly in a template. The following is the current child-theme setup in this project:

```php
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function blankslate_child_enqueue_parent_stylesheet() {
    $parent_theme = wp_get_theme()->parent();

    if ( ! $parent_theme ) {
        return;
    }

    wp_enqueue_style(
        'blankslate-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        $parent_theme->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'blankslate_child_enqueue_parent_stylesheet', 9 );

function blankslate_child_enqueue_site_assets() {
    $theme_uri = get_stylesheet_directory_uri();
    $version   = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'tattoo-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'tattoo-critical',
        $theme_uri . '/assets/css/tattoo-critical.css',
        array( 'tattoo-inter' ),
        $version
    );
    wp_enqueue_style(
        'tattoo-main',
        $theme_uri . '/assets/css/tattoo-main.css',
        array( 'tattoo-critical' ),
        $version
    );
    wp_enqueue_script(
        'tattoo-main',
        $theme_uri . '/assets/js/tattoo-main.js',
        array(),
        $version,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'blankslate_child_enqueue_site_assets', 21 );
```

Important details:

- `get_template_directory_uri()` points to the **parent** theme.
- `get_stylesheet_directory_uri()` points to the **active child** theme.
- A stylesheet dependency array determines load order. Here, Inter loads before `tattoo-critical.css`, then `tattoo-main.css`.
- The final `true` in `wp_enqueue_script()` puts `tattoo-main.js` in the footer.
- Keep `wp_footer()` in the page template so footer scripts can be printed.
- These custom assets are intentionally loaded site-wide, ready for pages and posts that use the custom design. If a script or stylesheet only applies to one template, conditionally enqueue it using checks such as `is_front_page()` or `is_singular()`.
- The local Oswald font is declared in `tattoo-critical.css` with a path relative to that CSS file: `../fonts/oswald-v57-latin-600.woff2`.
- Use `wp_get_theme()->get( 'Version' )` as the asset version during development. For automatic cache-busting on each file change, use `filemtime()` on the corresponding local file.

## 4. Organize custom assets

Keep custom assets in the child theme:

```text
assets/
  css/
    tattoo-critical.css
    tattoo-main.css
  fonts/
    oswald-v57-latin-600.woff2
  img/
    spinnerinktattoos-logo.png
    gallery/
    artist/
    icons/
  js/
    tattoo-main.js
```

This keeps customizations safe from parent-theme updates and makes file references predictable.

## 5. Convert static HTML into WordPress PHP

Use `assets/index.html` or another static HTML file as a design reference, then copy its page content into the matching WordPress template. Do not copy the whole static document without adapting it.

### Choose the correct template

- `front-page.php` is used for the site's front page.
- `header.php` contains the shared document head, navigation, and opening theme wrappers/main element.
- `footer.php` closes those wrappers, contains the shared footer for non-front-page templates, and prints the document closing hooks.
- `index.php` is the theme's basic fallback template and contains a minimal WordPress Loop.
- `page.php` is a general page template.
- `single.php` is a single blog post template.
- `archive.php` is used for archives such as categories and date listings.
- Shared layout belongs in `header.php`, `footer.php`, or template parts.

In WordPress admin, set the intended page as the homepage under **Settings → Reading**. WordPress then selects the front-page template when present.

For a site with many pages and blog posts, do not place all future page and blog content into `front-page.php`. Create reusable templates/parts or let WordPress render page and post content with the Loop.

### Use the shared header and footer

For regular templates, let WordPress include the shared files instead of repeating document markup:

```php
<?php get_header(); ?>

<!-- Template content goes inside the main element opened by header.php. -->
<?php get_footer(); ?>
```

In this child theme, `header.php` outputs the doctype, `<head>`, `wp_head()`, `<body>`, `wp_body_open()`, navigation, and opens the `#wrapper`, `#container`, and `<main id="content">` elements. `footer.php` closes the main and container elements for regular templates. The front-page template closes the main and container elements before its custom footer; do not close them a second time.

`footer.php` outputs the shared footer and mobile side menu on non-front-page templates, calls `wp_footer()`, and closes `body` and `html`. The front page keeps its more extensive, homepage-specific footer in `front-page.php`; `footer.php` suppresses the generic footer and menu there to prevent duplicates, but still closes the wrapper and document.

The homepage's detailed branded footer is intentionally page-specific and remains in `front-page.php`. If the same detailed footer should appear on every page, move that markup into `footer.php` and remove it from `front-page.php`.

Do not call `get_header()` inside a manually written `<head>`. Avoid hard-coded `<title>` tags if the theme supports `title-tag`; WordPress can generate the page title.

### Replace static asset paths

Static HTML references such as `img/photo.jpg` are relative to the current URL and often break on WordPress pages with nested paths. Build the child-theme URL and escape it:

```php
<?php
$image_uri = get_stylesheet_directory_uri() . '/assets/img/';
?>

<img src="<?php echo esc_url( $image_uri . 'spinnerinktattoos-logo.png' ); ?>"
     alt="Spinner Ink Tattoos">
```

For inline background images:

```php
<div style="background-image: url('<?php echo esc_url( $image_uri . 'banner-image.jpg' ); ?>')">
</div>
```

For CSS assets, remember that CSS `url()` paths are relative to the CSS file. From `assets/css/tattoo-critical.css`, `../fonts/font.woff2` resolves to `assets/fonts/font.woff2`.

### Replace static navigation links

Do not leave links such as `about.html` or `index.html` in WordPress templates. Link to WordPress pages or use site-aware URLs:

```php
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
```

For an existing page, use its permalink (for example, `get_permalink( $page_id )`) or a menu managed through **Appearance → Menus**. Use real page URLs instead of `#` placeholders when the page is ready.

### Escape dynamic output

Escape values when printing PHP into HTML:

- Use `esc_url()` for URLs.
- Use `esc_attr()` for HTML attributes.
- Use `esc_html()` for plain text.
- Use `wp_kses_post()` only when intentionally allowing safe post HTML.

Avoid inserting untrusted input directly into markup.

### Convert forms and dynamic content

A static HTML form does not automatically submit or store data in WordPress. Use a maintained forms plugin or implement a WordPress handler with validation, sanitization, nonce checks, and clear success/error messages.

For blog posts and editable page content, use the WordPress Loop or template parts rather than hard-coding post content into a static HTML template.

## 6. Load JavaScript through `functions.php`

Do not leave this static HTML line in a PHP template:

```html
<script src=".../assets/js/tattoo-main.js" defer></script>
```

Enqueue it from `functions.php`, as shown in the full code in Step 3, and keep `wp_footer()` in the template. The project now loads `tattoo-main.js` site-wide in the footer. Its navigation initialization checks whether the expected elements exist, so pages without that custom navigation can skip that behavior.

## 7. Check fonts and CSS

1. Make sure the font provider or `@font-face` declaration uses the same family name as the CSS.
2. Request every font weight used in CSS; otherwise the browser may synthesize a weight or use a fallback.
3. Check that every CSS custom property, such as `var(--font-body)`, is defined.
4. Verify local font paths relative to their stylesheet.
5. Inspect the browser's Network and Console panels for 404s, CORS errors, and CSS/JavaScript errors.

This project uses Inter from Google Fonts and local Oswald from `assets/fonts/`. The `tattoo-main.css` references to undefined `--font-family` and `--font-sub-title` were corrected to use the defined `--font-body` variable.

## 8. Activate and test

1. Confirm the parent theme is installed and the `Template` field exactly matches its directory name.
2. Activate the child theme under **Appearance → Themes**.
3. Confirm the homepage is assigned under **Settings → Reading**.
4. Preview the fallback template by viewing a route for which WordPress has no more-specific template.
5. Remember that the parent theme's `page.php`, `single.php`, or archive templates take priority over a child `index.php`. Copy a parent template into the child only when you intend to override it.
6. Check the front page, regular pages, a blog post, and an archive.
7. Confirm all images, fonts, stylesheets, and scripts load successfully.
8. Test navigation, mobile menu, forms, and responsive layouts.
9. Check PHP syntax and review the PHP error log if the site shows a critical error.
10. Clear any WordPress, plugin, server, or browser cache after changing assets.

## Common mistakes to avoid

- Editing the parent theme for custom work.
- Setting the wrong `Template` directory name in child `style.css`.
- Copying parent functions into the child and triggering duplicate function declarations.
- Using `get_template_directory_uri()` for child-theme assets.
- Leaving static `.html` paths in WordPress pages.
- Calling `get_header()` inside a manually written HTML `<head>`.
- Omitting `wp_head()`, `wp_body_open()`, or `wp_footer()`.
- Leaving script or stylesheet tags in templates after also enqueueing those files.
- Assuming static forms, navigation links, or blog content automatically become WordPress features.
