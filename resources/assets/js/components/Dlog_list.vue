<template>
    <div>
        <div v-for="item in listData" v-bind:key="item.id">
            <div v-for="itemData in item" v-bind:key="itemData.id">
                id : {{itemData}}
            </div>
        </div>
    </div>
</template>
<script>
    export default {

        data: function () {
            return {
                listData : this.$parent.listData
            };
        },
        mounted() {
        }        
    }
</script>