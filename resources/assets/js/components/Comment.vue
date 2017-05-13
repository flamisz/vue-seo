<template>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">{{ comment.owner.name }}</div>
        
            <div class="panel-body">
                {{ comment.body }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['comment'],

        mounted() {
            console.log('Comment mounted.');
        }
    }
</script>
