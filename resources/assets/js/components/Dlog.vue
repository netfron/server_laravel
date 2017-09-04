<template>
    <div>{{ postData }}</div>
</template>

<script>
    export default {

        /*
         * The component's data.
         */
        data() {
            return {
                postData: null
            };
        },        
        mounted() {
            this.prepareComponent();
        },
        methods: {
            /**
             * Prepare the component.
             */
            prepareComponent() {
                this.getPost();
            },
            getPost() {
                axios.get('/api/post')
                        .then(response => {
                            this.postData = response.data;
                        });
            }
        }
        
    }
</script>
