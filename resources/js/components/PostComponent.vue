<template>
    <div id="container">
        <section id="container">

        </section>

        <section id="posts">
            <ul>
                <li :id="post.id" v-for="post in posts" :key="post.id">
                    <div class="text-post">
                        <h1>{{ post.title }}</h1>
                        <p>{{ post.text }}</p>
                    </div>

                    <div class="image-post">
                        <img v-if="post.image" :src="`/storage/asset/` + post.image">
                        <p v-else>no image</p>
                    </div>
                </li>
            </ul>
        </section>
    </div>
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