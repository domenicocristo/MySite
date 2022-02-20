<template>
    <section id="posts">
        <ul v-for="post in posts" :key="post.id">
            <li id="text-posts">
                <h1>{{ post.title }}</h1>
                <p>{{ post.text }}</p>
            </li>
            <li id="image-posts">
                <img v-if="post.image" :src="`/storage/asset/` + post.image">
                <p v-else>no image</p>
            </li>
        </ul>
    </section>
</template>

<script>
export default {
    data: function() {
        return {
            posts: []
        };
    },

    mounted() {
        axios.get('/api/posts/list')
        .then(r => this.posts = r.data)
        .catch(e => console.error(e));
    }
}
</script>