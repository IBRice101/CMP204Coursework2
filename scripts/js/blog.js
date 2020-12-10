//TODO: Figure out how tf to get these arrows working

let blogNum = 1;
let postLocation =  "blogposts/post" + blogNum + ".php";

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
    $(document).ready(function () {
        $("#blogSpace").load(postLocation);
    })
}