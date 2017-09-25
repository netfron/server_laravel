<template>
<div>
    <div>Name : {{ userData.name }}</div>
    <div>Email : {{ userData.email }}</div>
</div>    
</template>

<script>
    export default {

        /*
         * The component's data.
         */
        data() {
            return {
                userData: {}
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
