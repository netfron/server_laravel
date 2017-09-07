<template>
    <div>
        <div></div>
        <dlog-list></dlog-list>
        <div class="col-md-6 col-md-offset-4">
            <button type="button" class="btn btn-primary" v-on:click.prevent="getPostNext">More</button>
        </div>
    </div>
</template>

<script>

    export default {

        /*
         * The component's data.
         */
        data() {
            return {
                postData: null,
                listData: [],
                page: 1,
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
                var url = '/api/post?page=' + this.page;
                axios.get(url)
                        .then(response => {
                            this.postData = response.data;
                            this.listData.push(response.data.data);
                        });
            },
            getPostNext(){
                if(this.postData.last_page > this.page){
                    this.page++;
                    this.getPost();
                }
            }
        }
        
    }
</script>
