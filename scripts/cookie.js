function setCookie() {
    const homeworkRelease = new Date('1997-01-17');
    msSinceHomework = homeworkRelease.getTime();
    document.cookie = "Time in ms since Daft Punk released their debut album Homework: " + msSinceHomework;
}

window.onload = function() {
    setCookie();
    console.log(document.cookie);
  };