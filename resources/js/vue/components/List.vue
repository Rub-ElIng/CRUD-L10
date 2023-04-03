<template>
<div>
    <h1>Listado de post </h1>
     <o-button @click="clickMe">pulsa!</o-button>
</div>
</template>
<script>

export default{
    methods: {
        clickMe(){
            alert("pulsado");
        },
    },
};
</script>

