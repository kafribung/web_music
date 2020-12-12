<template>
    <form @submit.prevent="createLiric">
        <div class="position-relative form-group">
            <label for="title" class="">Judul</label>
            <input v-model="liric.title" id="title" placeholder="title" autofocus autocomplete="off" type="text" class="form-control">
            <small v-if="validation.title" class="text-danger">{{ validation.title[0] }}</small>
        </div>
        <div class="position-relative form-group">
            <label for="band" class="">Band</label>
            <select v-model="liric.band" id="band"  class="form-control">
                <option selected disabled>Option Band</option>
                <option  v-for="(band, index) in bands" :key="index" :value="band.id" >{{ band.name }}</option>
            </select>
            <small v-if="validation.band" class="text-danger">{{ validation.band[0] }}</small>
        </div>
        <div class="position-relative form-group">
            <label for="album" class="">Album</label>
            <select v-model="liric.album" id="album"  class="form-control">
                <option selected disabled>Option ALbum</option>
                <option  v-for="(album, index) in albums" :key="index" :value="album.id" >{{ album.name }}</option>
            </select>
            <small v-if="validation.album" class="text-danger">{{ validation.album[0] }}</small>
        </div>
        <div class="position-relative form-group">
            <label for="body" class="">Lirik</label>
            <ckeditor :editor="editor" v-model="liric.body" id="body" placeholder="title" class="form-control" ></ckeditor>
            <small v-if="validation.body" class="text-danger">{{ validation.body[0] }}</small>
        </div>
        <button type="submit" class="btn btn-primary btn-sm float-right">Store</button>
    </form>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    data() {
        return {
            'editor' : ClassicEditor,
            liric : {
                'title'   : '',
                'band' : '',
                'album' : '',
                'body'    : '',
            },
            validation : {},
        }
    },
    props: ['bands', 'albums', 'liric-store'],
    methods: {
        createLiric() {
            axios.post(this.liricStore, this.liric)
            .then((response) => {
                this.$toasted.show(response.data.msg, {
                    type: "success",
                    duration: 3000,
                })
                window.location.replace('/lirics')
            })
            .catch(error =>  {
                this.validation = error.response.data.errors
                this.$toasted.error('Error validation')
            });
        }
    },
}
</script>