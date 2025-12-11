# V7 SVG Upload Enabler

**Contributors:** Vaibhaw Kumar  
**Tags:** svg, upload, media, images, security  
**Requires at least:** 4.0  
**Tested up to:** 6.4  
**Stable tag:** 1.0.0  
**License:** GPL v2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html

A professional WordPress plugin that enables secure SVG image uploads to the media library with built-in validation and sanitization.

## Description

The V7 SVG Upload Enabler plugin allows you to upload SVG (Scalable Vector Graphics) files directly to your WordPress media library. Unlike standard image formats, SVG files are not allowed by default in WordPress due to potential security concerns. This plugin enables SVG uploads while implementing security measures to ensure safe usage.

### Key Features

- **Automatic Enablement**: SVG uploads are enabled immediately upon plugin activation
- **Security Validation**: Validates uploaded SVG files to ensure they contain valid SVG code
- **Content Sanitization**: Automatically removes potentially harmful script tags from SVG files
- **No Configuration Required**: Works out of the box without any settings or user intervention
- **Professional Code**: Built with WordPress best practices and security standards
- **Lightweight**: Minimal impact on site performance

### Security Features

- Validates SVG structure before allowing uploads
- Strips out `<script>` tags and other potentially malicious content
- Only allows valid SVG MIME types (`image/svg+xml`)
- Follows WordPress security guidelines

## Installation

### Automatic Installation (Recommended)

1. Log in to your WordPress admin dashboard
2. Navigate to **Plugins > Add New**
3. Search for "V7 SVG Upload Enabler"
4. Click **Install Now**
5. Click **Activate** to enable the plugin

### Manual Installation

1. Download the plugin ZIP file from the [WordPress Plugin Directory](https://github.com/thevaibhaw/v7-svg-upload-enabler/archive/refs/heads/main.zip)
2. Log in to your WordPress admin dashboard
3. Navigate to **Plugins > Add New > Upload Plugin**
4. Click **Choose File** and select the downloaded ZIP file
5. Click **Install Now**
6. Click **Activate** to enable the plugin

### FTP Installation

1. Download and unzip the plugin files
2. Upload the `v7-svg-upload-enabler` folder to `/wp-content/plugins/` directory
3. Activate the plugin through the **Plugins** menu in WordPress

## Usage

### Basic Usage

Once activated, the plugin works automatically:

1. **Upload SVG Files**: Go to **Media > Add New** or use any media uploader in WordPress
2. **Select SVG File**: Choose your `.svg` file and upload as usual
3. **Insert in Content**: Use the uploaded SVG in posts, pages, or custom post types just like any other image

### Supported File Types

- `.svg` files
- MIME type: `image/svg+xml`

### Where SVG Files Can Be Used

- Post and page content
- Featured images (if your theme supports SVG)
- Custom fields
- Media library for general use
- Theme customizers (depending on theme support)

## Frequently Asked Questions

### Does this plugin require any configuration?

No, the plugin works automatically once activated. No settings or configuration is needed.

### Is it safe to upload SVG files?

Yes, this plugin includes security measures:

- Validates SVG file structure
- Removes potentially harmful script tags
- Only allows valid SVG content

However, always ensure SVG files come from trusted sources.

### Can I upload SVG files to custom post types?

Yes, SVG uploads work with any post type that supports media uploads.

### Does this affect existing media uploads?

No, this plugin only adds SVG support. All existing media functionality remains unchanged.

### What happens if I deactivate the plugin?

Existing SVG files in your media library will remain, but you won't be able to upload new SVG files until the plugin is reactivated.

### Can I use this with page builders?

Yes, the plugin works with popular page builders like Elementor, Beaver Builder, and others that support media uploads.

## Screenshots

1. **Media Library with SVG Support** - Upload SVG files directly to your media library
2. **SVG in Content** - Use SVG files in posts and pages like any other image

## Changelog

### 1.0.0

- Initial release
- Automatic SVG upload enablement
- Security validation and sanitization
- Professional code structure

## Upgrade Notice

### 1.0.0

Initial release - no upgrade needed.

## Requirements

- WordPress 4.0 or higher
- PHP 5.6 or higher
- MySQL 5.0 or higher

## Support

For support, bug reports, or feature requests:

- **Author:** Vaibhaw Kumar
- **Email:** imvaibhaw@gmail.com
- **Website:** https://vaibhawkumarparashar.in

## Contributing

Contributions are welcome! Please feel free to submit pull requests or open issues on the [TheVaibhaw](https://github.com/thevaibhaw/v7-svg-upload-enabler).

## License

This plugin is licensed under the GPL v2 or later.

```
V7 SVG Upload Enabler
Copyright (C) 2025, Vaibhaw Kumar

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
```

## Credits

- **Developer:** Vaibhaw Kumar
- **Testing:** WordPress 6.4
- **Security Review:** Built with WordPress security best practices

## Donations

If you find this plugin helpful, consider supporting future development:

- **PayPal:** [Donate via PayPal](https://paypal.me/vaibhawkumar)
- **Buy Me a Coffee:** [Support on Buy Me a Coffee](https://buymeacoffee.com/vaibhawkumar)

Thank you for using V7 SVG Upload Enabler!
