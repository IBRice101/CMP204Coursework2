let blogNum = 1;

function numUp() {
    blogNum++;

    if (blogNum > 5) {
        blogNum = 1;

    } else {
        //do nothing
    }
    loadBlog();
    return blogNum;
}

function numDown() {
    blogNum--;

    if (blogNum < 1) {
        blogNum = 5;
    } else {
        //do nothing
    }
    loadBlog();
    return blogNum;
}

function loadBlog () {
    $("#blogSpace").load("blogposts/post" + blogNum + ".php");
}