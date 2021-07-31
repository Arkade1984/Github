// const Telegraf =  require('telegraf');

// const bot =  new Telegraf('1888442275:AAGj_aKQEKvBXRj5f6FKQp-NGV23BLjqSlo');

// //          /start
// bot.start((ctx) => {
// ctx.reply(ctx.from.first_name + 'You have entered the start command' + ctx.updateSubTypes[0]);

// })

// bot.help((ctx) => {
//     ctx.reply('You have entered the help command');

// })

// bot.settings((ctx) => {
//     ctx.reply('You have entered the settings commands')
// })

// bot.command(["test", "Test"], (ctx) => {
//     cty.reply("Hello World");
// })

// bot.launch();

bot.hears("cat", (ctx) => (
    ctx.reply("Meow");
))

bot.on("stickers", (ctx) => (
    ctx.reply("This is a sticker message");
))

bot.launch();