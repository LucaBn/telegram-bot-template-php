# Telegram Bot Template PHP

This repository contains a simple PHP template to create a Telegram bot using the [Telegram Bot API](https://core.telegram.org/bots/api).

## How to Use

1. **Obtain a Bot Token**

   - Talk to [BotFather](https://core.telegram.org/bots#botfather) on Telegram to create a new bot.
   - Copy the provided token (e.g., `123456789:AAEfYe15op9g1U0tzgvvRKmJtT4TGXbLkL0`).

2. **Set the Webhook**

   - Replace `{your_token}` and `{your_url}` in the following link:
     ```
     https://api.telegram.org/bot{your_token}/setWebhook?url={your_url}
     ```
   - Example:
     ```
     https://api.telegram.org/bot123456789:AAEfYe15op9g1U0tzgvvRKmJtT4TGXbLkL0/setWebhook?url=https://www.yourwebsite.com/your_page.php
     ```

3. **Edit the Template**

   - Replace `secret_token` in the `$token` variable with your actual bot token.
   - Customize responses in the `switch` block to handle different commands.

4. **Host the Script**
   - Upload the PHP file to your server (e.g., `your_page.php`).
   - Make sure your server supports HTTPS, as Telegram requires secure connections for webhooks.

## Features

- Responds to `/start` and `/test` commands.
- Provides utility functions to send messages, photos, and videos:
  - `sendMessage($id, $text)`
  - `sendPhoto($id, $photo_id)`
  - `sendVideo($id, $video_id)`

## Example Commands

- `/start` - The bot will greet the user.
- `/test` - The bot will respond with a test message.

## Documentation

For detailed API information, refer to the [Telegram Bot API Documentation](https://core.telegram.org/bots/api).

## License

This template is free to use and modify. Attribution is appreciated but not required.
