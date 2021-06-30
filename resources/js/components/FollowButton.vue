<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser">Follow Me Now</button>
    </div>
</template>

<script>
    export default {
        props: ['userId'],
        methods: {
            followUser () {
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        alert(response.data);
                    });
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
