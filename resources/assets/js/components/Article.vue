<template>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ article.title }}</div>

                <div class="panel-body">{{ article.body }}</div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <h3>Comments</h3>
        </div>

        <comment v-for="comment in comments" :comment="comment" :key="comment.id"></comment>
    </div>
</template>

<script>
    export default {
        props: ['articleId'],

        data: function () {
            return {
                article: [],
                comments: []
            }
        },

        mounted() {
            console.log('Article mounted.');

            axios.get('/api/article', {
                    params: {
                        article_id: this.articleId
                    }
                })
                .then(response => this.article = response.data);

            axios.get('/api/comments', {
                    params: {
                        article_id: this.articleId
                    }
                })
                .then(response => this.comments = response.data);
        }
    }
</script>
