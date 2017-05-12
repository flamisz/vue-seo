<template>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['propArticleId'],

        data: function () {
            return {
                articleId: this.propArticleId,
                article: []
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
        }
    }
</script>
