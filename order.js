function emailsend(){


Email.send({
    Host : "smtp.elasticemail.com",
    Username : "phalodiemart@gmail.com",
    Password : "1E712B84C2353E5C389EBC56F964514ABE68",
    To : 'chhanganirajesh486@gmail.com',
    From : "phalodiemart@gmail.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);
}