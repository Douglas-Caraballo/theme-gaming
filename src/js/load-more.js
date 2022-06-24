const LoadMore = document.getElementById('load-more');
let posted = document.querySelector('.content-news');
let itemPost;
if(posted){
    itemPost = posted.querySelector('.news-item');
    LoadMore.addEventListener('click', async()=>{
        const url = requestListPostVar.url;
        const posts = await requestPosts(url);
        displayPost(posts);
    });
}


function displayPost(posts){
    posts.map(post =>{
        let newItemPost = itemPost.cloneNode(true);

        let permalink = newItemPost.querySelector('.news-item__figure a');
        permalink.setAttribute('href', post.permalink);
        permalink.innerHTML = post.thumbnail;

        let title = newItemPost.querySelector('.news-item__wrapper-title__title a');
        title.setAttribute('href', post.permalink);
        title.innerHTML = post.title;

        let author = newItemPost.querySelector('.news-item__detalist__author');
        author.innerHTML = post.author;

        let date = newItemPost.querySelector('.news-item__detalist__date');
        date.innerHTML = post.date;

        let excerpt = newItemPost.querySelector('.news-item__read-more__excerpt p');
        excerpt.innerHTML = post.excerpt;

        let more = newItemPost.querySelector('.news-item__read-more__more');
        more.setAttribute('href', post.permalink);




        posted.insertAdjacentElement('beforeend', newItemPost);
    });

}

async function requestPosts(url){
    let current_page = LoadMore.dataset.currentPage;

    let next_page = parseInt(current_page, 10) +1;

    LoadMore.dataset.currentPage = next_page;

    const response = await fetch(`${url}?paged=${next_page}&per_page=2`);

    const posts = await response.json();

    return posts.posts;
}