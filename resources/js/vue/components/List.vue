<template>
<div>
    <h1>Listado de post </h1>

    <o-table :data="post.length == 0 ? []: post">
        <o-table-column field="id" label="ID" numeric v-slot="p">
            {{ p.id }}
        </o-table-column>

    </o-table>

</div>
</template>

<script>
export default {

    data() {
        return {
            posts : [],
            loading : true
        }
    },

    async mounted() {

        this.$axios.get('/api/post').then((res) => {
            this.posts = res.data
            console.log(this.posts)
            this.loading = false
        })
    }
};
</script>
