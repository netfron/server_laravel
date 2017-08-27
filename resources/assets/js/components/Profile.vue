<template>
    <div>{{ userData }}</div>
</template>

<script>
    export default {

        /*
         * The component's data.
         */
        data() {
            return {
                userData: null
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
                this.getProfile();
            },
            getProfile() {
                axios.get('/api/user')
                        .then(response => {
                            this.userData = response.data;
                        });
            }
        }
        
    }
</script>
