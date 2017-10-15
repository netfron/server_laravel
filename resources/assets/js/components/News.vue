<template>
    <div>
       <div v-for="item in listData" v-bind:key="item.id">
            <div class="panel panel-default" v-for="itemData in item" v-bind:key="itemData.id">
                <div class="panel-heading">{{itemData.news_title}}</div>
                <div class="panel-body">
                    <a v-bind:href="itemData.news_link_url" target="_blank">{{itemData.news_link_url}}</a>
                </div>                
            </div>            
        </div> 
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
                var url = '/api/news?page=' + this.page;
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
