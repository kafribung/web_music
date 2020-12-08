<template>
    <form action="">
        <div class="position-relative form-group">
            <label for="album" class="">Judul</label>
            <input name="name" id="album" placeholder="album name" autofocus autocomplete="off" type="text" class="form-control">
            <small class="text-danger">{{ }}</small>
        </div>
        <div class="position-relative form-group">
            <label for="album" class="">Band</label>
            select
            <input name="name" id="album" placeholder="album name" autofocus autocomplete="off" type="text" class="form-control">
            <small class="text-danger">{{ }}</small>
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            'title' : '',
            'errors' : [],
        }
    },
    mounted() {
        
    },
}
</script>