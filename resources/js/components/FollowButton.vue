<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                status: this.follows,
            }
        },
        props: ['userId', 'follows'],
        methods: {
            followUser () {
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        this.status = ! this.status;

                        console.log(response.data);
                    })
                    .catch(errors => {
                        if(errors.response.status == 401) {
                            window.location = '/login';
                        }
                    });
            },
        },
        mounted() {
            console.log('Component mounted.')
        },
        computed: {
            buttonText() {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
