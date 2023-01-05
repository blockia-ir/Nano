# Nano
NanoBot - The modern telegram bot library
<hr>
To start, add the library file (Nano.php) to your project.

Create a custom file and proceed according to examples in GitHub such as (example-sendMessage.php).
<hr>

### Telegram Methods
NanoBot use standard [Telegram Bot API](https://core.telegram.org/bots/api#available-methods) method names.
##### `Nano::getMe()` [?](https://core.telegram.org/bots/api#getme)
A simple method for testing your bot's auth token.
##### `Nano::sendMessage(<text>, <options>)` [?](https://core.telegram.org/bots/api#sendmessage)
Use this method to send text messages.
##### `Nano::forwardMessage(<options>)` [?](https://core.telegram.org/bots/api#forwardmessage)
Use this method to forward messages of any kind.
##### `Nano::sendPhoto(<file path | file id | url>, <options>)` [?](https://core.telegram.org/bots/api#sendphoto)
Use this method to send a photo.
##### `Nano::sendVideo(<file path | file id | url>, <options>)` [?](https://core.telegram.org/bots/api#sendvideo)
Use this method to send a video.
##### `Nano::sendAudio(<file path | file id | url>, <options>)` [?](https://core.telegram.org/bots/api#sendaudio)
Use this method to send a audio.
##### `Nano::sendVoice(<file path | file id | url>, <options>)` [?](https://core.telegram.org/bots/api#sendvoice)
Use this method to send a voice message.
##### `Nano::sendDocument(<file path | file id | url>, <options>)` [?](https://core.telegram.org/bots/api#senddocument)
Use this method to send a document.
##### `Nano::sendSticker(<file path | file id | url>, <options>)` [?](https://core.telegram.org/bots/api#sendsticker)
Use this method to send a sticker.
##### `Nano::sendLocation(<options>)` [?](https://core.telegram.org/bots/api#sendlocation)
Use this method to send point on the map.
##### `Nano::sendVenue(<options>)` [?](https://core.telegram.org/bots/api#sendvenue)
Use this method to send information about a venue.
##### `Nano::sendContact(<options>)` [?](https://core.telegram.org/bots/api#sendcontact)
Use this method to send phone contacts.
##### `Nano::sendChatAction(<action>, <options>)` [?](https://core.telegram.org/bots/api#sendchataction)
Use this method when you need to tell the user that something is happening on the bot's side.
##### `Nano::getUserProfilePhotos(<user id>, <options>)` [?](https://core.telegram.org/bots/api#getuserprofilephotos)
Use this method to get a list of profile pictures for a user.
##### `Nano::getFile(<file id>)` [?](https://core.telegram.org/bots/api#getfile)
Use this method to get basic info about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size.
##### `Nano::answerInlineQuery(<array of results>, <options>)` [?](https://core.telegram.org/bots/api#answerinlinequery)
Use this method to send answers to an inline query.
##### `Nano::answerCallbackQuery(<text>, <options>)` [?](https://core.telegram.org/bots/api#answercallbackquery)
Use this method to send answers to callback queries sent from inline keyboards.
##### `Nano::getChat(<chat_id>)` [?](https://core.telegram.org/bots/api#getchat)
Use this method to get up to date information about the chat.
##### `Nano::leaveChat(<chat_id>)` [?](https://core.telegram.org/bots/api#leavechat)
Use this method for your bot to leave a group, supergroup or channel.
##### `Nano::getChatAdministrators(<chat_id>)` [?](https://core.telegram.org/bots/api#getchatadministrators)
Use this method to get a list of administrators in a chat.
##### `Nano::getChatMembersCount(<chat_id>)` [?](https://core.telegram.org/bots/api#getchatmemberscount)
Use this method to get the number of members in a chat.
##### `Nano::getChatMember(<options>)` [?](https://core.telegram.org/bots/api#getchatmember)
Use this method to get information about a member of a chat.
##### `Nano::kickChatMember(<options>)` [?](https://core.telegram.org/bots/api#kickchatmember)
Use this method to kick a user from a group or a supergroup.
##### `Nano::unbanChatMember(<options>)` [?](https://core.telegram.org/bots/api#unbanchatmember)
Use this method to unban a previously kicked user in a supergroup.
##### `Nano::editMessageText(<options>)` [?](https://core.telegram.org/bots/api#editmessagetext)
Use this method to edit text messages sent by the bot or via the bot (for inline bots).
##### `Nano::editMessageCaption(<options>)` [?](https://core.telegram.org/bots/api#editmessagecaption)
Use this method to edit captions of messages sent by the bot or via the bot (for inline bots).
##### `Nano::editMessageReplyMarkup(<options>)` [?](https://core.telegram.org/bots/api#editmessagereplymarkup)
Use this method to edit only the reply markup of messages sent by the bot or via the bot (for inline bots).
#####  `Nano::sendGame(<game short name>, <options>)` [?](https://core.telegram.org/bots/api#sendgame)
Use this method to send a game.
##### `Nano::setGameScore(<options>)` [?](https://core.telegram.org/bots/api#setgamescore)
Use this method to set the score of the specified user in a game.
##### `Nano::getGameHighScores(<user id>, <options>)` [?](https://core.telegram.org/bots/api#getgamehighscores)
Use this method to get data for high score tables.

## Webhook installation
Open via browser `https://api.telegram.org/bot<BOT TOKEN>/setWebhook?url=https://yourdomain.com/your_bot.php`
