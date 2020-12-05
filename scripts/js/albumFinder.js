function findSong(song) {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("album").innerHTML = this.responseText;
        }
    }
    xhr.open("GET", "../master/scriptAlbumFinder.php?q="+song, true);
    xhr.send();
}