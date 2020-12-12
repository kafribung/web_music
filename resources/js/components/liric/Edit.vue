<template>
    <form @submit.prevent="updateLiric">
        <div class="position-relative form-group">
            <label for="title" class="">Judul</label>
            <input v-model="liric.title" id="title" placeholder="title" autofocus autocomplete="off" type="text" class="form-control">
            <small v-if="validation.title" class="text-danger">{{ validation.title[0] }}</small>
        </div>
        <div class="position-relative form-group">
            <label for="band" class="">Band</label>
            <select  v-model="liric.band_id" id="band"  class="form-control">
                <option :value="liric.band_id" v-text="liric.band.name"></option>
                <template v-for="band in bands">
                    <option  v-if="liric.band_id !== band.id" :key="band.id" :value="band.id">{{ band.name }}</option>
                </template>
            </select>
            <small v-if="validation.band" class="text-danger">{{ validation.band[0] }}</small>
        </div>
        <div class="position-relative form-group">
            <label for="album" class="">Album</label>
            <select v-model="liric.album_id" id="album"  class="form-control">
                <option :value="liric.album.id" v-text="liric.album.name"></option>
                <template v-for="album in albums">
                    <option v-if="liric.album_id !== album.id" :key="album.id" :value="album.id">{{ album.name }}</option>
                </template>
            </select>
            <small v-if="validation.album" class="text-danger">{{ validation.album[0] }}</small>
        </div>
        <div class="position-relative form-group">
            <label for="body" class="">Lirik</label>
            <ckeditor :editor="editor" v-model="liric.body" id="body" placeholder="title" class="form-control" ></ckeditor>
            <small v-if="validation.body" class="text-danger">{{ validation.body[0] }}</small>
        </div>
        <button type="submit" class="btn btn-warning btn-sm float-right">Edit</button>
    </form>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    data() {
        return {
            'editor' : ClassicEditor,
            setLiric : {},
            validation : {},
        }
    },
    props: ['liric', 'bands', 'albums', 'liric-update'],
    created(){
        // console.log(this.liric.band)
    },
    methods: {
        updateLiric(){
            axios.patch(this.liricUpdate, this.liric)
            .then(response => {
                this.$toasted.success(response.data.msg, {
                    duration : 3600
                })
                window.location.replace('/lirics')
            })
            .catch(error => {
                this.validation = error.response.data.errors
                this.$toasted.error('Error validation')
            })
        }
    },
}
</script>