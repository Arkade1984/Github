const Telegraf =  require('telegraf');

const bot =  new Telegraf('1888442275:AAGj_aKQEKvBXRj5f6FKQp-NGV23BLjqSlo');

//          /start
bot.start((ctx) => {
ctx.reply(ctx.from.first_name + 'You have entered the start command' + ctx.updateSubTypes[0]);
console.log(ctx);
})

bot.help((ctx) => {
    ctx.reply('You have entered the help command');

})

bot.settings((ctx) => {
    ctx.reply('You have entered the settings commands')
})

bot.launch();