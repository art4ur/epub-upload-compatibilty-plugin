# Epub Upload Compatibilty Plugin

Contributors: Premazon Inc  
Tags: epub, uploads, media library, woocommerce, ebook  
Requires at least: 6.0  
Tested up to: 6.8  
Requires PHP: 7.4  
Stable tag: 1.0.0  
License: GPLv2 or later  
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds EPUB file upload support to the WordPress Media Library for use with WooCommerce downloadable products and other WordPress content.

## Description

Epub Upload Compatibilty Plugin enables WordPress to accept `.epub` files through the Media Library.

By default, WordPress may reject EPUB files because the EPUB format is not included in the standard list of permitted upload types. Additionally, because EPUB files are ZIP-based containers, some hosting environments may identify them as ZIP files rather than EPUB files during MIME type validation.

This plugin adds the official EPUB MIME type:

`application/epub+zip`

It also provides compatibility handling for WordPress file type detection so valid `.epub` files can be uploaded through the Media Library.

The plugin is particularly useful for WooCommerce stores selling ebooks as downloadable products.

## Features

* Enables `.epub` uploads in the WordPress Media Library.
* Registers the official `application/epub+zip` MIME type.
* Handles WordPress MIME type validation for EPUB files.
* Works with WooCommerce downloadable products.
* Does not enable unrestricted file uploads.
* No settings or configuration required.
* No theme modifications required.

## Installation

1. Download the plugin ZIP file.
2. Log in to the WordPress admin dashboard.
3. Navigate to **Plugins → Add New Plugin**.
4. Click **Upload Plugin**.
5. Select the plugin ZIP file.
6. Click **Install Now**.
7. Activate **Epub Upload Compatibilty Plugin**.

Once activated, `.epub` files can be uploaded through the WordPress Media Library.

## WooCommerce Usage

To attach an EPUB file to a WooCommerce downloadable product:

1. Create or edit a WooCommerce product.
2. Enable the **Downloadable** option under Product Data.
3. Locate the **Downloadable files** section.
4. Click **Choose file**.
5. Upload or select your `.epub` file from the Media Library.
6. Save or update the product.

WooCommerce will then deliver the EPUB file according to the store's configured downloadable product settings.

## Frequently Asked Questions

### Does this plugin enable all file types?

No. The plugin only adds support for `.epub` files. It does not enable WordPress's unrestricted upload functionality.

### Why does WordPress normally reject EPUB files?

WordPress restricts Media Library uploads to approved file extensions and MIME types for security reasons.

EPUB files can also present an additional compatibility issue because the EPUB format is based on ZIP. Depending on the server configuration, an EPUB may initially be detected as a ZIP file rather than `application/epub+zip`.

This plugin handles the WordPress MIME type checks necessary to recognize `.epub` files correctly.

### Does this plugin require WooCommerce?

No. WooCommerce is not required.

The plugin enables EPUB uploads at the WordPress Media Library level, so EPUB files can be used anywhere WordPress supports Media Library attachments.

### Does it work with WooCommerce downloadable products?

Yes. Once the plugin is activated, EPUB files can be uploaded to the Media Library and selected as downloadable files for WooCommerce products.

### Are there any settings?

No. Activate the plugin and EPUB upload support is enabled automatically.

### What happens if I deactivate the plugin?

Existing EPUB files will remain in the Media Library and on the server. However, WordPress may prevent new EPUB files from being uploaded while the plugin is inactive.

## Security

This plugin does not use `ALLOW_UNFILTERED_UPLOADS` and does not disable WordPress's general file upload protections.

It specifically adds `.epub` as an approved extension and assigns it the MIME type `application/epub+zip`.

As with all downloadable files, site administrators should only upload EPUB files from trusted sources.

## Changelog

### 1.0.0

* Initial release.
* Added `.epub` to the WordPress permitted upload types.
* Added EPUB MIME type compatibility handling.
* Added support for EPUB files used with WooCommerce downloadable products.

## Author

**Premazon Inc**, Arthur Reeder

## License

Epub Upload Compatibilty Plugin is licensed under the GNU General Public License v2.0 or later.