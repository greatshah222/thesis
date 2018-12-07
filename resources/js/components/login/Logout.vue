<template>

</template>
<script>
    export default {
        created(){
            EventBus.$emit('flogout');
        }
    }
</script>