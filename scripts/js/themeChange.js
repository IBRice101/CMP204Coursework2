var light = '#DBDBDB';
var dark = '#232323';
var silver = '#AAA9AD';

function ChangeThemeLight() {
    document.documentElement.style.setProperty('--background', light);
    document.documentElement.style.setProperty('--p', dark);
}

function ChangeThemeDark() {
    document.documentElement.style.setProperty('--background', dark);
    document.documentElement.style.setProperty('--p', silver);
}
